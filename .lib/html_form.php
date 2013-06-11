<?php

class html_form extends html
{
    public static $todos = array
    (
        'test array result' => "should be saved anywhere and loaded by executor..",
    );

    public static $tests = array
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

?>
