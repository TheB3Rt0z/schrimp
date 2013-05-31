**_load_libraries()** (Pri, Len: 4/5 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
  
        foreach (glob(_SET_LIBRARIES_PATH . "*.php") as $filename) // core libraries first
            require_once $filename;

        foreach (glob(_SET_LIBRARIES_PUBLICPATH . "*.php") as $filename) // if file/class name was already used an error will be generated
            require_once $filename;
