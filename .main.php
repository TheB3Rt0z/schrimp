<?php

class main
{
	public static $todos = array
	(
		'documentation' => "PHP's highlight_string/file to rapresent code excerpts",
		'escort library' => "session su PHP poi DB se webstore & memcache fail?",
		'memcache support' => "verify in method, if at least one mem-server works",
		'load_libraries' => "find someway to avoid conflicts between libs/plugins",
		'var_dump' => "add backtracking output, based on debug_(print_)backtrace..",
		'launch_error' => "transport backtracing to hander as string-output",
	);

    private $_call = null;
    private $_path = ".app/";
    private $_modules = array();

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

    var $documentation = null; // this remain false on production servers..

    function __construct($uri, $documentation = '')
    {
    	$this->_set_configuration(".configuration.php"); // easy file change
        $this->_load_libraries();
        $this->_list_modules();

        if (SET_DEVELOPMENT_MODE) // only for developers, no further error 500 required
        {
         	$this->documentation = $this->get_documentation();
        	$doc_file = "README.md";
        	file_put_contents($doc_file, $this->documentation); // markdown format
        }

        $this->_initialize(str_replace(SET_LOCAL_PATH . "/",
                                       '',
                                       $uri));
    }

    private function _set_configuration($configuration_file)
    {
    	require_once $configuration_file; // to be processed for constants
    }

    private function _load_libraries()
    {
        foreach (glob(".lib/*.php") as $filename)
            require_once $filename;

        foreach (glob("lib/*.php") as $filename)
            require_once $filename;
    }

    private function _list_modules()
    {
    	foreach (glob(".app/*.php") as $filename) // scans modules directory
    		if (!substr_count($filename, "_"))
    			$this->_modules[str_replace(array(".app/", ".php"), '', $filename)]
    				= filemtime($filename);

    	foreach (glob("app/*.php") as $filename) // scans application directory
    		if (!substr_count($filename, "_"))
    			$this->_modules[str_replace(array("app/", ".php"), '', $filename)]
    				= filemtime($filename);

    	ksort($this->_modules);
    }

    private function _initialize($route) // set "AllowOverride All" directive for .htaccess file
    {
        $components = explode("/",
                              $route);

        if ($components[0])
        {
        	if (!substr_count($components[0], "_"))
        	{
        		if (fe("app/" . $components[0] . ".php"))
        			$this->_path = "app/"; // using external module
        		elseif (!fe(".app/" . $components[0] . ".php"))
        			rt("error/404");
        	}
        	else
        		rt("error/404");

            self::$controller = array_shift($components);
            if (!empty($components))
            {
                self::$action = array_shift($components);
                if ($components)
                    self::$args = array_filter($components);
            }
        }
        else
            self::$controller = SET_HOME_COMPONENT;

        require_once $this->_path . self::$controller . ".php";
        foreach (glob($this->_path . self::$controller . "_*.php") as $filename)
            require_once $filename;

        $this->_call = new self::$controller(self::$action,
                                             self::$args);

        $this->title = $this->_call->get_title() . "\n";

        $this->header = $this->_call->get_header() . "\n";
        $this->nav = $this->_call->get_nav() . "\n";
        $this->section = $this->_call->get_section() . "\n";
        $this->article = $this->_call->get_article() . "\n";
        $this->aside = $this->_call->get_aside() . "\n";
        $this->footer = $this->_call->get_footer() . "\n";
    }

