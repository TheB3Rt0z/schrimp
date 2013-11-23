<?php namespace schrimp;

class navigator
{
    static $todos = array
    (
        'function unification' => "compress bc-renders to one render_bc(active)",
        'fix (advanced) list/breadcrumb' => "not right initialized in dev mode..",
        'fix navi when no dev..' => "breadcrumb false, no structure, errors..",
        'render_list' => "this should be CSS3 and appear on a mouse gesture..",
        'list & advanced list' => "should mark as active current handler..",
    );

    static $tests = array();

    private $_actual_home = '';
    private $_structure = null;

    function __construct()
    {
        if (empty($this->_structure))
        {
            $this->_initialize_structure();

            foreach (array_filter(glob(_SET_APPLICATION_PATH . "*.php"),
                                  function($value)
                                  {
                                      return !substr_count($value,
                                                           "_")
                                          && !substr_count($value,
                                                           _SET_HOME_COMPONENT);
                                  }) as $filename)
            {
                ld($filename);

                $branch = str_replace(array
                                      (
                                          _SET_APPLICATION_PATH,
                                          ".php",
                                      ),
                                      '',
                                      $filename);

                $this->_add_branch($branch); // addition performed only if visible
            }
        }
    }

    private function _initialize_structure()
    {
        $this->_actual_home = str_replace(code::_SET_NS_PREFIX,
                                           '',
                                           _SET_HOME_COMPONENT);
        $this->_structure = array
        (
            $this->_actual_home => array
            (
                'name' => tr($this->_actual_home,
                             'COMPONENT VISIBLE NAME'),
            ),
        );
    }

    private function  _initialize_options($data)
    {
        $options = array();

        foreach ($data as $key => $values)
            $options[$key] = array
            (
                'name' => $values['name'],
            );

        return $options;
    }

    private function _add_branch($ctrl_name)
    {
        $full_ctrl_name = code::_SET_NS_PREFIX . $ctrl_name;
        if ($full_ctrl_name::VISIBLE_IN_NAVIGATION)
        {
            $this->_structure[$this->_actual_home]['sub'][$ctrl_name] = array
            (
                'name' => tr($ctrl_name,
                             'COMPONENT VISIBLE NAME')
            );

            $sub =& $this->_structure[$this->_actual_home]['sub'][$ctrl_name];

            $rc = new \ReflectionClass($full_ctrl_name);
            foreach ($rc->getMethods(\ReflectionMethod::IS_PRIVATE
                | !\ReflectionMethod::IS_PROTECTED) as $object)
            {
                $returns = $this->_add_handlers($ctrl_name,
                                                $object,
                                                $sub);

                $static_variables = $object->getStaticVariables();

                if (!empty($static_variables['options']))
                    $this->_add_options($static_variables,
                                        $returns['sub'],
                                        $ctrl_name,
                                        $returns['link'],
                                        $object);

                $sub =& $this->_structure[$this->_actual_home]['sub'][$ctrl_name];
            }
        }
    }

    private function _add_handlers($ctrl_name,
                                   $object,
                                   &$sub)
    {
        $link = $ctrl_name;

        $item = explode("_",
                        str_replace("_handler_",
                                    '',
                                    $object->name));
        foreach ($item as $name)
        {
            $link .= "/" . $name;

            if (!isset($sub['sub'][$link]))
                $sub['sub'][$link] = array
                (
                    'name' => tr($ctrl_name,
                                 $object->name),
                    'handler' => $object->name
                );

            $sub =& $sub['sub'][$link];
        }

        return array
        (
            'link' => $link,
            'sub' => &$sub,
        );
    }

    private function _add_options($static_variables,
                                  &$sub,
                                  $ctrl_name,
                                  $link,
                                  $object)
    {
        $options = $static_variables['options'];

        if (!is_array($options))
            $options = eval($options); // dynamic from static code!

        $option_component = $ctrl_name;
        $option_value = 'COMPONENT VISIBLE NAME';
        foreach ($options as $key => $value)
        {
            if (empty($value))
                $option_component = $key;
            else
                $option_value = $value;

            $sub['sub'][$link . "/" . $key] = array
            (
                'name' => tr($option_component,
                             $option_value),
                'handler' => $object->name . "_" . $key,
            );

            if (empty($value))
                $sub['sub'][$link . "/" . $key]['controller'] = $key;
        }
    }

    private function _print_handler_name($branch,
                                         $link,
                                         $ctrl_name)
    {
        $handler = $link . "/" . main::$args[0];

        $ctrl_name_check =@ $branch['sub'][$link]['sub'][$handler]['controller'];

        echo tr((!empty($ctrl_name_check)
                ? $ctrl_name_check
                : $ctrl_name),
                $branch['sub'][$link]['handler']);
    }

    private function _print_handler_parameter($branch,
                                              $link,
                                              $ctrl_name)
    {
        echo html::hyperlink($link,
                             $branch['sub'][$link]['name'])
           . HTML_BREADCRUMB_SEPARATOR;

        $branch['sub'][$link]['handler'] .= '_' . main::$args[0];

        if (count(main::$args) > 1)
            $this->_print_additional_parameters($branch,
                                                $link,
                                                $ctrl_name);
        else
            $this->_print_handler_name($branch,
                                       $link,
                                       $ctrl_name);
    }

