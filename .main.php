<?php

//TODO: web-storage, session su PHP o memcache o DB? pspell&gettext
//      optional admin bar to measure run time performance (gApis)

require_once('.configuration.php');

class main
{
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

    function __construct($uri)
    {
        $this->_load_libraries();
        $this->_initialize(str_replace(PATH . "/",
                                       '',
                                       $uri));
    }

    private function _load_libraries()
    {
        foreach (glob(".lib/*.php") as $filename)
            require_once($filename);

        // creare micro-alias delle funzioni + utili (direttamente nela libreria?)

        // bisogna immaginarsi qualcosa per la risoluzione di eventuali conflitti
        foreach (glob("lib/*.php") as $filename)
            require_once($filename);
    }

    private function _initialize($route)
    {
        $components = explode("/",
                              $route);

        if ($components[0])
        {
            if (!$this->exists_file(".app/" . $components[0] . ".php")
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
            self::$controller = HOME_COMPONENT;

        require_once(".app/" . self::$controller . ".php");
        foreach (glob(".app/" . self::$controller . "_*.php") as $filename)
            require_once($filename);

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

    static function get_version()
    {
        // si potrebbe legare a questa o la seguentefunzione un controllo per la doc..
        // se non esiste il file docs_v#.##.nfo lo si crea e si cancella gli altri
        return number_format(((mktime(date('H'), date('i'), date('s'), date('n'), date('j'), date('Y')) - mktime(17, 11, 33, 9, 21, 2012)) / 31557600), 2);
    }

    static function get_release()
    {// forse é meglio eseguire prima un which(command) per vedere quel che cé e dove sta..
        return (($release = shell_exec("svnversion"))
               ? $release
               : (($release = shell_exec("/usr/local/git/bin/git describe --tags --always"))//. ' > /dev/null; echo $?'))
                 ? strtoupper($release)
                 : false));
    }

    static function get_build()
    {
        $release = main::get_release();
        return " v" . main::get_version()
             . ($release ? "r" . $release : '');
    }

    static function is_memcached()
    {
        //TODO: verificare che effettivamente il servizio funzioni con almeno un server..
        return extension_loaded('memcache');
    }

    static function exists_file($path)
    {
        return file_exists(realpath($path));
    }

    static function resolve_uri($uri = '')
    {
        return PROTOCOL . "://" . $_SERVER['HTTP_HOST'] . PATH . "/" . $uri;
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

?>