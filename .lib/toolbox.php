<?php

class toolbox
{
	public static $todos = array
	(
	    'unit testing' => "..and what about a little code coverage measuring?",
	    'error message' => "difference should be evidenced and a message showed",
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
	    $tests = '.lib/' . __CLASS__ . '.tsts';
	    eval("\$results = array(" . file_get_contents($tests) . ");"); // loads results file
	    $check = true;

	    foreach (code::get_libraries_list() as $key => $value)
	    {
	        $class = new ReflectionClass($key);
	        $tests = $class->getStaticPropertyValue('tests');
	        foreach ($tests as $subkey => $values)
	        {
                $result = call_user_func_array(array($key, $values['method']),
			                                   $values['parameters']);

                $answer = $results[$key][$subkey];
	            if ($result !== $answer)
	            {
	                vd($values['error'] . ": " . $result . " vs " . $answer);
	                $check = false;
	            }
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