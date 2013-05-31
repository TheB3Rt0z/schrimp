**initialize()** (Pub, Len: 11/12 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
  
		if (!$this->_action)
			$this->_handler();
		elseif (is_numeric($this->_action)
			&& method_exists(__CLASS__, '_handler_' . $this->_action))
		{
			call_user_func(array(__CLASS__, '_handler_' . $this->_action));
		}
		else
			rt("error/404");

		$this->_set_aside(html::image(_SET_INCLUDES_PATH . "img/schrimp.png",
		                              _STR_PROJECT_NAME));
