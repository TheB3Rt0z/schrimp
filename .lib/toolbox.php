<?php

class toolbox
{
	public static $todos = array();

	static function format_value($mixed)
	{
		if ($mixed === true)
    		return "true";
    	elseif ($mixed === false)
    		return "false";
    	elseif ($mixed === ''
    		|| $mixed == null)
    	{
    		return "null";
    	}
		elseif (!is_numeric($mixed))
    		return "\"" . $mixed . "\"";
	}
}

/**
 * returns a beautiful formatted value, mixed variable-type-dependant;
 * @param mixed $mixed
 */
function fv($mixed)
{
	return toolbox::format_value($mixed);
}

?>