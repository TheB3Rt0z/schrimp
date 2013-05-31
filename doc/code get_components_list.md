**get_components_list()** (PubS, Len: 19/24 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 4 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
  
        $components = array();

        $substitutions = array
        (
            _SET_APPLICATION_PATH,
            _SET_APPLICATION_PUBLICPATH,
            ".php",
        );

        foreach (glob(_SET_APPLICATION_PATH . "*.php") as $filename) // scans modules directory
            if (!substr_count($filename, "_"))
                $components[str_replace($substitutions,
                                        '',
                                        $filename)] = filemtime($filename);

        foreach (glob(_SET_APPLICATION_PUBLICPATH . "*.php") as $filename) // scans application directory
            if (!substr_count($filename, "_"))
                $components[str_replace($substitutions,
                                        '',
                                        $filename)] = filemtime($filename);

        ksort($components);

        return $components;
