**get_phpinfos($arg)** (Pub, Len: 11/14 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 3 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
  
        switch ($arg)
        {
            case 'general' :
                return $this->get_general_phpinfos();

            case 'configuration' :
                return $this->get_configuration_phpinfos();

            case 'environment' :
                return $this->get_environment_phpinfos();

            default :
                return null;
        }
