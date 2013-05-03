<?php

class html_form extends html
{
    public static $todos = array();

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