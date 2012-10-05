<?php

// TODO: mouse gesture circolare per far apparire menu a scomparsa

class navigator
{
	private $_structure = false;

	function __construct()
	{
		if (!empty($this->_structure))
			return;

		$this->_structure = array
		(
			HOME_COMPONENT => array
			(
				'name' => language::translate(HOME_COMPONENT,
                                              'COMPONENT VISIBLE NAME'),
            ),
        );

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
    			$this->_structure[HOME_COMPONENT]['sub'][$branch] = array
    			(
    			    'name' => language::translate($branch,
                                                  'COMPONENT VISIBLE NAME')
    		    );

    			$subbranch =& $this->_structure[HOME_COMPONENT]['sub'][$branch];

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
    						$subbranch['sub'][$link] = array
    						(
    						    'name' => language::translate($branch,
    						                                  $object->name)
    					    );

    					$subbranch =& $subbranch['sub'][$link];
    				}

    				$subbranch =& $this->_structure[HOME_COMPONENT]['sub'][$branch];
				}
    		}
		}
	}

	static function render_list()
	{
		$self = new self;

		return html::array_to_list($self->_structure[HOME_COMPONENT]['sub']);
	}

	static function render_breadcrumb()
	{
		$controller = main::$controller;

		if (!$controller::RENDER_BREADCRUMB)
			return;

		$self = new self;

		if ($controller != HOME_COMPONENT)
		{
			$structure = $self->_structure[HOME_COMPONENT];

			echo html::hyperlink('',
				                 $structure['name']) . BREADCRUMB_SEPARATOR;

			if (!empty(main::$action))
			{
				echo html::hyperlink($controller,
				                     $structure['sub'][$controller]['name']) . BREADCRUMB_SEPARATOR;

				if (!empty(main::$args))
				{
					echo html::hyperlink($controller . '/' . main::$action,
				                         $structure['sub'][$controller]['sub'][$controller . '/' . main::$action]['name']) . BREADCRUMB_SEPARATOR;
				    // ciclo degli handler basati sulle acrtion args
				}
				else
					echo $structure['sub'][$controller]['sub'][$controller . '/' . main::$action]['name'];
			}
			else
				echo $structure['sub'][$controller]['name'];
		}
	}

	static function render_sitemap()
	{
		$self = new self;

		return html::array_to_list($self->_structure[HOME_COMPONENT]['sub'], 'ol');
	}
}

?>