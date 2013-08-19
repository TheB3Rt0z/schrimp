<?php

class main
{
    public static $todos = array
    (
        'documentation' => "PHP highlight_string/file to rapresent code excerpts",
        'escort library' => "session by PHP and DB if webstore & memcache fail?",
        'memcache support' => "verify in method, if at least one mem-server works",
        'css selectors' => "uniform to html-class render-methods (default style)",
        'css autoload' => "automatically load ANY file in .inc/inc / css? nnouu..",
    );

    public static $tests = array();

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

        if (_SET_DEVELOPMENT_MODE
            && ($uri == _SET_LOCAL_PATH . '/')
            && toolbox::fulltest())
        {
            foreach (glob(_SET_WIKI_PATH . "*.md") as $doc_file) // reset doc files
                if (fe($doc_file))
                    unlink($doc_file);

            file_put_contents(_SET_WIKI_PATH . "Home.md", // main application executable
                              md::code(pr('index.php')));

            file_put_contents(SET_DOCUMENTATION_MD . ".md",
                              code::get_documentation());
        }

        if (!empty($uri)) // using framework mode
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
        define('MAX_PARAMETERS_COMPLEXITY', SET_COMPLEXITY_INDEX / 2); // if more than 6 ATM..

        define('_MAX_CLASS_COMPLEXITY', pow(MAX_BLOCK_COMPLEXITY, 2)); // ATM not used (private optional)
    }

    private function _load_libraries()
    {
        foreach (glob(_SET_LIBRARIES_PATH . "*.php") as $filename) // core libraries first
            require_once $filename;

        foreach (glob(_SET_LIBRARIES_PUBLICPATH . "*.php") as $filename) // if file/class name was already used an error will be generated
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
                              strtolower($route)); // lowering string avoids conflicts with class names

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
        return $this->get_path() . self::$controller;
    }

    function get_head_links() // SVG inline editing (php driven) if css + js != enough
    {
        html::add_favicon(_SET_INCLUDES_PATH . "img/schrimp_favicon.ico"); // html::add_stylesheet("http://fonts.googleapis.com/css?family=Amaranth:700");

        html::add_stylesheet(_SET_INCLUDES_PATH . "css/style.css");
        if (_SET_ADVANCED_INTERFACE)
            html::add_stylesheet(_SET_INCLUDES_PATH . "css/advin.css");

        if (fe(_SET_INCLUDES_PUBLICPATH . "css/style.css"))
            html::add_stylesheet(_SET_INCLUDES_PUBLICPATH . "css/style.css");

        html::add_stylesheet($this->get_fullpath() . ".css"); // this adds extra controller css

        if (_SET_DESIGN_MODE)
            html::add_stylesheet(_SET_INCLUDES_PATH . "css/debug.css");

        html::add_js_file(_SET_INCLUDES_PATH . "js/jquery.js"); // html::add_js_file("//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js");
        html::add_js_file(_SET_INCLUDES_PATH . "js/jquery_ui.js"); // html::add_js_file("//ajax.googleapis.com/ajax/libs/jqueryui/1.8.23/jquery-ui.min.js");
        html::add_js_file(_SET_INCLUDES_PATH . "js/jquery_gestures.js");
        html::add_js_file(_SET_INCLUDES_PATH . "js/jquery_jcarousel.js");

        if (_SET_ADVANCED_INTERFACE)
            html::add_js_file(_SET_INCLUDES_PATH . "js/advanced_interface.js");
    }

    static function var_dump($what)
    {
        $args = func_get_args();

        if (count($args) == 1) {
            $args = $args[0];
            if (is_array($args)
                && count(debug_backtrace()) != 1)
            {
                foreach ($args as $arg)
                    echo html::preform($arg);
            }
            else
                echo html::preform($args);
        }
        else
            foreach ($args as $arg)
                echo html::preform($arg);
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

    static function is_apced()
    {
        return extension_loaded('apc'); // http://linuxaria.com/howto/everything-you-need-to-know-about-apc-alternate-php-cache?lang=it & http://uk.php.net/manual/en/apc.configuration.php
    }

    static function is_memcached()
    {
        return extension_loaded('memcache');
    }

    static function exists_file($path)
    {
        return file_exists(realpath($path)); // works only if read permissions on subdirs are available!
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

    static function launch_error_file_not_found($file)
    {
        return le(tr('error',
                     'required file (%s) not exists',
                     $file));
    }

    static function set_buffer($buffer)
    {
        file_put_contents(".buffer", serialize($buffer));
    }

    static function get_buffer($delete = true)
    {
        $buffer = unserialize(pr(".buffer"));

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
 * @param multi $what
 * @return void
 */
function vd($what)
{
    main::var_dump(func_get_args());
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
