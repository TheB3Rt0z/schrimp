<?php

class html_doc extends html
{
    static $todos = array
    (
        'backend/frontend controller' => "it should load only right style.css..",
        'meta keywords' => "automatic population based on content/siloing",
        'keywords native proofing' => "3 to 9 in deepest level, online g-planner",
    );

    static $tests = array();

    static function get_head_metatags()
    {
        parent::add_metatags(array
        (
            array
            (
                'charset' => "UTF-8",
            ),
            array
            (
                'name' => "author",
                'content' => _STR_PROJECT_NAME . " " . main::get_version(),
            ),
            array
            (
                'name' => "copyright",
                'content' => _STR_COPYRIGHT_SIGNATURE,
            ),
            array
            (
                'name' => "robots",
                'content' => "noindex, nofollow",
            ),
            array
            (
                'name' => "viewport",
                'content' => "user-scalable=no, width=device-width",
            ),
        ));
    }

    static function get_head_favicon($controller)
    {
        $favicon_path = _SET_INCLUDES_PATH . "img/"
                      . $controller . "_favicon.ico";

        $favicon_publicpath = _SET_INCLUDES_PUBLICPATH . "img/"
                            . $controller . "_favicon.ico";

        if (fe($favicon_publicpath)) // precheck on file existance to permit fallback
            parent::add_favicon($favicon_publicpath);
        elseif (fe($favicon_path))
            parent::add_favicon($favicon_path);
        else
            parent::add_favicon(_SET_INCLUDES_PATH . "img/schrimp_favicon.ico"); // parent::add_stylesheet("http://fonts.googleapis.com/css?family=Amaranth:700");
    }

    static function get_head_links($path,
                                   $fullpath) // SVG inline editing (php driven) if css + js != enough
    {
        parent::add_stylesheet(_SET_INCLUDES_PATH . "css/style.css");
        if (_SET_ADVANCED_INTERFACE)
            parent::add_stylesheet(_SET_INCLUDES_PATH . "css/advin.css");

        parent::add_stylesheet(_SET_INCLUDES_PUBLICPATH . "css/style.css"); // base style sheet for frontend
        if (SET_RESPONSIVE_DESIGN)
            parent::add_stylesheet(_SET_INCLUDES_PUBLICPATH . "css/responsive.css"); // adds responsive media-queries based designs

        parent::add_stylesheet($fullpath . ".css"); // this adds extra controller css

        if (_SET_DESIGN_MODE)
            parent::add_stylesheet(_SET_INCLUDES_PATH . "css/debug.css"); // overrides all css sheets, only if debug mode is active..

        parent::add_js_file(_SET_INCLUDES_PATH . "js/jquery.js"); // parent::add_js_file("//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js");
        parent::add_js_file(_SET_INCLUDES_PATH . "js/jquery_ui.js"); // parent::add_js_file("//ajax.googleapis.com/ajax/libs/jqueryui/1.8.23/jquery-ui.min.js");
        parent::add_js_file(_SET_INCLUDES_PATH . "js/jquery_gestures.js");
        parent::add_js_file($path . _SET_INCLUDES_PATH . "js/jquery_jcarousel.js");

        if (_SET_ADVANCED_INTERFACE)
            parent::add_js_file(_SET_INCLUDES_PATH . "js/advanced_interface.js");
    }
}