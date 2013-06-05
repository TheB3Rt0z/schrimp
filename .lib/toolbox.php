<?php

class toolbox
{
	public static $todos = array
	(
	    'unit testing' => "this class should contain only single tools, beware..",
	);

    public static $tests = array();

	static function format_value($mixed)
	{
		if ($mixed === true
		    || $mixed == "1")
		{
    		return "true";
		}
    	elseif ($mixed === false
		    || $mixed == "0")
		{
    		return "false";
		}
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

	static function highlight_code($string,
	                               $type = '')
	{
	    switch ($type)
	    {
	        default :
	            return highlight_string($string, true);
	    }
	}

	static function full_test() // only for libraries
	{
	    $check = true;

	    foreach (code::get_libraries_list() as $key => $value)
	    {
	        $class = new ReflectionClass($key);
	        $tests = $class->getStaticPropertyValue('tests');
	        foreach ($tests as $subkey => $values) {
                $result = call_user_func_array(array($key, $values['method']),
			                                   $values['parameters']);

	            if (!call_user_func('is_' . $values['returns'],
	                                $result))
	                $check = false;

	            if ($result != $values['result'])
	                $check = false;

	            if (!$check)
	                vd($values['error']);
	        }
	    }

	    return $check;
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