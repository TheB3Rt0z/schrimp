**_handler_phpinfo()** (Pri, Len: 20/23 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 5 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
  
		static $options = array // description comes from PHP documentation
		(
			'general' => '_handler_phpinfo_general', // The configuration line, php.ini location, build date, Web Server, System and more.
			//'credits' => '_handler_phpinfo_credits', // PHP Credits. See also phpcredits().
			'configuration' => '_handler_phpinfo_configuration', // Current Local and Master values for PHP directives. See also ini_get().
			//'modules' => '_handler_phpinfo_modules', // Loaded modules and their respective settings. See also get_loaded_extensions().
			'environment' => '_handler_phpinfo_environment', // Environment Variable information that's also available in $_ENV.
			//'variables' => '_handler_phpinfo_variables', // Shows all predefined variables from EGPCS (Environment, GET, POST, Cookie, Server).
			//'license' => '_handler_phpinfo_license', // PHP License information. See also the » license FAQ.
		);

		$this->_set_title($this->_translate('COMPONENT VISIBLE NAME')
			            . HTML_BREADCRUMB_SEPARATOR
			            . $this->_translate(__FUNCTION__
 		                		          . (!empty($this->_args[0])
 		                		            ? '_' . $this->_args[0]
 		                		            : '')));

		if (!empty($this->_args[0]))
		    $output = $this->helper->get_phpinfos($this->_args[0]);

        if (!empty($output))
            $this->_set_article(html::highbox($output));
