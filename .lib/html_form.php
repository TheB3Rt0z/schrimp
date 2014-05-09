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

    private $_attributes = array();

    function __construct() {}

    function append_input()
    {

    }

    function get_html()
    {
        $parent = new parent('form', // fabric fixed value
                             $this->_attributes,
                             'class generated content'); // extra tools methods

        return $parent->_get_html();
    }

    function render()
    {
        $parent = new parent('form', // fabric fixed value
                             $this->_attributes,
                             'class generated content'); // extra tools methods

        echo $parent->_html;
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