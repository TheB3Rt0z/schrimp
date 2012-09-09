<?php

class documentation extends controller
{
	function initialize()
	{
		switch ($this->_action)
		{
			case false :
			{
				$this->_handler();

				break;
			}

			case 'list' :
			{
				if (!empty($this->_args))
				{
					switch ($this->_args[0])
					{
						case 'files' :
						{
							$this->_handler_list_files();

							break;
						}

						default :
						{
							main::relocate_to("/error/404");
						}
					}
				}
				else
				{
					$this->_handler_list();
				}

				break;
			}

			default :
			{
				main::relocate_to("/error/404");
			}
		}
	}

	protected function _handler()
	{
		$this->_set_title($this->_translate('COMPONENT VISIBLE NAME'));
	}

	private function _handler_list()
	{
		$this->_set_title($this->_translate('COMPONENT VISIBLE NAME')
		                . BREADCRUMB_SEPARATOR
		                . $this->_translate(__FUNCTION__));
	}

	private function _handler_list_files()
	{
		$this->_set_title($this->_translate('COMPONENT VISIBLE NAME')
		                . BREADCRUMB_SEPARATOR
		                . $this->_translate(__FUNCTION__));
	}
}

?>