**format_value($mixed)** (PubS, Len: 19 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 4 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
  
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
