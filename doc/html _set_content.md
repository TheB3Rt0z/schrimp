**_set_content($content = null)** (Pri, Len: 4/5 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
  
        $this->_content = $content;

        $this->_html = str_replace("__CONTENT__",
                                   $this->_content,
                                   $this->_html);
