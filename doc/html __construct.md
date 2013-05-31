**__construct($tag, $attributes = null, $content = null)** (CPub, Len: 20/24 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 4 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
  
        $this->_tag = $tag;

        if ($this->_validate_tag())
        {
            $this->_html .= "<" . $this->_tag . "__ATTRIBUTES__";
            if ($this->_is_single())
                $this->_html .= " /";
            else
            {
                $this->_html .= ">";
                if ($this->_is_container())
                    $this->_html .= "__CONTENT__";
                $this->_html .= "</" . $this->_tag;
            }
            $this->_html .= ">";

            $this->_set_attributes($attributes);

            if ($this->_is_container($this->_tag))
                $this->_set_content($content);
        }

        escort::register_object($this,
                                $this->_tag);
