<?php

class navigator
{
	public static $todos = array
	(
		'render_list' => "this should be CSS3 and appear on a mouse gesture..",
		'active breadcrumb' => "dynamic same-level-select trunks, or maybe widget?",
	);

	private static $_structure = null;

	function __construct()
	{
		if (!empty(self::$_structure)) // singleton
			return true;

		self::$_structure = array
		(
			_SET_HOME_COMPONENT => array
			(
				'name' => tr(_SET_HOME_COMPONENT,
                             'COMPONENT VISIBLE NAME'),
            ),
        );

		foreach (array_filter(glob(_SET_APPLICATION_PATH . "*.php"),
		                      function($value)
		                      {
		                          return !substr_count($value, _SET_HOME_COMPONENT);
		                      }) as $filename)
		{
			require_once $filename;

    		$branch = str_replace(array(_SET_APPLICATION_PATH, ".php"), '', $filename);

    		$rc = new ReflectionClass($branch);
    		if ($rc->getConstant('VISIBLE_IN_NAVIGATION'))
    		{
    			self::$_structure[_SET_HOME_COMPONENT]['sub'][$branch] = array
    			(
    			    'name' => tr($branch,
                                 'COMPONENT VISIBLE NAME')
    		    );

    			$subbranch =& self::$_structure[_SET_HOME_COMPONENT]['sub'][$branch];

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
    						    'name' => tr($branch,
    						                 $object->name),
    						    'handler' => $object->name
    					    );

    					$subbranch =& $subbranch['sub'][$link];
    				}

    				$static_variables = $object->getStaticVariables();
    				if (isset($static_variables['options']))
    				{
    					$options = $static_variables['options'];
    					if (!is_array($options))
    						$options = eval($options); // dynamic from static code!

						foreach ($options as $key => $value)
						{
							if (empty($value))
							{
								$option_component = $key;
								$option_value = 'COMPONENT VISIBLE NAME';
							}
							else
							{
								$option_component = $branch;
								$option_value = $value;
							}

							$subbranch['sub'][$link . "/" . $key] = array
							(
								'name' => tr($option_component,
   										     $option_value),
								'handler' => $object->name . "_" . $key,
							);

							if (empty($value))
								$subbranch['sub'][$link . "/" . $key]['controller'] = $key;
						}
    				}

    				$subbranch =& self::$_structure[_SET_HOME_COMPONENT]['sub'][$branch];
    			}
    		}
		}
	}

	static function render_list()
	{
		$self = new self;

		return html::array_to_list(self::$_structure[_SET_HOME_COMPONENT]['sub']);
	}

	static function render_breadcrumb()
	{
		$controller = main::$controller;

		if (!$controller::RENDER_BREADCRUMB)
			return false;

		$self = new self;

		if ($controller != _SET_HOME_COMPONENT)
		{
			$structure = self::$_structure[_SET_HOME_COMPONENT];

			echo html::hyperlink('',
				                 $structure['name']) . HTML_BREADCRUMB_SEPARATOR;

			if (!empty(main::$action))
			{
				$branch = $structure['sub'][$controller];

				echo html::hyperlink($controller,
				                     $branch['name']) . HTML_BREADCRUMB_SEPARATOR;

				$link = $controller . "/" . main::$action;

				if (!empty(main::$args))
				{
					echo html::hyperlink($link,
				                         $branch['sub'][$link]['name'])
				       . HTML_BREADCRUMB_SEPARATOR;

				    $branch['sub'][$link]['handler'] .= '_' . main::$args[0];

				    if (count(main::$args) > 1)
					{
						$name = tr($controller,
    						       $branch['sub'][$link]['handler']);

						echo html::hyperlink($link . "/" . main::$args[0],
				                         	 $name)
				           . HTML_BREADCRUMB_SEPARATOR . main::$args[1];

						if (!empty(main::$args[2]))
							echo " ("
							   . urldecode(implode(", ",
						                           array_slice(main::$args, 2)))
						       . ")";
					}
					else
						echo tr((!empty($branch['sub'][$link]['sub'][$link . "/" . main::$args[0]]['controller'])
							    ? $branch['sub'][$link]['sub'][$link . "/" . main::$args[0]]['controller']
							    : $controller),
					            $branch['sub'][$link]['handler']);
				}
				else
					echo $branch['sub'][$link]['name'];
			}
			else
				echo $structure['sub'][$controller]['name'];
		}
	}

	static function render_active_breadcrumb()
	{
		// to be continued after breadcrumb code analisys
	}

	static function render_sitemap()
	{
		$self = new self;

		return html::array_to_list(self::$_structure[_SET_HOME_COMPONENT]['sub'], 'ol');
	}
}

?>