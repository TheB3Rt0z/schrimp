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
	);

    private $_call = null;

    private $_path = ".app/";

    private static $_cyc_counters = array // do we need failsafe falls?
                   (
                       "if (",
                       "if(",
                       "if  (",
                       "case ",
                       "catch (",
                       "while (",
                       "while(",
                       "while  (",
                       "for (",
                       "for(",
                       "for  (",
                       "foreach (",
                       "foreach(",
                       "foreach  (",
                       " && ",
                       " || ",
                       " and ",
                       " or ",
                       " xor ",
                       " & ",
                       " | ",
                       " ^ ",
                   );

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

    var $documentation = null; // this remain null on production servers..

    function __construct($uri, $documentation = '')
    {
    	$this->_set_configuration("configuration"); // easy filename change if needed
    	$this->_load_libraries();

        if (_SET_DEVELOPMENT_MODE) // only for developers, no further error 500 required
        {
         	$this->documentation = $this->get_documentation();
        	$doc_file = "README.md";
        	file_put_contents($doc_file, $this->documentation); // markdown format
        }

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
    }

    private function _load_libraries()
    {
        foreach (glob(".lib/*.php") as $filename)
            require_once $filename;

        foreach (glob("lib/*.php") as $filename)
            require_once $filename;
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
        {
            self::$controller = _SET_HOME_COMPONENT;
        	if (!_SET_DEVELOPMENT_MODE)
        		$this->_path = "app/";
        }

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

    static function get_components($components = array())
    {
    	foreach (glob(".app/*.php") as $filename) // scans modules directory
    		if (!substr_count($filename, "_"))
    			$components[str_replace(array(".app/", ".php"), '', $filename)]
    				= filemtime($filename);

    	foreach (glob("app/*.php") as $filename) // scans application directory
    		if (!substr_count($filename, "_"))
    			$components[str_replace(array("app/", ".php"), '', $filename)]
    				= filemtime($filename);

    	ksort($components);

    	return $components;
    }

    static function get_documentation()
    {
    	$title = md::image(".inc/img/schrimp_favicon_md.ico")
    	       . " " . _STR_PROJECT_NAME . "'s Documentation "
    	       . main::get_version(1) . date('.Y.m.d');

    	$consts_list = '';
    	$constants = get_defined_constants(true);
    	$user_consts = $constants['user'];
    	ksort($user_consts);
    	foreach ($user_consts as $key => $value)
    		if (substr($key, 0, 1) != '_')
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
    	foreach (unserialize(_TODOS) as $key => $value)
    		$todos_list .= "- **" . $key . "** &#10140; " . $value . "\n";

    	$classes_list = '';
    	$declared_classes = get_declared_classes();
    	asort($declared_classes);
    	foreach ($declared_classes as $class)
    	{
			$class = new ReflectionClass($class);
			if ($class->isUserDefined())
			{
			    $class_code = file(".lib/" . $class->name . ".php");

				$class_consts = '';
				foreach ($class->getConstants() as $key => $value)
					if (substr($key, 0, 1) != '_')
						$class_consts .= "- **" . $key . "** &#10140; "
								       . fv($value) . "\n";

				$reference = '';
				foreach ($class->getMethods() as $method)
				{
					$parameters = $method->getParameters();
					$num_params = ((count($parameters) > 1)
							      ? count($parameters) - 1
							      : 0);
					$length = $method->getEndLine() - $method->getStartLine()
					        - $num_params - ($method->isAbstract() ? 0 : 2);
					$method_code = array_slice($class_code,
					                           $method->getEndLine() - $length - 1,
					                           $length);
					$cyc = 0;
					foreach ($method_code as $code_line)
					    foreach (self::$_cyc_counters as $counter)
					        $cyc += substr_count($code_line, $counter);
					$reference .= "- **" . $method->getName() . "** ("
							    . ($method->isConstructor() ? "C" : '')
					            . ($method->isPrivate() ? "Pri" : '')
					            . ($method->isProtected() ? "Pro" : '')
					            . ($method->isPublic() ? "Pub" : '')
					            . ($method->isStatic() ? "S" : '')
					            . ($method->isAbstract() ? "A" : '')
							    . ", L: " . $length . " "
							    . ($length <= (floor(MAX_METHODS_COMPLEXITY / 10) * 10)
							      ? md::image(".inc/img/icon_16x16_greenok.png")
							      : ($length <= MAX_METHODS_COMPLEXITY
							        ? md::image(".inc/img/icon_16x16_yellowops.png")
							        : md::image(".inc/img/icon_16x16_redics.png")))
					            . " CyC: " . $cyc . ")\n";
				}

				$dependences = '';

				$class_todos = '';
				foreach ($class->getStaticPropertyValue('todos') as $key => $value)
					$class_todos .= "- **" . $key . "** &#10140; " . $value . "\n";

				$heading = "Class " . strtoupper($class->name)
					     . " (" . date('r', filemtime($class->getFileName())) . ")";

				$classes_list .= md::title(2, $heading)
								 . (!empty($class_consts)
								   ? md::title(3, "Class configuration constants:")
								   . $class_consts . "\n" // unprotected (no '_XXX') constants here
								   : '')
				                 . (!empty($reference)
				                   ? md::title(3, "Code reference:")
				                   . $reference . "\n"
				                   : '')
				                 . (!empty($dependences)
				                   ? md::title(3, "Dependences:")
				                   . $dependences . "\n"
				                   : '')
								 . (!empty($class_todos)
								   ? md::title(3, "TODOs")
								   . $class_todos . "\n"
								   : '')
				               . md::hr();
			}
    	}

    	$components = md::title(2, "Available components:");
    	foreach (self::get_components() as $component => $uts)
    		$components .= md::title(3, $component . " (" . date('r', $uts) . ")");
    	$components .= md::hr();

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
    		 . $components // adding more information?
    	     . str_repeat("\n", 4) . md::text(_STR_COPYRIGHT_SIGNATURE);
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
 */
function le($msg)
{
	main::launch_error($msg);
}

/**
 * show call's backtrace with help of error base handler
 */
function sb()
{
	main::show_backtrace();
}

?>
