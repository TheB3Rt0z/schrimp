**show_backtrace()** (PubS, Len: 5/6 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
  
        ob_start();
            debug_print_backtrace();
        main::set_buffer(str_replace("#", html::newline(), ob_get_clean()));

        if ($_SERVER['REQUEST_URI'] != (_SET_LOCAL_PATH . "/error"))
            rt("error");
