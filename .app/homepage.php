<?php

class homepage extends controller
{
	function initialize()
	{
		$this->_set_title(language::translate(__CLASS__,
                                              "home page title"));
	}
}

?>