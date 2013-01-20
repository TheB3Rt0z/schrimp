<?php

abstract class controller
{
	public static $todos = array();

	const VISIBLE_IN_NAVIGATION = true;

	const RENDER_BREADCRUMB = true;

	protected $_action = null;
	protected $_args = array();

	private $_title = '';

	private $_header = '';
	private $_nav = '';
	private $_section = '';
	private $_article = '';
	private $_aside = '';
	private $_footer = '';

	private $_helper = null;

	function __construct($action,
			             $args)
	{
		$this->_action = $action;
		$this->_args = $args;
		$this->initialize();
		$helper = get_class($this) . '_helper';
		$this->_helper = new $helper; // loading helper dynamically
	}

	abstract function initialize();

	protected function _set_title($html)
	{
		$this->_title = $html;
	}

	protected function _set_header($html)
	{
		$this->_header = $html;
	}

	protected function _set_nav($html)
	{
		$this->_nav = $html;
	}

	protected function _set_section($html)
	{
		$this->_section = $html;
	}

	protected function _set_article($html)
	{
		$this->_article = $html;
	}

	protected function _set_aside($html)
	{
		$this->_aside = $html;
	}

	protected function _set_footer($html)
	{
		$this->_footer = $html;
	}

	protected function _translate($placeholder)
	{
		return tr(get_class($this),
		          $placeholder);
	}

	function get_title()
	{
		return $this->_title;
	}

    function get_header()
	{
		return $this->_header;
	}

	function get_nav()
	{
		return $this->_nav;
	}

	function get_section()
	{
		return $this->_section;
	}

	function get_article()
	{
		return $this->_article;
	}

	function get_aside()
	{
		return $this->_aside;
	}

	function get_footer()
	{
		return $this->_footer;
	}
}

?>