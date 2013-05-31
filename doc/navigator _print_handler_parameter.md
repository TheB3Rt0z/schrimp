**_print_handler_parameter($branch, $link, $controller)** (Pri, Len: 12/14 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
  
        echo html::hyperlink($link,
                             $branch['sub'][$link]['name'])
           . HTML_BREADCRUMB_SEPARATOR;

        $branch['sub'][$link]['handler'] .= '_' . main::$args[0];

        if (count(main::$args) > 1)
            $this->_print_additional_parameters($branch,
                                                $link,
                                                $controller);
        else
            $this->_print_handler_name($branch,
                                       $link,
                                       $controller);
