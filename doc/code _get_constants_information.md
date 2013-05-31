**_get_constants_information()** (PriS, Len: 7/9 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
  
        $constants = '';

        $user_constants = self::get_constants_list();
        foreach ($user_constants as $key => $value)
            if (substr($key, 0, 1) != '_')
                $constants .= "- **" . $key . "** &#10140; " . fv($value)
                            . MD_NEWLINE_SEQUENCE;

        return $constants . MD_NEWLINE_SEQUENCE;
