**_add_handler_static_options($static_variables, $sub, $controller, $link, $object)** (Pri, Len: 20/24 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 4 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
  
        $options = $static_variables['options'];

        if (!is_array($options))
            $options = eval($options); // dynamic from static code!

        $option_component = $controller;
        $option_value = 'COMPONENT VISIBLE NAME';
        foreach ($options as $key => $value)
        {
            if (empty($value))
                $option_component = $key;
            else
                $option_value = $value;

            $sub['sub'][$link . "/" . $key] = array
            (
                'name' => tr($option_component,
                             $option_value),
                'handler' => $object->name . "_" . $key,
            );

            if (empty($value))
                $sub['sub'][$link . "/" . $key]['controller'] = $key;
        }
