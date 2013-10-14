<?php

class power extends controller
{
    static $todos = array
    (
        'anamnesys module' => "registration, evolution, calculations, analysis..",
        'store personal information' => "uses helper+db libraries as bridge tools",
    );

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