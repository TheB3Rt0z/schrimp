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
				'name' => t(HOME_COMPONENT,
                            'COMPONENT VISIBLE NAME'),
            ),
        );

		foreach (array_filter(glob(".app/*.php"),
		                      function($value)
		                      {
		                          return !substr_count($value, HOME_COMPONENT);
		                      }) as $filename)
		{
			require_once $filename;

    		$branch = str_replace(array(".app/", ".php"), '', $filename);

    		$rc = new ReflectionClass($branch);
    		if ($rc->getConstant('VISIBLE_IN_NAVIGATION'))
    		{
    			$this->_structure[HOME_COMPONENT]['sub'][$branch] = array
    			(
    			    'name' => t($branch,
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
    						    'name' => t($branch,
    						                $object->name),
    						    'handler' => $object->name
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
				$branch = $structure['sub'][$controller];

				echo html::hyperlink($controller,
				                     $branch['name']) . BREADCRUMB_SEPARATOR;

				$link = $controller . "/" . main::$action;

				if (!empty(main::$args))
				{
					echo html::hyperlink($link,
				                         $branch['sub'][$link]['name'])
				       . BREADCRUMB_SEPARATOR;

				    $branch['sub'][$link]['handler'] .= '_' . main::$args[0];

				    if (count(main::$args) > 1)
					{
						$name = t($controller,
    						      $branch['sub'][$link]['handler']);

						echo html::hyperlink($link .= "/" . main::$args[0],
				                         	 $name)
				           . BREADCRUMB_SEPARATOR . main::$args[1];

						if (!empty(main::$args[2]))
							echo " (" . urldecode(implode(", ",
						                          array_slice(main::$args, 2))) . ")";
					}
					else
						echo t($controller,
					           $branch['sub'][$link]['handler']);
				}
				else
					echo $branch['sub'][$link]['name'];
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