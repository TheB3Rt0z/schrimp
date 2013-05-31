**_initialize_options($data)** (Pri, Len: 7/9 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
  
        $options = array();

        foreach ($data as $key => $values)
            $options[$key] = array
            (
                'name' => $values['name'],
            );

        return $options;