    private function _print_additional_parameters($branch,
                                                  $link,
                                                  $ctrl_name)
    {
        $name = tr($ctrl_name,
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

    private function _print_breadcrumb($ctrl_name)
    {
        $structure = $this->_structure[$this->_actual_home];

        echo html::hyperlink('',
                             $structure['name'])
           . HTML_BREADCRUMB_SEPARATOR;

        if (!empty(main::$action))
        {
            $branch = $structure['sub'][$ctrl_name];
            echo html::hyperlink($ctrl_name,
                                 $branch['name']) . HTML_BREADCRUMB_SEPARATOR;

            $link = $ctrl_name . "/" . main::$action;

            if (!empty(main::$args))
                $this->_print_handler_parameter($branch,
                                                $link,
                                                $ctrl_name);
            else
                echo $branch['sub'][$link]['name'];
        }
        else
            echo $structure['sub'][$ctrl_name]['name'];
    }

    private function _get_action_select($structure,
                                        $ctrl_name,
                                        $link)
    {
        $branch = $structure['sub'][$ctrl_name];

        $code = HTML_BREADCRUMB_SEPARATOR;

        if (count($options = $this->_initialize_options($branch['sub'])) > 1)
            $code .= html_form::dropdown($options,
                                         $link,
                                         "document.location.href='"
                                       . ru() . "' + this.value;");
        else
            $code .= $branch['sub'][$link]['name'];

        return $code;
    }

    private function _get_args_select($structure,
                                      $ctrl_name,
                                      $link)
    {
        $branch = $structure['sub'][$ctrl_name]['sub'][$link];

        $handler = $link .= '/' . main::$args[0];

        $code = HTML_BREADCRUMB_SEPARATOR;

        if (count($options = $this->_initialize_options($branch['sub'])) > 1)
            $code .= html_form::dropdown($options,
                                         $handler,
                                         "document.location.href='"
                                       . ru() . "' + this.value;");
        else
            $code .= $branch['sub'][$handler]['name'];

        if (count(main::$args) > 1)
        {
            $code .= HTML_BREADCRUMB_SEPARATOR . main::$args[1];

            if (!empty(main::$args[2]))
                $code .= " ("
                       . urldecode(implode(", ",
                                           array_slice(main::$args, 2)))
                       . ")";
        }

        return $code;
    }

    private function _print_active_breadcrumb($ctrl_name)
    {
        $structure = $this->_structure[$this->_actual_home];

        $code = html::spanner(HTML_ICON_NAVIGATION,
                              array
                              (
                                  'marker',
                              ))
              . html::hyperlink('',
                                $structure['name'])
              . HTML_BREADCRUMB_SEPARATOR;

        if (count($options = $this->_initialize_options($structure['sub'])) > 1)
            $code .= html_form::dropdown($options,
                                         $ctrl_name,
                                         "document.location.href='"
                                       . ru() . "' + this.value;");
        else
            $code .= $structure['sub'][$ctrl_name]['name'];

        if (!empty(main::$action))
        {
            $code .= $this->_get_action_select($structure,
                                               $ctrl_name,
                                               $link = $ctrl_name
                                                     . "/" . main::$action);

            if (!empty(main::$args))
                $code .= $this->_get_args_select($structure,
                                                 $ctrl_name,
                                                 $link);
        }

        echo html::divisor($code);
    }

    static function get_list()
    {
        if (_SET_ADVANCED_INTERFACE)
		    return self::get_advanced_list();

        $self = new self;

        return html::array_to_list($self->_structure[$self->_actual_home]['sub']);
    }

    static function get_advanced_list()
    {
        $self = new self;

        $code = html::spanner(HTML_ICON_LIST,
                              array
                              (
                                  'marker',
                              ))
              . html::array_to_list($self->_structure[$self->_actual_home]['sub']);

        return html::divisor($code);
    }

    static function render_breadcrumb($ctrl_name)
    {
        if (!$ctrl_name::RENDER_BREADCRUMB)
            return false;

        if ($ctrl_name != _SET_HOME_COMPONENT) // excludes breadcrumb on first page
        {
            $self = new self;
            $self->_print_breadcrumb($ctrl_name);
        }
    }

    static function render_active_breadcrumb($ctrl_name)
    {
        if (!$ctrl_name::RENDER_BREADCRUMB)
            return false;

        if ($ctrl_name != _SET_HOME_COMPONENT) // excludes breadcrumb on first page
        {
            $self = new self;
            $self->_print_active_breadcrumb(str_replace(code::_SET_NS_PREFIX,
                                            '',
                                            $ctrl_name));
        }
    }

    static function get_sitemap()
    {
        $self = new self; // populating structure array if still null (singleton)

        $sub_structure = $self->_structure[$this->_actual_home]['sub'];

        return html::array_to_list($sub_structure, 'ol');
    }
}