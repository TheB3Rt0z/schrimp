**_get_args_select($structure, $controller, $link)** (Pri, Len: 20/26 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 3 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
  
        $branch = $structure['sub'][$controller]['sub'][$link];

        $handler = $link .= '/' . main::$args[0];

        $code = HTML_BREADCRUMB_SEPARATOR;

        if (count($options = $this->_initialize_options($branch['sub'])) > 1)
            $code .= html_form::dropdown($options,
                                         $handler,
                                         "document.location.href='"
                                       . ru() . "' + this.value;");
        else
            $code .= $branch['sub'][$handler]['name'];

        if (count(main::$args) > 1)
        {
            $code .= HTML_BREADCRUMB_SEPARATOR . main::$args[1];

            if (!empty(main::$args[2]))
                $code .= " ("
                       . urldecode(implode(", ",
                                           array_slice(main::$args, 2)))
                       . ")";
        }

        return $code;
