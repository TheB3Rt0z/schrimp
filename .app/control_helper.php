<?php namespace schrimp;

class control_helper
{
    static $todos = array();

    static $tests = array();

    private $_access_levels = array
    (
        0 => 'system',
        1 => 'perdir',
        2 => 'script',
    );

    function get_general_phpinfos($output = '')
    {
        ksort($_SERVER);

        foreach ($_SERVER as $key => $value)
            $output .= $key . " " . CODE_ICON_ARROW . " "
                     . $value . html::newline();

        return $output;
    }

    function get_configuration_phpinfos($output = '')
    {
        foreach (ini_get_all() as $key => $values)
        {
            $access = str_split(decbin($values['access']));
            foreach ($access as $numkey => $value)
                if (!empty($value))
                    $access[$numkey] = $this->_access_levels[$numkey];
            $access = implode(array_filter($access), ", ");

            $output .= ($values['local_value'] != $values['global_value']
                       ? "&nbsp;"
                       : '') . strtoupper($key) . " " . CODE_ICON_ARROW . " "
                     . fm(str_replace(",",
                                      ", ",
                                      $values['local_value'])) . " / "
                     . fm(str_replace(",",
                                      ", ",
                                      $values['global_value']))
                     . " (" . $access . ")"
                     . html::newline();
        }

        return $output;
    }

    function get_environment_phpinfos($output = '')
    {
        ksort($_ENV);

        foreach ($_ENV as $key => $value)
            $output .= $key . " " . CODE_ICON_ARROW . " "
                    . $value . html::newline();

        if (empty($output))
            $output .= html::hyperlink('http://www.php.net/manual-lookup.php?'
                                     . 'pattern=ini.variables-order',
                                       "(?)");

        return $output;
    }

    function get_phpinfos($arg)
    {
        switch ($arg)
        {
            case 'general' :
                return $this->get_general_phpinfos();

            case 'configuration' :
                return $this->get_configuration_phpinfos();

            case 'environment' :
                return $this->get_environment_phpinfos();

            default :
                return null;
        }
    }
}