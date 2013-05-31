**_handler_plugins()** (Pri, Len: 20/24 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
  
		static $options = "\$substitutions = array(
		                       _SET_LIBRARIES_PUBLICPATH,
		                       \".php\",
		                   );

		                   \$output = array();

		                   foreach (glob(_SET_LIBRARIES_PUBLICPATH . \"*.php\")
		                            as \$filename)
				           {
							   \$option = str_replace(\$substitutions,
				                                      '',
				                                      \$filename);
			                   \$output[\$option] = '_handler_plugins_' . \$option;
		                   }

				           return \$output;"; // ATM translation should go in control.txt, if official

		$this->_set_title($this->_translate('COMPONENT VISIBLE NAME')
		                . HTML_BREADCRUMB_SEPARATOR
 		                . $this->_translate(__FUNCTION__
 		                		          . (!empty($this->_args[0])
 		                		            ? '_' . $this->_args[0]
 		                		            : '')));
