**__construct()** (CPub, Len: 19/22 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
  
        if (!empty($this->_structure))
            return false; // for singleton capability
        else
            $this->_initialize_structure();

        foreach (array_filter(glob(_SET_APPLICATION_PATH . "*.php"),
                              function($value)
                              {
                                  return !substr_count($value,
                                                       "_")
                                      && !substr_count($value,
                                                       _SET_HOME_COMPONENT);
                              }) as $filename)
        {
            require_once $filename;

            $branch = str_replace(array(_SET_APPLICATION_PATH, ".php"),
                                  '',
                                  $filename);

            $this->_add_branch($branch); // addition performed only if visible
        }
