<?php

//TODOs: implementazione metodo toString per classi e/o metodi, con calcoli
//       scrivere funzioni per analisi del listato e calcolo indici (documentation)
//       index fondamentale 12 warning, 24 per error e 36 per lunghezza massima
//       di un metodo/funzione e 84 per larghezza massima di una singola linea
//       filtrando [...]:: != self calcolare le dipendenze implicite tra classi

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