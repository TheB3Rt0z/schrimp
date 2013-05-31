**get_objects($class = null, $identifier = null)** (PubS, Len: 14/17 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 3 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
  
	    $objects = self::$_register; // fallback

	    if (!empty($class))
	        if (!empty($objects[$class]))
	        {
	            $objects = $objects[$class];
	            if (!empty($identifier)
	                && !empty($objects[$identifier]))
	                $objects = $objects[$identifier];
	        }

	    array_walk_recursive($objects, function(&$value)
	    {
	        $value = unserialize($value);
	    });

	    return $objects;
