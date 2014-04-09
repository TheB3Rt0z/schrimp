<?php

use schrimp\html as html;
use schrimp\navigator as navigator;

class project extends schrimp\controller
{
    static $todos = array
    (
        'project composer utility' => "tool to let user compose complexe projects",
    );

    static $tests = array();

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