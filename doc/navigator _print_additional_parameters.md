**_print_additional_parameters($branch, $link, $controller)** (Pri, Len: 10/12 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
  
        $name = tr($controller,
                   $branch['sub'][$link]['handler']);

        echo html::hyperlink($link . "/" . main::$args[0],
                             $name)
           . HTML_BREADCRUMB_SEPARATOR . main::$args[1];

        if (!empty(main::$args[2]))
            echo " ("
               . urldecode(implode(", ",
                                   array_slice(main::$args, 2)))
               . ")";
