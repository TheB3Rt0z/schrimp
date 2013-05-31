**_get_action_select($structure, $controller, $link)** (Pri, Len: 10/13 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
  
        $branch = $structure['sub'][$controller];

        $code = HTML_BREADCRUMB_SEPARATOR;

        if (count($options = $this->_initialize_options($branch['sub'])) > 1)
            $code .= html_form::dropdown($options,
                                         $link,
                                         "document.location.href='"
                                       . ru() . "' + this.value;");
        else
            $code .= $branch['sub'][$link]['name'];

        return $code;
