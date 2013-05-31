**_handler()** (Pro, Len: 7/10 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
  
		$this->_set_title(ucfirst($this->_translate('unknown error'))
		                . ": " . _STR_PROJECT_NAME . " KO");

		$this->_set_header(html::title(1,
                                       "Ooops!!! " . $this->get_title() . "!"));

		$this->_set_section(html::title(1,
                                        $this->_translate('a ugly problem')));

		$this->_set_article(html::text(main::get_buffer(false))); // don't delete
