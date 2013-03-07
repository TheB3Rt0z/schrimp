<?php

class main
{
	public static $todos = array
	(
		'documentation' => "PHP's highlight_string/file to rapresent code excerpts",
		'escort library' => "session su PHP poi DB se webstore & memcache fail?",
		'memcache support' => "verify in method, if at least one mem-server works",
		'load_libraries' => "find someway to avoid conflicts between libs/plugins",
		'pdf documentation' => "check file creation/modification date -> reminder",
	    'cyc & documentation' => "render per line & move to another library class",
	);

    private $_call = null;

    private $_path = '';

    static $controller = '';
    static $action = null;
    static $args = array();

    var $title = '';

    var $header = '';
    var $nav = '';
    var $section = '';
    var $article = '';
    var $aside = '';
    var $footer = '';

    function __construct($uri)
    {
    	$this->_set_configuration("configuration"); // easy filename change if needed
    	$this->_load_libraries();

        if (_SET_DEVELOPMENT_MODE) // only for developers, no further error 500 required
            file_put_contents(SET_DOCUMENTATION_MD . ".md",
        	                  code::get_documentation()); // delete file to resolve permissions

        $this->_initialize(str_replace(_SET_LOCAL_PATH . "/",
                                       '',
                                       $uri));
    }

    private function _set_configuration($conf_name)
    {
    	$user_file = "." . $conf_name;
    	$base_file = $user_file . ".tmp";

    	eval("\$base_conf = array(" . file_get_contents($base_file) . ");");
    	eval("\$user_conf = array(" . file_get_contents($user_file) . ");");

    	$configuration = $user_conf + $base_conf;

    	foreach ($configuration as $key => $value)
    		define(strtoupper($key), (is_array($value)
    				                 ? serialize($value)
    				                 : $value));

    	define('_SET_TRANSPORT_PROTOCOL', "http" . (getenv('HTTPS') == 'on'
    			                                  ? "s"
    			                                  : '')); // auto-detecting

    	define('_SET_HOME_COMPONENT', _SET_DEVELOPMENT_MODE
    	                             ? "admin"
    	                             : "homepage"); // convention

    	define('MAX_CYCLOMATIC_COMPLEXITY', SET_COMPLEXITY_INDEX); // base complexity index
		define('MAX_METHODS_COMPLEXITY', SET_COMPLEXITY_INDEX * 3); // ATM 36 max code lines
		define('MAX_BLOCK_COMPLEXITY', SET_COMPLEXITY_INDEX * 7); // ATM 84 max code line length

		define('_MAX_CLASS_COMPLEXITY',
		       MAX_BLOCK_COMPLEXITY * SET_COMPLEXITY_INDEX); // ATM not used (private optional)
    }

    private function _load_libraries()
    {
        foreach (glob(_SET_LIBRARIES_PATH . "*.php") as $filename)
            require_once $filename;

        foreach (glob(_SET_LIBRARIES_PUBLICPATH . "*.php") as $filename)
            require_once $filename;
    }

    private function _set_route_static_traits($components)
    {
        self::$controller = array_shift($components);
        if (!empty($components))
        {
            self::$action = array_shift($components);
            if (!empty($components))
                self::$args = array_filter($components);
        }
    }

    private function _set_home_component()
    {
        self::$controller = _SET_HOME_COMPONENT;

        if (!_SET_DEVELOPMENT_MODE)
            $this->_path = _SET_APPLICATION_PUBLICPATH;
    }

    private function _set_htmls_from_controller()
    {
        $this->title = $this->_call->get_title() . "\n";

        $this->header = $this->_call->get_header() . "\n";
        $this->nav = $this->_call->get_nav() . "\n";
        $this->section = $this->_call->get_section() . "\n";
        $this->article = $this->_call->get_article() . "\n";
        $this->aside = $this->_call->get_aside() . "\n";
        $this->footer = $this->_call->get_footer() . "\n";
    }

