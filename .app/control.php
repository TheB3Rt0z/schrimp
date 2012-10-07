<?php

class control extends controller
{
	private $_helper = null;

	private $_plugins_libraries = array();

	private $_application_modules = array();

	function initialize()
	{
		// initialize app and lib lists..
		$method = '_handler' . (!empty( $this->_action)
						       ? '_' . $this->_action
						       : '')
		        . (!empty($this->_args)
		          ? '_' . $this->_args[0]
		          : '');

		if (method_exists(__CLASS__, $method))
		{
			$this->_helper = new control_helper();
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
		if (!func_num_args())
		{
			// normal language settings
		}
		elseif (language::is_supported(func_get_arg(0)))
		{
			// operation for supported language
		}
		else
			main::relocate_to("error/404");

		$this->_set_title($this->_translate('COMPONENT VISIBLE NAME')
		                . BREADCRUMB_SEPARATOR
		                . $this->_translate(__FUNCTION__));
	}

	private function _handler_plugins()
	{
		$this->_set_title($this->_translate('COMPONENT VISIBLE NAME')
		                . BREADCRUMB_SEPARATOR
		                . $this->_translate(__FUNCTION__));
		// directory lib
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

	private function _handler_application()
	{
		$this->_set_title($this->_translate('COMPONENT VISIBLE NAME')
		                . BREADCRUMB_SEPARATOR
		                . $this->_translate(__FUNCTION__));
		// directory app
	}
}

?>