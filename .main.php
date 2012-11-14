<?php

//TODO: web-storage, session su PHP o memcache o DB? pspell&gettext
//      optional admin bar to measure run time performance (gApis)

require_once ".configuration.php";

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

    var $documentation = false;

    function __construct($uri, $documentation = '')
    {
        $this->_load_libraries();

        if (DEVELOPMENT_MODE)
        {
         	$this->documentation = $this->get_documentation();

        	$doc_file = "README.md";
        	if (@!file_put_contents($doc_file, $this->documentation)) // markdown format
        	{
        		$msg = t('error',
        				 'documentation file "%s" not writable',
        				 $doc_file);
        		$this->launch_error($msg);
        	}
        }

        $this->_initialize(str_replace(PATH . "/",
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

    static function get_version($precision = 2)
    {
        // si potrebbe legare a questa o la seguentefunzione un controllo per la doc..
        // se non esiste il file docs_v#.##.nfo lo si crea e si cancella gli altri
        return "v" . number_format(((mktime(date('H'), date('i'), date('s'),
        		                            date('n'), date('j'), date('Y'))
        	                       - mktime(17, 11, 33,
        	                       		    9, 21, 2012)) / 31557600), $precision);
    }

    static function get_documentation()
    {
    	$title = PROJECT . " " . main::get_version() . "   "
    		   . md::image(".inc/img/schrimp_favicon_mini.ico");

    	return md::title(1, $title)
    	     // adding real documentation with h2, h3, text and others..
    	     . str_repeat("\n", 5) . md::text(COPYRIGHT);
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