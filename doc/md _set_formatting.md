**_set_formatting($attributes)** (Pri, Len: 5/7 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
  
        $this->_attributes = $attributes;

        $this->_formatting = eval($this->_tags[$this->_tag]);

        $this->_md = str_replace("__FORMATTING__",
                                 $this->_formatting,
                                 $this->_md);
