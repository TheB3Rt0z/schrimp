**get_head_links()** (Pub, Len: 15/21 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 4 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
  
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
