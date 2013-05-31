**initialize()** (Pub, Len: 28/32 ![(!)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_yellow_ops.png "Method's length could be reduced..") CyC: 4 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
  
	    $this->_set_nav(html::box(navigator::render_list()));

		switch ($this->_action)
		{
			case null :
			{
				$this->_handler();
				break;
			}

			case 'list' :
			{
				if (!empty($this->_args))
					switch ($this->_args[0])
					{
						case 'files' :
						{
							$this->_handler_list_files();
							break;
						}

						default :
							rt("error/404");
					}
				else
					$this->_handler_list();
				break;
			}

			default :
				rt("error/404");
		}
