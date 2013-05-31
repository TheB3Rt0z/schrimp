**_add_handlers($controller, $object, $sub)** (Pri, Len: 22/26 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
  
        $link = $controller;

        $item = explode("_",
                        str_replace("_handler_",
                                    '',
                                    $object->name));
        foreach ($item as $name)
        {
            $link .= "/" . $name;

            if (!isset($sub['sub'][$link]))
                $sub['sub'][$link] = array
                (
                    'name' => tr($controller,
                                 $object->name),
                    'handler' => $object->name
                );

            $sub =& $sub['sub'][$link];
        }

        return array
        (
            'link' => $link,
            'sub' => &$sub,
        );
