<?php

class homepage extends controller
{
    public static $todos = array();

	function initialize()
	{
		$this->_set_title($this->_translate("COMPONENT VISIBLE NAME"));
        $this->_handler();
	}

	protected function _handler()
	{
		$this->_set_nav(html::box(navigator::get_list()));
	}
}

?>