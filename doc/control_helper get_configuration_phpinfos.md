**get_configuration_phpinfos($output = null)** (Pub, Len: 11/12 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
  
        foreach (ini_get_all() as $key => $values)
            $output .= strtoupper($key) . " &#10140; "
                     . fv(str_replace(",",
                                      ", ",
                                      $values['local_value'])) . " / "
                     . fv(str_replace(",",
                                      ", ",
                                      $values['global_value']))
                     . " (" . $values['access'] . ")"
                     . html::newline();

        return $output;
