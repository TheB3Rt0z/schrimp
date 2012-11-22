<?php

class admin extends controller
{
	function initialize()
	{
		$this->_set_title($this->_translate("COMPONENT VISIBLE NAME"));
        $this->_handler();
	}

	protected function _handler()
	{
		$this->_set_nav(html::box(navigator::render_list()));
	}
}

?>