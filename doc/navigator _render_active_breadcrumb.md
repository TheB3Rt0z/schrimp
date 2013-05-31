**_render_active_breadcrumb($controller)** (Pri, Len: 25/30 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 3 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
  
        $structure = $this->_structure[_SET_HOME_COMPONENT];

        $code = html::spanner(HTML_ICON_NAVIGATION,
                             'marker')
              . html::hyperlink('',
                                $structure['name'])
              . HTML_BREADCRUMB_SEPARATOR;

        if (count($options = $this->_initialize_options($structure['sub'])) > 1)
            $code .= html_form::dropdown($options,
                                         $controller,
                                         "document.location.href='"
                                       . ru() . "' + this.value;");
        else
            $code .= $structure['sub'][$controller]['name'];

        if (!empty(main::$action))
        {
            $code .= $this->_get_action_select($structure,
                                               $controller,
                                               $link = $controller
                                                   . "/" . main::$action);

            if (!empty(main::$args))
                $code .= $this->_get_args_select($structure,
                                                 $controller,
                                                 $link);
        }

        echo html::divisor($code);
