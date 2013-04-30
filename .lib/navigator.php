<?php

class navigator
{
    public static $todos = array
    (
        'render_breadcrumb' => "should return html code, or printing it directly?",
        'render_list' => "this should be CSS3 and appear on a mouse gesture..",
        'escort class functionalities' => "should they be here available?",
    );

    private $_structure = null;

    function __construct()
    {
        if (!empty($this->_structure))
            return false; // for singleton capability
        else
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
            require_once $filename;

            $branch = str_replace(array(_SET_APPLICATION_PATH, ".php"),
                                  '',
                                  $filename);

            $this->_add_branch($branch); // addition performed only if visible
        }
    }

    private function _initialize_structure()
    {
        $this->_structure = array
        (
            _SET_HOME_COMPONENT => array
            (
                'name' => tr(_SET_HOME_COMPONENT,
                             'COMPONENT VISIBLE NAME'),
            ),
        );
    }

    private function _add_branch($controller)
    {
        if ($controller::VISIBLE_IN_NAVIGATION)
        {
            $this->_structure[_SET_HOME_COMPONENT]['sub'][$controller] = array
            (
                'name' => tr($controller,
                             'COMPONENT VISIBLE NAME')
            );

            $sub =& $this->_structure[_SET_HOME_COMPONENT]['sub'][$controller];

            $rc = new ReflectionClass($controller);
            foreach ($rc->getMethods(ReflectionMethod::IS_PRIVATE
                     | !ReflectionMethod::IS_PROTECTED) as $object)
            {
                $returns = $this->_add_handlers($controller,
                                                $object,
                                                $sub);

                $static_variables = $object->getStaticVariables();

                if (!empty($static_variables['options']))
                    $this->_add_handler_static_options($static_variables,
                                                       $returns['sub'],
                                                       $controller,
                                                       $returns['link'],
                                                       $object);

                $sub =& $this->_structure[_SET_HOME_COMPONENT]['sub'][$controller];
            }
        }
    }

    private function _add_handlers($controller,
                                   $object,
                                   &$sub)
    {
        $link = $controller;

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
                    'name' => tr($controller,
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

    private function _add_handler_static_options($static_variables,
                                                 &$sub,
                                                 $controller,
                                                 $link,
                                                 $object)
    {
        $options = $static_variables['options'];

        if (!is_array($options))
            $options = eval($options); // dynamic from static code!

        $option_component = $controller;
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
                                         $controller)
    {
        $handler = $link . "/" . main::$args[0];

        $controller_check =@ $branch['sub'][$link]['sub'][$handler]['controller'];

        echo tr((!empty($controller_check)
                ? $controller_check
                : $controller),
                $branch['sub'][$link]['handler']);
    }

    private function _print_handler_parameter($branch,
                                              $link,
                                              $controller)
    {
        echo html::hyperlink($link,
                             $branch['sub'][$link]['name'])
           . HTML_BREADCRUMB_SEPARATOR;

        $branch['sub'][$link]['handler'] .= '_' . main::$args[0];

        if (count(main::$args) > 1)
            $this->_print_additional_parameters($branch,
                                                $link,
                                                $controller);
        else
            $this->_print_handler_name($branch,
                                       $link,
                                       $controller);
    }

    private function _print_additional_parameters($branch,
                                                  $link,
                                                  $controller)
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

    private function _render_breadcrumb($controller)
    {
        $structure = $this->_structure[_SET_HOME_COMPONENT];

        echo html::hyperlink('',
                             $structure['name'])
           . HTML_BREADCRUMB_SEPARATOR;

        if (!empty(main::$action))
        {
            $branch = $structure['sub'][$controller];
            echo html::hyperlink($controller,
                                 $branch['name']) . HTML_BREADCRUMB_SEPARATOR;

            $link = $controller . "/" . main::$action;

            if (!empty(main::$args))
                $this->_print_handler_parameter($branch,
                                                $link,
                                                $controller);
            else
                echo $branch['sub'][$link]['name'];
        }
        else
            echo $structure['sub'][$controller]['name'];
    }

    private function _render_active_breadcrumb($controller)
    {
        $structure = $this->_structure[_SET_HOME_COMPONENT];

        $code = html::spanner(HTML_ICON_NAVIGATION,
                             'marker')
              . html::hyperlink('',
                                $structure['name'])
              . HTML_BREADCRUMB_SEPARATOR;

        $options = array();
        foreach ($structure['sub'] as $key => $values)
            $options[$key] = array
            (
                'name' => $values['name'],
            );

        if (count($options) > 1)
            $code .= html::dropdown($options,
                                    $controller,
                                    "document.location.href='" . ru() . "' + this.value;");
        else
            $code .= $structure['sub'][$controller]['name'];

        if (!empty(main::$action))
        {
            $branch = $structure['sub'][$controller];

            $link = $controller . "/" . main::$action;

            $options = array();
            foreach ($branch['sub'] as $key => $values)
                $options[$key] = array
                (
                    'name' => $values['name'],
                );

            $code .= HTML_BREADCRUMB_SEPARATOR;

            if (count($options) > 1)
                $code .= html::dropdown($options,
                                        $link,
                                        "document.location.href='" . ru() . "' + this.value;");
            else
                $code .= $branch['sub'][$link]['name'];

            if (!empty(main::$args))
            {
                $branch = $branch['sub'][$link];

                $handler = $link .= '/' . main::$args[0];

                $options = array();
                    foreach ($branch['sub'] as $key => $values)
                        $options[$key] = array
                        (
                            'name' => $values['name'],
                        );

                $code .= HTML_BREADCRUMB_SEPARATOR;

                if (count($options) > 1)
                    $code .= html::dropdown($options,
                                            $handler,
                                            "document.location.href='" . ru() . "' + this.value;");
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
            }
        }

        echo html::divisor($code);
    }

    static function render_list()
    {
        $self = new self;

        return html::array_to_list($self->_structure[_SET_HOME_COMPONENT]['sub']);
    }

    static function render_breadcrumb()
    {
        $controller = main::$controller;

        if (!$controller::RENDER_BREADCRUMB)
            return false;

        if ($controller != _SET_HOME_COMPONENT)
        {
            $self = new self;
            $self->_render_breadcrumb($controller);
        }
    }

    static function render_active_breadcrumb()
    {
        $controller = main::$controller;

        if (!$controller::RENDER_BREADCRUMB)
            return false;

        if ($controller != _SET_HOME_COMPONENT)
        {
            $self = new self;
            $self->_render_active_breadcrumb($controller);
        }
    }

    static function render_sitemap()
    {
        $self = new self; // populating structure array if still null (singleton)

        $sub_structure = $self->_structure[_SET_HOME_COMPONENT]['sub'];

        return html::array_to_list($sub_structure, 'ol');
    }
}

?>
