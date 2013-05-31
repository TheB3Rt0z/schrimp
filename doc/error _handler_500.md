**_handler_500()** (Pri, Len: 13/17 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
  
		$this->_set_title(ucfirst($this->_translate('COMPONENT VISIBLE NAME'))
                        . " 500: " . $this->_translate('some internal error'));

		$this->_set_header(html::title(1,
                                       "Ooops!!! " . $this->get_title() . "!"));

		$ending = !empty($this->_args[0])
		          ? $this->_translate('here') . ":"
		          : $this->_translate('now') . "!";

		$this->_set_section(html::title(2,
                                        $this->_translate('something not works')
				                      . " " . $ending));

		if (!empty($this->_args))
			$this->_set_article(html::title(3,
			                                urldecode($this->_args[0])));
