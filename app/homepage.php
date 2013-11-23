<?php

use schrimp\html as html;
use schrimp\navigator as navigator;

class homepage extends schrimp\controller
{
    static $todos = array();

    static $tests = array();

    const VISIBLE_IN_NAVIGATION = false;

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