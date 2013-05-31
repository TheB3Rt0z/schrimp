**__construct($tag, $content = null, $attributes = null)** (CPub, Len: 9/11 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
  
        $this->_tag = $tag;

        if ($this->_validate_tag())
        {
            $this->_md = "__CONTENT____FORMATTING__"; // to be checked
            $this->_set_content($content);
            $this->_set_formatting($attributes);
        }

        escort::register_object($this,
                                $this->_tag);
