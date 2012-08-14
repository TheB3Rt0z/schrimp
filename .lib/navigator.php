<?php

class navigator
{
	private $_structure = array(HOME_COMPONENT => array());

	function __construct()
	{
		foreach (array_filter(glob(".app/*.php"),
		                      function($value)
		                      {
		                          return !substr_count($value, HOME_COMPONENT);
		                      }) as $filename)
		{
			require_once($filename);

    		$branch = str_replace(array(".app/", ".php"), '', $filename);

    		$rc = new ReflectionClass($branch);

    		if ($rc->getConstant('VISIBLE_IN_NAVIGATION'))
    		{
    			$this->_structure[HOME_COMPONENT][$branch] = array();

    			foreach ($rc->getMethods(ReflectionMethod::IS_PRIVATE | !ReflectionMethod::IS_PROTECTED) as $object)
    			{
    				$this->_structure[HOME_COMPONENT][$branch]['actions'][str_replace("_handler_",
                                                                                      '',
                                                                                      $object->name)] = array();
    			}
    		}
		}
	}

	static function render_ul()
	{
		$self = new self;

		$content = '';
		foreach ($self->_structure[HOME_COMPONENT] as $key => $value)
		{
			$content .= html::li($key);
		}

		return html::ul($content);
	}

	static function make_sitemap()
	{
		return array();
	}
}

?>