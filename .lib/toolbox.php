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
    		return "\"" . str_replace("\n", '\\n', $mixed) . "\"";
		else
			return $mixed; // fallback
	}
}

/**
 * returns a beautiful formatted value, mixed variable-type-dependant;
 * @param mixed $mixed
 * @return mixed depending on internally defined rules
 */
function fv($mixed)
{
	return toolbox::format_value($mixed);
}

?>