    private function _initialize($route) // set "AllowOverride All" directive for .htaccess file required!
    {
        $components = explode("/",
                              $route);

        $this->_path = _SET_APPLICATION_PATH; // using default modules

        if ($components[0])
        {
        	if (!substr_count($components[0], "_"))
        	{
        		if (fe(_SET_APPLICATION_PUBLICPATH . $components[0] . ".php"))
        			$this->_path = _SET_APPLICATION_PUBLICPATH; // using external module
        		elseif (!fe(_SET_APPLICATION_PATH . $components[0] . ".php"))
        			rt("error/404");
        	}
        	else
        		rt("error/404");

        	$this->_set_route_static_traits($components);
        }
        else
            $this->_set_home_component();

        require_once $this->_path . self::$controller . ".php";
        foreach (glob($this->_path . self::$controller . "_*.php") as $filename)
            require_once $filename;

        $this->_call = new self::$controller(self::$action,
                                             self::$args);

        $this->_set_htmls_from_controller();
    }

    function get_call()
    {
        return $this->_call;
    }

    function get_path()
    {
    	return $this->_path;
    }

    function get_fullpath()
    {
    	return $this->_path . self::$controller;
    }

    static function var_dump($what)
    {
    	echo html::preform($what);
    }

    static function get_version($precision = 2)
    {
        return (is_int($precision/2) ? "v": '')
             . number_format(((mktime(date('H'), date('i'), date('s'),
        		                      date('n'), date('j'), date('Y'))
        	                 - mktime(17, 11, 33,
        	                       	  9, 21, 2012)) / 31557600), $precision);
    }

    static function is_webstoraged()
    {
		// local and/or session storage are available? only with js..
    }

    static function is_memcached()
    {
        return extension_loaded('memcache');
    }

    static function exists_file($path)
    {
        return file_exists(realpath($path));
    }

    static function resolve_uri($uri = '')
    {
        return _SET_TRANSPORT_PROTOCOL . "://"
        	 . $_SERVER['HTTP_HOST']
             . _SET_LOCAL_PATH
             . "/" . $uri;
    }

    static function relocate_to($url = '')
    {
        header("Location: " . ru($url)); // output check not required ATM
    }

    static function launch_error($msg)
    {
        $msg = str_replace("/",
                           "\\",
                           $msg);

        $url = "error/500/" . urlencode($msg);

        if ($_SERVER['REQUEST_URI'] != (_SET_LOCAL_PATH . "/" . $url))
            rt($url);

        return false; // just in case
    }

    static function set_buffer($buffer)
    {
		file_put_contents(".buffer", serialize($buffer));
    }

    static function get_buffer($delete = true)
    {
    	$buffer = unserialize(file_get_contents(".buffer"));

    	if ($delete)
    		unlink(".buffer");

    	return $buffer;
    }

    static function show_backtrace()
    {
		ob_start();
			debug_print_backtrace();
		main::set_buffer(str_replace("#", html::newline(), ob_get_clean()));

    	if ($_SERVER['REQUEST_URI'] != (_SET_LOCAL_PATH . "/error"))
    		rt("error");
    }
}

/**
 * returns pre-formatted mixed variables;
 * @param mixed $what
 * @return void
 */
function vd($what)
{
	main::var_dump($what);
}

/**
 * returns boolean if realpath path exists on running server;
 * @param string $path
 * @return boolean true if realpath exists, false otherwise
 */
function fe($path)
{
	return main::exists_file($path);
}

/**
 * returns an absolute uri, based on current server configuration;
 * @param string $uri
 * @return string absolute http unified resource identifier
 */
function ru($uri = '')
{
	return main::resolve_uri($uri);
}

/**
 * relocates to given relative url or to base path on default;
 * @param string $url
 * @return void
 */
function rt($url = '')
{
	main::relocate_to($url);
}

/**
 * launches a customizable error 500, mit optional backtrace for debug;
 * @param string $msg
 * @return boolean false after relocate
 */
function le($msg)
{
	return main::launch_error($msg);
}

/**
 * show call's backtrace with help of error base handler
 * @return void
 */
function sb()
{
	main::show_backtrace();
}

?>
