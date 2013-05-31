**_print_handler_name($branch, $link, $controller)** (Pri, Len: 6/8 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
  
        $handler = $link . "/" . main::$args[0];

        $controller_check =@ $branch['sub'][$link]['sub'][$handler]['controller'];

        echo tr((!empty($controller_check)
                ? $controller_check
                : $controller),
                $branch['sub'][$link]['handler']);
