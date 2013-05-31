**_render_breadcrumb($controller)** (Pri, Len: 19/23 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
  
        $structure = $this->_structure[_SET_HOME_COMPONENT];

        echo html::hyperlink('',
                             $structure['name'])
           . HTML_BREADCRUMB_SEPARATOR;

        if (!empty(main::$action))
        {
            $branch = $structure['sub'][$controller];
            echo html::hyperlink($controller,
                                 $branch['name']) . HTML_BREADCRUMB_SEPARATOR;

            $link = $controller . "/" . main::$action;

            if (!empty(main::$args))
                $this->_print_handler_parameter($branch,
                                                $link,
                                                $controller);
            else
                echo $branch['sub'][$link]['name'];
        }
        else
            echo $structure['sub'][$controller]['name'];
