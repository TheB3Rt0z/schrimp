<?php

class control_helper
{
    function get_general_phpinfos($output = '')
    {
        ksort($_SERVER);

        foreach ($_SERVER as $key => $value)
            $output .= $key . " &#10140; "
                     . $value . html::newline();

        return $output;
    }

    function get_configuration_phpinfos($output = '')
    {
        foreach (ini_get_all() as $key => $values)
            $output .= strtoupper($key) . " &#10140; "
                     . fv(str_replace(",",
                                      ", ",
                                      $values['local_value'])) . " / "
                     . fv(str_replace(",",
                                      ", ",
                                      $values['global_value']))
                     . " (" . $values['access'] . ")"
                     . html::newline();

        return $output;
    }

    function get_environment_phpinfos($output = '')
    {
        ksort($_ENV);

        foreach ($_ENV as $key => $value)
            $output .= $key . " &#10140; "
                    . $value . html::newline();

        if (empty($output))
            $output .= html::hyperlink('http://www.php.net/manual-lookup.php?'
                                     . 'pattern=ini.variables-order',
                                       "(?)");

        return $output;
    }
}

?>