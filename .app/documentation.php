<?php

class documentation extends controller
{
	private static $_todos = array
	(
	    'method toString' => "implementare per analisi del codice e calcolini",
		'[...]:: != self' => "filtro per calcolare le dipendenze implicite..",
	);

	function initialize()
	{
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
	}

	protected function _handler()
	{
		$this->_set_title($this->_translate('COMPONENT VISIBLE NAME'));
	}

	private function _handler_list()
	{
		$this->_set_title($this->_translate('COMPONENT VISIBLE NAME')
		                . HTML_BREADCRUMB_SEPARATOR
		                . $this->_translate(__FUNCTION__));
	}

	private function _handler_list_files()
	{
		$this->_set_title($this->_translate('COMPONENT VISIBLE NAME')
		                . HTML_BREADCRUMB_SEPARATOR
		                . $this->_translate(__FUNCTION__));
	}
}

?>