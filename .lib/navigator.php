<?php // navigazione ricorsiva basata sugli handler con underscore multipli

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
    			$this->_structure[HOME_COMPONENT][$branch] = array('name' => language::translate($branch,
                                                                                                 'COMPONENT VISIBLE NAME'));

    			$subbranch =& $this->_structure[HOME_COMPONENT][$branch];

    			foreach ($rc->getMethods(ReflectionMethod::IS_PRIVATE | !ReflectionMethod::IS_PROTECTED) as $object)
    			{
    				$item = explode("_", str_replace("_handler_", '', $object->name));

    				$link = $branch;

    				foreach ($item as $name)
    				{
    					$link .= "/" . $name;

    					if (!isset($subbranch['actions'][$link]))
    					{
    						$subbranch['actions'][$link] = array('name' => language::translate($branch,
    						                                                                   $object->name));
    					}

    					$subbranch =& $subbranch['actions'][$link];
    				}

    				$subbranch =& $this->_structure[HOME_COMPONENT][$branch];
				}
    		}
		}
	}

	static function render_list()
	{
		$self = new self;

		return html::array_to_list($self->_structure[HOME_COMPONENT]);
	}

	static function render_breadcrumb()
	{

	}

	static function make_sitemap()
	{
		return array();
	}
}

?>