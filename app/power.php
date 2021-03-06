<?php

use schrimp\html as html;
use schrimp\navigator as navigator;

class power extends schrimp\controller
{
    static $todos = array
    (
        'anamnesys module' => "registration, evolution, calculations, analysis..",
        'store personal information' => "uses helper+db libraries as bridge tools",
    );

    static $tests = array();

    function initialize()
    {
        $this->_set_title($this->_translate("COMPONENT VISIBLE NAME"));
        $this->_handler();
    }

    protected function _handler()
    {
        $powerring = new powerring;
        $this->_set_nav(html::box(navigator::get_list()));
    }
}