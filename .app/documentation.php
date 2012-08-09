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

			default :
			{
				main::relocate("/error404");
			}
		}
	}

	private function _handler()
	{
		$this->_set_title("Documentation");
	}
}

?>