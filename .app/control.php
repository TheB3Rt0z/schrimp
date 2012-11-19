<?php

class control extends controller
{
	private $_helper = null;

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
			$this->_helper = new control_helper(); // standardize?
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
		                . HTML_BREADCRUMB_SEPARATOR
		                . $this->_translate(__FUNCTION__));
	}

	private function _handler_core_db()
	{
		$this->_set_title($this->_translate('COMPONENT VISIBLE NAME')
		                . HTML_BREADCRUMB_SEPARATOR
		                . $this->_translate(__FUNCTION__));
	}

	private function _handler_core_controller()
	{
		$this->_set_title($this->_translate('COMPONENT VISIBLE NAME')
		                . HTML_BREADCRUMB_SEPARATOR
		                . $this->_translate(__FUNCTION__));
	}

	private function _handler_core_escort()
	{
		$this->_set_title($this->_translate('COMPONENT VISIBLE NAME')
		                . HTML_BREADCRUMB_SEPARATOR
		                . $this->_translate(__FUNCTION__));
	}

	private function _handler_core_navigator()
	{
		$this->_set_title($this->_translate('COMPONENT VISIBLE NAME')
		                . HTML_BREADCRUMB_SEPARATOR
		                . $this->_translate(__FUNCTION__));
	}

	private function _handler_core_html()
	{
		$this->_set_title($this->_translate('COMPONENT VISIBLE NAME')
		                . HTML_BREADCRUMB_SEPARATOR
		                . $this->_translate(__FUNCTION__));
	}

	private function _handler_core_widget()
	{
		$this->_set_title($this->_translate('COMPONENT VISIBLE NAME')
		                . HTML_BREADCRUMB_SEPARATOR
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
		                . HTML_BREADCRUMB_SEPARATOR
		                . $this->_translate(__FUNCTION__));
	}

	private function _handler_plugins() // from lib directory
	{
		static $options = "\$output = array();
		                   foreach (glob(\"lib/*.php\") as \$filename)
				           {
							   \$option = str_replace(array(\"lib/\", \".php\"),
				                                      '',
				                                      \$filename);
			                   \$output[\$option] = '_handler_plugins_' . \$option;
		                   }
				           return \$output;";
var_dump($this->_args);
		$this->_set_title($this->_translate('COMPONENT VISIBLE NAME')
		                . HTML_BREADCRUMB_SEPARATOR
 		                . $this->_translate(__FUNCTION__
 		                		          . (!empty($this->_args[0])
 		                		            ? '_' . $this->_args[0]
 		                		            : '')));
	}

	private function _handler_modules()
	{
		$this->_set_title($this->_translate('COMPONENT VISIBLE NAME')
		                . HTML_BREADCRUMB_SEPARATOR
		                . $this->_translate(__FUNCTION__));
	}

	private function _handler_modules_homepage()
	{
		$this->_set_title($this->_translate('COMPONENT VISIBLE NAME')
		                . HTML_BREADCRUMB_SEPARATOR
		                . $this->_translate(__FUNCTION__));
	}

	private function _handler_modules_control()
	{
		$this->_set_title($this->_translate('COMPONENT VISIBLE NAME')
		                . HTML_BREADCRUMB_SEPARATOR
		                . $this->_translate(__FUNCTION__));
	}

	private function _handler_modules_documentation()
	{
		$this->_set_title($this->_translate('COMPONENT VISIBLE NAME')
		                . HTML_BREADCRUMB_SEPARATOR
		                . $this->_translate(__FUNCTION__));
	}

	private function _handler_modules_error()
	{
		$this->_set_title($this->_translate('COMPONENT VISIBLE NAME')
		                . HTML_BREADCRUMB_SEPARATOR
		                . $this->_translate(__FUNCTION__));
	}

	private function _handler_application() // from app directory
	{
		static $options = "\$output = array();
		                   foreach (glob(\"app/*.php\") as \$filename)
				           {
							   \$option = str_replace(array(\"app/\", \".php\"),
				                                      '',
				                                      \$filename);
							   \$output[\$option] = false;
		                   }
				           return \$output;";

		$this->_set_title($this->_translate('COMPONENT VISIBLE NAME')
		                . HTML_BREADCRUMB_SEPARATOR
		                . language::translate((!empty($this->_args[0])
		                					  ? $this->_args[0]
		                					  : __CLASS__),
		                		  			  __FUNCTION__
 		                		            . (!empty($this->_args[0])
 		                		              ? '_' . $this->_args[0]
 		                		              : '')));
	}

	private function _handler_phpinfo()
	{
		static $options = array // from PHP documentation
		(
			'general' => '_handler_phpinfo_general', //	The configuration line, php.ini location, build date, Web Server, System and more.
			//'credits' => '_handler_phpinfo_credits', //	PHP Credits. See also phpcredits().
			'configuration' => '_handler_phpinfo_configuration', // Current Local and Master values for PHP directives. See also ini_get().
			//'modules' => '_handler_phpinfo_modules', // Loaded modules and their respective settings. See also get_loaded_extensions().
			'environment' => '_handler_phpinfo_environment', // Environment Variable information that's also available in $_ENV.
			'variables' => '_handler_phpinfo_variables', // Shows all predefined variables from EGPCS (Environment, GET, POST, Cookie, Server).
			//'license' => '_handler_phpinfo_license', // PHP License information. See also the » license FAQ.
		);

		$this->_set_title($this->_translate('COMPONENT VISIBLE NAME')
			            . HTML_BREADCRUMB_SEPARATOR
			            . $this->_translate(__FUNCTION__
 		                		          . (!empty($this->_args[0])
 		                		            ? '_' . $this->_args[0]
 		                		            : '')));
	}
}

?>