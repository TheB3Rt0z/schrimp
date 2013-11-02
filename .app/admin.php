<?php namespace schrimp;

class admin extends controller
{
    static $todos = array();

    static $tests = array();

	function initialize()
	{
		$this->_set_title($this->_translate("COMPONENT VISIBLE NAME"));
        $this->_handler();
	}

	protected function _handler() // also test handler
	{
		$this->_set_nav(html::box(navigator::get_list()));
	}
}