<?php

class html_form extends html
{
    public static $todos = array(); // warning, inherited if not available

    public static $tests = array
    (
        'base dropdown' => array
        (
            'method' => "dropdown",
            'parameters' => array
            (
                array(
                    0 => '',
                    1 => "1",
                    2 => "2",
                ),
            ),
            'returns' => "object",
            'test' => "%s->get_content == ''",
            'error' => "dropdown option were incorrectly initialized",
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
