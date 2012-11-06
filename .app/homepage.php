<?php

class homepage extends controller
{
	function initialize()
	{
		$this->_set_title($this->_translate("COMPONENT VISIBLE NAME"));
        $this->_handler();
	}

	protected function _handler()
	{
		$this->_set_nav(navigator::render_list());
	}
}

?>