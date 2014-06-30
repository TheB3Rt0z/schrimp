<?php namespace schrimp;

class html_form extends html
{
    static $todos = array
    (
        'test array result' => "should be saved anywhere and loaded by executor..",
    );

    static $tests = array
    (
        'base_dropdown' => array
        (
            'method' => 'dropdown',
            'parameters' => array
            (
                'options' => array
                (
                    array
                    (
                        'name' => '',
                    ),
                    array
                    (
                        'name' => "name",
                    ),
                ),
            ),
            'error' => "dropdown html output not valid",
        ),
        'advanced_dropdown' => array
        (
            'method' => 'dropdown',
            'parameters' => array
            (
                'options' => array
                (
                    array
                    (
                        'name' => '',
                    ),
                    array
                    (
                        'name' => 'selected',
                    ),
                ),
                'selected' => 1,
                'onchange' => "javascript",
            ),
            'error' => "dropdown html output not valid",
        ),
    );

    private $_method = 'post';

    private $_submit = null;

    function __construct($action,
                         $enctype,
                         $classes = array(),
                         $target = '')
    {
        $attributes = array
        (
            'method' => $this->_method,
            'enctype' => $enctype,
        );
        $attributes['action'] = $action;

        if (!empty($classes))
            $attributes['class'] = implode($classes, " ");

        if (!empty($target))
            $attributes['target'] = $target;

        return parent::__construct('form',
                                   $attributes);
    }

    private function _add_fields($settings)
    {
        if (!empty($settings['hidden']))
            foreach ($settings['hidden'] as $name => $data)
                $this->add_hidden($name,
                                  $data['value']);

        if (!empty($settings['text']))
            foreach ($settings['text'] as $name => $data)
                $this->add_text($name,
                                $data['value']);

        if (!empty($settings['textarea']))
            foreach ($settings['textarea'] as $name => $data)
                $this->add_textarea($name,
                                    $data['value'],
                                    !empty($data['classes'])
                                    ? $data['classes']
                                    : array());

        if (!empty($settings['submit']))
            $this->add_submit($settings['submit']['value'],
                              $settings['submit']['title'],
                              $settings['submit']['classes']);
    }

    protected function _add_field($attributes)
    {
        extract($attributes);

        if ($type == 'textarea')
            parent::_append_content(parent::_textarea($name,
                                                      $value,
                                                      !empty($classes)
                                                      ? $classes
                                                      : array()));
        else
            parent::_append_content(parent::_input($type,
                                                   $name,
                                                   $value,
                                                   !empty($classes)
                                                   ? $classes
                                                   : array(),
                                                   !empty($title)
                                                   ? $title
                                                   : ''));

        return $this;
    }

    function add_hidden($name,
                        $default = '')
    {
        $attributes = array
        (
            'type' => 'hidden',
            'name' => strtolower(trim($name)),
            'value' => $default,
        );

        $this->_add_field($attributes);

        return $this;
    }

    function add_submit($value,
                        $title = '',
                        $classes = array())
    {
        if (empty($this->submit))
        {
            $attributes = array
            (
                'type' => 'submit',
                'name' => false,
                'value' => $value,
            );

            if (!empty($title))
                $attributes['title'] = $title;

            if (!empty($classes))
                $attributes['classes'] = $classes;

            $this->_submit = $attributes;

            $this->_add_field($this->_submit);
        }

        return $this;
    }

    function add_textarea($name,
                          $default = '',
                          $classes = array())
    {
        $attributes = array
        (
            'type' => 'textarea',
            'name' => strtolower(trim($name)),
            'value' => $default,
            'classes' => $classes,
        );

        $this->_add_field($attributes);

        return $this;
    }

    static function form($identifier,
                         $classes = array(),
                         $target = '')
    {
        $args = func_get_args();

        $url = _SET_LIBRARIES_PATH
             . str_replace(code::_SET_NS_PREFIX,
                           '',
                           __CLASS__) . '/' . $identifier;

        if (fe($url))
        {
            eval("\$settings = array
                               (
                                   " . addcslashes((count($args) > 3)
                                       ? vsprintf(file_get_contents($url),
                                                  array_slice($args, 3))
                                       : file_get_contents($url), "$") . "
                               );");

            $self = new self($settings['action'],
                             !empty($settings['enctype'])
                             ? $settings['enctype']
                             : 'multipart/form-data', // default encoding type,
                             $classes,
                             $target);

            $self->_add_fields($settings);

            return $self->get_html();
        }
    }

    static function render($identifier,
                           $classes = array(),
                           $target = '')
    {
        echo call_user_func_array('self::form',
                                  func_get_args());
    }

    static function dropdown($options,
                             $selected = null,
                             $onchange = false)
    {
        $content = '';

        foreach ($options as $key => $values)
        {
            $selected_check = (!empty($selected) && ($selected == $key));

            $content .= self::_option($key,
                                      $values['name'],
                                      $selected_check);
        }

        $attributes = array();
        if (!empty($onchange))
            $attributes['onchange'] = $onchange;

        return self::_select($content,
                             $attributes);
    }

    static function textarea($content)
    {
        $attributes = array();

        return self::_textarea($content,
                               $attributes);
    }
}