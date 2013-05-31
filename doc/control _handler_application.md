**_handler_application()** (Pri, Len: 26/30 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
  
		static $options = "\$substitutions = array(
		                       _SET_APPLICATION_PUBLICPATH,
		                       \".php\",
		                   );

		                   \$output = array();

		                   foreach (glob(_SET_APPLICATION_PUBLICPATH . \"*.php\")
		                            as \$filename)
				           {
							   if (!substr_count(\$filename, \"_\"))
							   {
							       \$option = str_replace(\$substitutions,
				                                          '',
				                                          \$filename);
							       \$output[\$option] = null;
							   }
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
