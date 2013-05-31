**get_environment_phpinfos($output = null)** (Pub, Len: 9/12 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
  
        ksort($_ENV);

        foreach ($_ENV as $key => $value)
            $output .= $key . " &#10140; "
                    . $value . html::newline();

        if (empty($output))
            $output .= html::hyperlink('http://www.php.net/manual-lookup.php?'
                                     . 'pattern=ini.variables-order',
                                       "(?)");

        return $output;
