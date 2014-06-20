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

    private $_action = '';
    private $_method = 'post';
    private $_enctype = 'multipart/form-data'; // default encoding type

    private $_submit = null;

    function __construct($identifier_or_url,
                         $classes = array(),
                         $target = '')
    {
        $attributes = array
        (
            'method' => $this->_method,
            'enctype' => $this->_enctype,
        );
        $attributes['action'] = $identifier_or_url; // to be expanded..

        if (!empty($classes))
            $attributes['class'] = implode($classes, " ");

        if (!empty($target))
            $attributes['target'] = $target;

        return parent::__construct('form',
                                   $attributes);
    }

    protected function _add_field($attributes)
    {
        extract($attributes);

        parent::_append_content(parent::_input($type,
                                               $name,
                                               $value,
                                               (!empty($classes)
                                               ? $classes
                                               : array())));

        return $this;
    }

    function add_hidden($name,
                        $default = '')
    {
        $attributes = array
        (
            'type' => 'hidden',
            'name' => strtolower(trim($name)),
            'value' => trim($default),
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
                'name' => 'submit',
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

    static function render($classes = array())
    {
        if (!empty($classes))
            $attributes['class'] = implode($classes, " ");

        $parent = new parent('form', // fabric fixed value
                             $attributes,
                             'class generated content'); // to simulate extra tools methods..

        echo $parent->_get_html();
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
            $attributes['onchange'] = trim($onchange);

        return self::_select($content,
                             $attributes);
    }
}