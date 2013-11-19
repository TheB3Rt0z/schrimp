<?php namespace schrimp;

class toolbox
{
	static $todos = array
	(
	    'unit testing' => "..and what about a little code coverage measuring?",
	    'error message' => "difference should be evidenced and a message showed",
	    'fulltest procedure' => "add more tests and implement more testtypes..",
	    'virus total' => "https://www.virustotal.com/it/documentation/public-api/",
	    'wide-range tests' => "include controller-derived + helpers etc. classes?",
	    'implement filter_functions' => "github-wiki-page / php.net-documentation",
	    'xml parser/updater needed' => "maybe in a extra class, like md..?",
	);

    static $tests = array();

    private static function _filter_functions($code)
    {
        return $code;
    }

    static function filter($array,
                           $key_s)
    {
        if ((is_string($key_s)
                || is_numeric($key_s)) // single associative key
            && !empty($array[$key_s]))
            unset($array[$key_s]);
        elseif (is_array($key_s))
            foreach ($key_s as $key)
                if (!empty($array[$key]))
                    unset($array[$key]);

        return $array;
    }

	static function format($mixed)
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

	static function highlight($string,
	                          $type = '', // default is php code (native)
	                          $filter = '')
	{
	    switch ($type)
	    {
	        default : // this means php
	        {
	            $string = highlight_string($string, true);

                if (!empty($filter))
                    switch ($filter)
                    {
                        case 'functions' :
                        {
                            $string = self::_filter_functions($string);
                        }
                    }
	        }
	    }

	    return $string;
	}

	static function fulltest() // only for libraries
	{
	    $tests = '.lib/toolbox.tsts';
	    eval("\$results = array
	                      (
	                          " . pr($tests) . "
	                      );"); // loads results file
	    $check = true;

	    foreach (code::get_libraries_list() as $key => $value)
	    {
	        $fullkey = (class_exists($key)
	                   ? $key
	                   : 'schrimp\\' . $key);
	        $class = new \ReflectionClass($fullkey);
	        $tests = $class->getStaticPropertyValue('tests');
	        foreach ($tests as $subkey => $values)
	        {
                $result = call_user_func_array(array($fullkey, $values['method']),
			                                   $values['parameters']);

                $answer = $results[$key][$subkey];
	            if ($result !== $answer)
	            {
	                vd($values['error'] . ": " . $result . " vs " . $answer); // ups..
	                $check = false;
	            }
	        }
	    }

	    return $check;
	}

	static function load($file)
	{
	    if (fe($file))
            return require_once $file;
	    else
	        return false;
	}

	static function parse($source)
	{
	    if (fe($source))
	        $output = file_get_contents($source);
	    else
	        return false;

	    if (substr_count(strtolower($source), ".csv"))
	        return str_getcsv($output); // returns an array
	    elseif (@simplexml_load_string($output))
	        return new SimpleXmlElement($output);
	    else
	        return $output;
	}
}

/**
 * returns a beautiful formatted value, mixed variable-type-dependant;
 * @param mixed $mixed
 * @return mixed depending on internally defined rules
 */
function fm($mixed)
{
	return toolbox::format($mixed);
}

/**
 * require (once) a file and launch a php warning if not successful
 * @param string $file
 * @return 1 on success or false on file not exists or require_once failure
 */
function ld($file)
{
    return toolbox::load($file);
}

/**
 * returns a parsed output, source-type dependant;
 * @param string $source
 * @return mixed depending on source origin
 */
function pr($source)
{
	return toolbox::parse($source);
}