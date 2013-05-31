**_handler_401()** (Pri, Len: 6/8 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
  
		$this->_set_title(ucfirst($this->_translate('COMPONENT VISIBLE NAME'))
                        . " 401: " . $this->_translate('unauthorized'));

		$this->_set_header(html::title(1,
                                       "Ooops!!! " . $this->get_title() . "!"));

		$this->_set_section(html::title(2,
                                        $this->_translate('please log') . "!"));
