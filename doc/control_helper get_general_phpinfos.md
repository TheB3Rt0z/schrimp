**get_general_phpinfos($output = null)** (Pub, Len: 5/7 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
  
        ksort($_SERVER);

        foreach ($_SERVER as $key => $value)
            $output .= $key . " &#10140; "
                     . $value . html::newline();

        return $output;
