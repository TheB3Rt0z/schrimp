**_get_todos_information()** (PriS, Len: 5/7 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
  
        $todos = '';

        foreach (unserialize(_TODOS) as $key => $value)
            $todos .= "- **" . $key . "** &#10140; " . $value
                    . MD_NEWLINE_SEQUENCE;

        return $todos . MD_NEWLINE_SEQUENCE;