    function get_call()
    {
        return $this->_call;
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

    static function get_libraries()
    {
    	$user_functions = array();

    	foreach (glob(".lib/*.php") as $filename) // scans core directory
    		$user_functions[str_replace(array(".lib/", ".php"), '', $filename)]
    			= filemtime($filename);

    	foreach (glob("lib/*.php") as $filename) // scans plugins directory
    		$user_functions[str_replace(array("lib/", ".php"), '', $filename)]
    			= filemtime($filename);

    	ksort($user_functions);

    	return $user_functions;
    }

    static function get_documentation()
    {
    	$title = md::image(".inc/img/schrimp_favicon_md.ico")
    	       . " " . STR_PROJECT_NAME . "'s Documentation "
    	       . main::get_version(1);

    	$consts_list = '';
    	$constants = get_defined_constants(true);
    	$user_consts = $constants['user'];
    	ksort($user_consts);
    	if (!empty($user_consts['TODOS']))
    		unset($user_consts['TODOS']); // no needed at this time
    	foreach ($user_consts as $key => $value)
    		$consts_list .= "- **" . $key . "** &#10140; " . fv($value) . "\n";

    	$funcs_list = '';
    	$functions = get_defined_functions();
    	$user_funcs = $functions['user'];
    	sort($user_funcs);
    	foreach ($user_funcs as $function)
    	{
    		$function = new ReflectionFunction($function);
    		$doc_comment = $function->getDocComment();
    		$parameters = array();
    		foreach ($function->getParameters() as $parameter)
    			$parameters[] = "$" . $parameter->getName()
    		                  . ($parameter->isOptional()
    		                    ? " = '" . $parameter->getDefaultValue() . "'" // to be formatted like costants
    		                    : '');
    		$funcs_list .= "- **" . $function->getName() . "("
    				     . implode($parameters, ", ") . ")** &#10140; "
    				     . str_replace(realpath('') . "/",
    				     		       '',
    				     		       $function->getFileName())
    				     . " on line " . $function->getStartLine()
     				     . ($doc_comment
     				       ? "," . trim(str_replace(array("*", "/"),
     				     		                    '',
     				     		                    $doc_comment), " ")
     				       : '') . "\n";
    	}

    	$todos_list = '';
    	foreach (unserialize(TODOS) as $key => $value)
    		$todos_list .= "- **" . $key . "** &#10140; " . $value . "\n";

    	$classes_list = '';
    	$declared_classes = get_declared_classes();
    	asort($declared_classes);
    	foreach ($declared_classes as $class)
    	{
			$class = new ReflectionClass($class);
			if ($class->isUserDefined())
			{
				$class_consts = '';
				foreach ($class->getConstants() as $key => $value)
					if (substr($key, 0, 1) != '_')
						$class_consts .= "- **" . $key . "** &#10140; "
								       . fv($value) . "\n";

				$reference = '';

				$dependences = '';

				$class_todos = '';
				foreach ($class->getStaticPropertyValue('todos') as $key => $value)
					$class_todos .= "- **" . $key . "** &#10140; " . $value . "\n";

				$classes_list .= md::title(2, "Class " . strtoupper($class->name)
						       . " (" . date('r', filemtime($class->getFileName())) . ")")
								 . (!empty($class_consts)
								   ? md::title(3, "Class configuration constants:")
								   . $class_consts // unprotected (no '_XXX') constants here
								   : '')
				                 . (!empty($reference)
				                   ? md::title(3, "Code reference:")
				                   . $reference
				                   : '')
				                 . (!empty($dependences)
				                   ? md::title(3, "Dependences:")
				                   . $dependences
				                   : '')
								 . (!empty($class_todos)
								   ? md::title(3, "TODOs")
								   . $class_todos
								   : '')
				               . md::hr();
			}
    	}

    	return md::title(1, $title)
    	     . md::title(2, "General reference")
    	       . md::title(3, "Global configuration constants")
    	         . $consts_list . MD_NEWLINE_SEQUENCE
    	       . md::title(3, "Function aliases")
    	         . $funcs_list . MD_NEWLINE_SEQUENCE // add more information
    	       . md::title(3, 'TODOs')
    	         . $todos_list . MD_NEWLINE_SEQUENCE
    		 . md::hr()
    		 . $classes_list
    	     . str_repeat("\n", 4) . md::text(STR_COPYRIGHT_SIGNATURE);
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
        return SET_TRANSPORT_PROTOCOL . "://"
        	 . $_SERVER['HTTP_HOST']
             . SET_LOCAL_PATH
             . "/" . $uri;
    }

    static function relocate_to($url = '')
    {
        header("Location: " . ru($url));
    }

    static function launch_error($msg, $backtrace = null)
    {
        $msg = str_replace("/",
                           "\\",
                           $msg);

        $url = "error/500/" . urlencode($msg);

        if ($_SERVER['REQUEST_URI'] != (PATH . "/" . $url))
            rt($url);
    }
}

/**
 * returns pre-formatted mixed variables;
 * @param mixed $what
 */
function vd($what)
{
	main::var_dump($what);
}

/**
 * returns boolean if realpath path exists on running server;
 * @param string $path
 */
function fe($path)
{
	return main::exists_file($path);
}

/**
 * returns an absolute uri, based on current server configuration;
 * @param string $uri
 */
function ru($uri = '')
{
	return main::resolve_uri($uri);
}

/**
 * relocates to given relative url or to base path on default;
 * @param string $url
 */
function rt($url = '')
{
	main::relocate_to($url);
}

/**
 * launches a customizable error 500, mit optional backtrace for debug;
 * @param string $msg
 * @param mixed $backtrace (maybe only a string)
 */
function le($msg, $backtrace = null)
{
	main::launch_error($msg, $backtrace);
}

?>
