**_get_components_information()** (PriS, Len: 22/27 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 4 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
  
        $components = md::title(1, "Available components:");

        foreach (self::get_components_list() as $component => $uts)
        {
            if (fe(_SET_APPLICATION_PATH . $component . ".php"))
                require_once _SET_APPLICATION_PATH . $component . ".php";
            else
                require_once _SET_APPLICATION_PUBLICPATH . $component . ".php";

            $components .= self::_get_component_information($component);

            $helper = $component . "_helper";
            if (fe(_SET_APPLICATION_PATH . $helper . ".php"))
            {
                require_once _SET_APPLICATION_PATH . $helper . ".php";
                $components .= self::_get_component_information($helper);
            }
            elseif (fe(_SET_APPLICATION_PUBLICPATH . $helper . ".php"))
            {
                require_once _SET_APPLICATION_PUBLICPATH . $helper . ".php";
                $components .= self::_get_component_information($helper);
            }

            $components .= md::hr();
        }

        return $components . MD_NEWLINE_SEQUENCE;
