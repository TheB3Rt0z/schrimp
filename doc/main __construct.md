**__construct($uri)** (CPub, Len: 11/15 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
  
        $this->_set_configuration("configuration"); // easy filename change if needed

        $this->_load_libraries();

        if (_SET_DEVELOPMENT_MODE) { // only for developers, no further error 500 required
            file_put_contents("doc/Home.md", // main application executable
                              md::code(file_get_contents('index.php')));

            file_put_contents(SET_DOCUMENTATION_MD . ".md", // updates 1st github wiki page..
                              code::get_documentation());
        }

        $this->_initialize(str_replace(_SET_LOCAL_PATH . "/",
                                       '',
                                       $uri));
