**_get_class_constants(ReflectionClass $class)** (PriS, Len: 6/8 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
  
        $class_constants = '';

        foreach ($class->getConstants() as $key => $value)
            if (substr($key, 0, 1) != '_')
                $class_constants .= "- **" . $key . "** &#10140; "
                                  . fv($value) . MD_NEWLINE_SEQUENCE;

        return $class_constants;
