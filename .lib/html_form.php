<?php

class html_form extends html
{
    public static $todos = array
    (
        'test array result' => "find a way to reduce test string, otherwise error",
    );

    public static $tests = array
    (
        'base dropdown' => array
        (
            'method' => 'dropdown',
            'parameters' => array
            (
                array
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
            'returns' => 'string',
            'result' => "<select><option value=\"0\"></option><option value=\"1\">name</option></select>",
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
