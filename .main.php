<?php

require_once ".configuration.php";

class main
{
	private static $_todo = array
	(
		'documentation' => "PHP's highlight_string/file to rapresent code excerpts",
		'escort library' => "session su PHP poi DB se webstore & memcache fail?",
		'memcache support' => "verify in method, if at least one mem-server works",
	);

    private $_call = null;

    static $controller = '';
    static $action = false;
    static $args = array();

    var $title = '';

    var $header = '';
    var $nav = '';
    var $section = '';
    var $article = '';
    var $aside = '';
    var $footer = '';

    var $documentation = false; // this remain false on production servers..

    function __construct($uri, $documentation = '')
    {
        $this->_load_libraries();

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

    private function _load_libraries()
    {
        foreach (glob(".lib/*.php") as $filename)
            require_once $filename;
        // bisogna immaginarsi qualcosa per la risoluzione di eventuali conflitti!
        foreach (glob("lib/*.php") as $filename)
            require_once $filename;
    }

    private function _initialize($route) // set "AllowOverride All" directive for .htaccess file
    {
        $components = explode("/",
                              $route);

        if ($components[0])
        {
            if (!fe(".app/" . $components[0] . ".php")
                || substr_count($components[0] , "_"))
            {
                $this->relocate_to("error/404");
            }

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

        require_once ".app/" . self::$controller . ".php";
        foreach (glob(".app/" . self::$controller . "_*.php") as $filename)
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

    function var_dump($what)
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

    static function get_documentation()
    {
    	$title = md::image(".inc/img/schrimp_favicon_md.ico")
    	       . " " . STR_PROJECT_NAME . "'s Documentation "
    	       . main::get_version(1);

    	$consts_list = '';
    	$constants = get_defined_constants(true);
    	$user_consts = $constants['user'];
    	ksort($user_consts);
    	foreach ($user_consts as $key => $value)
    	{
    		if ($value === true)
    			$value = "true";
    		elseif ($value === false)
    			$value = "false";
    		elseif ($value === '')
    			$value = "null";
			elseif (!is_numeric($value))
    			$value = "\"" . $value . "\"";
			$consts_list .= "- **" . $key . "** &#10140; " . $value . "\n";
    	}

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
    		                    ? " = " . $parameter->getDefaultValue() // to be formatted like costants
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
    	foreach (get_declared_classes() as $class)
    	{
			$class = new ReflectionClass($class);
			if ($class->isUserDefined())
			{
				$classes_list .= md::title(2, "Class " . strtoupper($class->name))
				                 . md::title(3, "Code reference:")
				               . md::hr();
			}
    	}

    	return md::title(1, $title)
    	     . md::title(2, "General reference")
    	       . md::title(3, "Configuration constants")
    	         . $consts_list
    	       . md::hr()
    	       . md::title(3, "Function aliases")
    	         . $funcs_list // add more information
    	       . md::hr()
    	       . md::title(3, 'TODOs')
    	         . $todos_list
    		   . md::hr()
    		 . $classes_list
    	     . str_repeat("\n", 4) . md::text(STR_COPYRIGHT_SIGNATURE);
    }

    static function is_webstoraged()
    {
		// local and/or session storage are available? with js
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
        header("Location: " . main::resolve_uri($url));
    }

    static function launch_error($msg)
    {
        $msg = str_replace("/",
                           "\\",
                           $msg);

        $url = "error/500/" . urlencode($msg);

        if ($_SERVER['REQUEST_URI'] != (PATH . "/" . $url))
            main::relocate_to($url);
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

?>
