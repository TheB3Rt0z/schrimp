**initialize()** (Pub, Len: 15/18 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
  
		$this->_set_nav(html::box(navigator::render_list()));

	    $fallback_method = '_handler' . (!empty($this->_action)
						                ? '_' . $this->_action
						                : '');

		$method = $fallback_method . (!empty($this->_args)
		                             ? '_' . $this->_args[0]
		                             : '');

		if (method_exists(__CLASS__, $method = $method)
			|| method_exists(__CLASS__, $method = $fallback_method))
		{
			call_user_func_array(array($this, $method),
			                     array_slice(main::$args, 1));
		}
		else
			rt("error/404");
