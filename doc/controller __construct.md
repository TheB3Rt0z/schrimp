**__construct($action, $args)** (CPub, Len: 7/10 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
  
		$this->_action = $action;
		$this->_args = $args;

		$helper = get_class($this) . '_helper';
		$this->helper = new $helper; // loading helper dynamically

		escort::register_object($this,
		                        $this->_action . '_' . implode($this->_args, '_'));

		$this->initialize();
