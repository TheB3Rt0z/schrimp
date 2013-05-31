**get_libraries_list($exclude = null)** (PubS, Len: 21/27 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 5 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
  
        $libraries = array('main' => filemtime(".main.php")); // hardcoded? mmm..

        $substitutions = array
        (
            _SET_LIBRARIES_PATH,
            _SET_LIBRARIES_PUBLICPATH,
            ".php",
        );

        foreach (glob(_SET_LIBRARIES_PATH . "*.php") as $filename) // scans core directory
            if (!substr_count($filename, "_"))
                $libraries[str_replace($substitutions,
                                       '',
                                       $filename)] = filemtime($filename);

        foreach (glob(_SET_LIBRARIES_PUBLICPATH . "*.php") as $filename) // scans plugins directory
            if (!substr_count($filename, "_"))
                $libraries[str_replace($substitutions,
                                       '',
                                       $filename)] = filemtime($filename);

        ksort($libraries);

        if (!empty($libraries[$exclude]))
            unset($libraries[$exclude]);

        return $libraries;
