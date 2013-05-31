**_set_route_static_traits($components)** (Pri, Len: 7 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
  
        self::$controller = array_shift($components);
        if (!empty($components))
        {
            self::$action = array_shift($components);
            if (!empty($components))
                self::$args = array_filter($components);
        }
