<?php

class main
{
    static $todos = array
    (
        'double error redirect' => "rewrite this thing to avoid the doppler effect",
        'get buffer effect' => "is file deletion really working? a better system?",
        'escort library' => "session by PHP and DB if webstore & memcache fail?",
        'memcache support' => "verify in method, if at least one mem-server works",
        'css selectors' => "uniform to html-class render-methods (default style)",
        'css autoload' => "automatically load ANY file in .inc/inc / css? nnouu..",
        'error launchers' => "should be moved to a library (navigator, toolbox)?",
        'no stealth mode' => "no uri interpretation + htaccess automatic creation",
        'set_htmls_from_controller' => "could we update here our sitemap.xml?",
        'better css for error notifications' => "..and interface triggers style!",
    );

    static $tests = array();

    private $_uri = false;
    private $_call = null;
    private $_path = '';

    var $controller = '';
    var $action = null;
    var $args = array();

    var $title = '';

    var $header = '';
    var $nav = '';
    var $section = '';
    var $article = '';
    var $aside = '';
    var $footer = '';

    function __construct($uri = false)
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

        if (!empty($uri)) { // using framework mode
            $this->_uri = $uri;
            $this->_initialize(str_replace(_SET_LOCAL_PATH . "/",
                                           '',
                                           $uri));
        }
    }

    private function _set_configuration($conf_name)
    {
        $user_file = "." . $conf_name;
        $base_file = $user_file . ".tmp";

        eval("\$base_conf = array
                            (
                                " . file_get_contents($base_file) . "
                            );");
        eval("\$user_conf = array
                            (
                                " . file_get_contents($user_file) . "
                            );");

        $configuration = $user_conf + $base_conf;

        foreach ($configuration as $key => $value)
            define(strtoupper($key), (is_array($value)
                                     ? serialize($value)
                                     : $value));

        if (_SET_DEVELOPMENT_MODE)
            error_reporting(E_ALL);

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
            require_once $filename; // now all internal classes/methods with alias are available

        foreach (glob(_SET_LIBRARIES_PUBLICPATH . "*.php") as $filename) // if file/class name was already used an error will be generated
            ld($filename); // toolbox helper alias
    }

    private function _set_route_static_traits($components)
    {
        $this->controller = array_shift($components);
        if (!empty($components))
        {
            $this->action = array_shift($components);
            if (!empty($components))
                $this->args = array_filter($components);
        }
    }

    private function _set_home_component()
    {
        $this->controller = _SET_HOME_COMPONENT;

        if (!_SET_DEVELOPMENT_MODE)
            $this->_path = _SET_APPLICATION_PUBLICPATH;
    }

    private function _set_htmls_from_controller()
    {
        $this->title = $this->_call->get_title();

        $this->header = $this->_call->get_header();
        $this->nav = $this->_call->get_nav();
        $this->section = $this->_call->get_section();
        $this->article = $this->_call->get_article();
        $this->aside = $this->_call->get_aside();
        $this->footer = $this->_call->get_footer();
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

        ld($this->_path . $this->controller . ".php");
        foreach (glob($this->_path . $this->controller . "_*.php") as $filename)
            ld($filename);

        $this->_call = new $this->controller($this->action,
                                             $this->args);

        $this->_set_htmls_from_controller();
    }

    function get_route()
    {
        return $this->_uri;
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
        return $this->get_path() . $this->controller;
    }

    static function var_dump($what)
    {
        $args = func_get_args();

        if (count($args) == 1)
        {
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

    static function get_version($precision = 2) // string for evens, numeric for odds
    {
        return (is_int($precision/2) ? "v": '')
             . number_format(((mktime(date('H'), date('i'), date('s'),
                                      date('n'), date('j'), date('Y'))
                             - mktime(17, 11, 33,
                                      9, 21, 2012)) / 31557600), $precision); // gragorian 4-years average
    }

    static function get_timestone()
    {
        return date('y.m'); // just for documentation
    }

    static function is_webstoraged() {} // local and/or session storage are available? only with js..

    static function is_apced()
    {
        return extension_loaded('apc'); // http://linuxaria.com/howto/everything-you-need-to-know-about-apc-alternate-php-cache?lang=it & http://uk.php.net/manual/en/apc.configuration.php
    }

    static function is_memcached()
    {
        return extension_loaded('memcache'); // ok, but check it please..
    }

    static function is_varnished() {}// just a placeholder..

    static function file_exists($path)
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

        return false; // just in case (somehow preferrable)
    }

    static function trigger_error_missing_file($file)
    {
        return trigger_error(tr('error',
                                'required file (%s) not exists',
                                $file,
                             E_USER_ERROR));
    }

    static function trigger_error_bad_syntax($infos)
    {
        return trigger_error(tr('error',
                                'bad syntax to correct: %s',
                                $infos),
                             E_USER_WARNING);
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

        return (!empty($buffer)
               ? $buffer
               : false);
    }

    static function show_backtrace()
    {
        ob_start();
            debug_print_backtrace();
        main::set_buffer(str_replace("#",
                                     html::newline(),
                                     ob_get_clean()));

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
    return main::file_exists($path);
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
 * triggers an error if a needed file is missing
 * @param string $file
 * @return boolean indicating notification success
 */
function mf($file)
{
    return main::trigger_error_missing_file($file);
}

/**
 * triggers an error if bad syntax events occur
 * @param string $msg
 * @return boolean indicating notification success
 */
function bs($infos)
{
    return main::trigger_error_bad_syntax($infos);
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
