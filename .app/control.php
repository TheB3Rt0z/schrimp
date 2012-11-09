<?php

class control extends controller
{
	private $_helper = null;

	private $_plugins_libraries = array();

	private $_application_modules = array();

	function initialize() // initialize app and lib lists..
	{
		$fallback_method = '_handler' . (!empty( $this->_action)
						                ? '_' . $this->_action
						                : '');
		$method = $fallback_method . (!empty($this->_args)
		                             ? '_' . $this->_args[0]
		                             : '');

		if (method_exists(__CLASS__, $method = $method)
			|| method_exists(__CLASS__, $method = $fallback_method))
		{
			$this->_helper = new control_helper(); // si potrebbe fare standard..
			call_user_func_array(array($this, $method), array_slice(main::$args, 1));
		}
		else
			main::relocate_to("error/404");
	}

	protected function _handler()
	{
		$this->_set_title($this->_translate('COMPONENT VISIBLE NAME'));
	}

	private function _handler_core()
	{
		$this->_set_title($this->_translate('COMPONENT VISIBLE NAME')
		                . BREADCRUMB_SEPARATOR
		                . $this->_translate(__FUNCTION__));
	}

	private function _handler_core_db()
	{
		$this->_set_title($this->_translate('COMPONENT VISIBLE NAME')
		                . BREADCRUMB_SEPARATOR
		                . $this->_translate(__FUNCTION__));
	}

	private function _handler_core_controller()
	{
		$this->_set_title($this->_translate('COMPONENT VISIBLE NAME')
		                . BREADCRUMB_SEPARATOR
		                . $this->_translate(__FUNCTION__));
	}

	private function _handler_core_escort()
	{
		$this->_set_title($this->_translate('COMPONENT VISIBLE NAME')
		                . BREADCRUMB_SEPARATOR
		                . $this->_translate(__FUNCTION__));
	}

	private function _handler_core_navigator()
	{
		$this->_set_title($this->_translate('COMPONENT VISIBLE NAME')
		                . BREADCRUMB_SEPARATOR
		                . $this->_translate(__FUNCTION__));
	}

	private function _handler_core_html()
	{
		$this->_set_title($this->_translate('COMPONENT VISIBLE NAME')
		                . BREADCRUMB_SEPARATOR
		                . $this->_translate(__FUNCTION__));
	}

	private function _handler_core_widget()
	{
		$this->_set_title($this->_translate('COMPONENT VISIBLE NAME')
		                . BREADCRUMB_SEPARATOR
		                . $this->_translate(__FUNCTION__));
	}

	private function _handler_core_language()
	{
		//if (!func_num_args())
			// normal language settings
		//elseif (language::is_supported(func_get_arg(0)))
			// operation for supported language
		//else
			main::relocate_to("error/404");

		$this->_set_title($this->_translate('COMPONENT VISIBLE NAME')
		                . BREADCRUMB_SEPARATOR
		                . $this->_translate(__FUNCTION__));
	}

	private function _handler_plugins() // directory lib
	{
		$this->_set_title($this->_translate('COMPONENT VISIBLE NAME')
		                . BREADCRUMB_SEPARATOR
		                . $this->_translate(__FUNCTION__));
	}

	private function _handler_modules()
	{
		$this->_set_title($this->_translate('COMPONENT VISIBLE NAME')
		                . BREADCRUMB_SEPARATOR
		                . $this->_translate(__FUNCTION__));
	}

	private function _handler_modules_homepage()
	{
		$this->_set_title($this->_translate('COMPONENT VISIBLE NAME')
		                . BREADCRUMB_SEPARATOR
		                . $this->_translate(__FUNCTION__));
	}

	private function _handler_modules_control()
	{
		$this->_set_title($this->_translate('COMPONENT VISIBLE NAME')
		                . BREADCRUMB_SEPARATOR
		                . $this->_translate(__FUNCTION__));
	}

	private function _handler_modules_documentation()
	{
		$this->_set_title($this->_translate('COMPONENT VISIBLE NAME')
		                . BREADCRUMB_SEPARATOR
		                . $this->_translate(__FUNCTION__));
	}

	private function _handler_modules_error()
	{
		$this->_set_title($this->_translate('COMPONENT VISIBLE NAME')
		                . BREADCRUMB_SEPARATOR
		                . $this->_translate(__FUNCTION__));
	}

	private function _handler_application() // directory app
	{
		$this->_set_title($this->_translate('COMPONENT VISIBLE NAME')
		                . BREADCRUMB_SEPARATOR
		                . $this->_translate(__FUNCTION__));
	}

	private function _handler_phpinfo()
	{
		static $options = array // from PHP documentation
		(
			'general' => 1, //	The configuration line, php.ini location, build date, Web Server, System and more.
			'credits' => 2, //	PHP Credits. See also phpcredits().
			'configuration' => 4, // Current Local and Master values for PHP directives. See also ini_get().
			'modules' => 8, // Loaded modules and their respective settings. See also get_loaded_extensions().
			'environment' => 16, // Environment Variable information that's also available in $_ENV.
			'general' => 32, // Shows all predefined variables from EGPCS (Environment, GET, POST, Cookie, Server).
			'license' => 64, // PHP License information. See also the » license FAQ.
		);

		$this->_set_title($this->_translate('COMPONENT VISIBLE NAME')
				        . BREADCRUMB_SEPARATOR
				        . $this->_translate(__FUNCTION__));
	}
}

?>