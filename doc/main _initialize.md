**_initialize($route)** (Pri, Len: 24/30 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 5 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
  
        $components = explode("/",
                              strtolower($route)); // lowering string avoids conflicts with class names

        $this->_path = _SET_APPLICATION_PATH; // using default modules

        if ($components[0])
        {
            if (!substr_count($components[0], "_"))
            {
                if (fe(_SET_APPLICATION_PUBLICPATH . $components[0] . ".php"))
                    $this->_path = _SET_APPLICATION_PUBLICPATH; // using external module
                elseif (!fe(_SET_APPLICATION_PATH . $components[0] . ".php"))
                    rt("error/404");
            }
            else
                rt("error/404");

            $this->_set_route_static_traits($components);
        }
        else
            $this->_set_home_component();

        require_once $this->_path . self::$controller . ".php";
        foreach (glob($this->_path . self::$controller . "_*.php") as $filename)
            require_once $filename;

        $this->_call = new self::$controller(self::$action,
                                             self::$args);

        $this->_set_htmls_from_controller();
