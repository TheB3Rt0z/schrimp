<?php // navigazione ricorsiva basata sugli handler con underscore multipli

class navigator
{
	private $_structure = false;

	function __construct()
	{
		if (!empty($this->_structure)) return; // singleton

		$this->_structure = array(HOME_COMPONENT => array());

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
    			$this->_structure[HOME_COMPONENT][$branch] = array
    			(
    			    'name' => language::translate($branch,
                                                  'COMPONENT VISIBLE NAME')
    		    );

    			$subbranch =& $this->_structure[HOME_COMPONENT][$branch];

    			foreach ($rc->getMethods(ReflectionMethod::IS_PRIVATE
    				   | !ReflectionMethod::IS_PROTECTED) as $object)
    			{
    				$link = $branch;

    				$item = explode("_", str_replace("_handler_",
    						                         '',
    						                         $object->name));
    				foreach ($item as $name)
    				{
    					$link .= "/" . $name;

    					if (!isset($subbranch['sub'][$link]))
    					{
    						$subbranch['sub'][$link] = array
    						(
    						    'name' => language::translate($branch,
    						                                  $object->name)
    					    );
    					}

    					$subbranch =& $subbranch['sub'][$link];
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
		$self = new self;
		// return array_to_??? in forma di link e testi in base alla posizione
	}

	static function render_sitemap()
	{
		$self = new self;
		return html::array_to_list($self->_structure[HOME_COMPONENT], 'ol');
	}
}

?>