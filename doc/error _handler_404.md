**_handler_404()** (Pri, Len: 7/10 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
  
		$this->_set_title(ucfirst($this->_translate('COMPONENT VISIBLE NAME'))
                        . " 404: " . $this->_translate('resource not found'));

		$this->_set_header(html::title(1,
                                       "Ooops!!! " . $this->get_title() . "!"));

		$this->_set_section(html::title(2,
                                        $this->_translate('no content') . "!"));

        $this->_set_article(navigator::render_sitemap());
