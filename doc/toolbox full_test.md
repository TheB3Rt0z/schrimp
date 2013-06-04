**full_test()** (PubS, Len: 8/10 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
  
	    $check = true;

	    foreach (code::get_libraries_list() as $key => $value)
	    {
	        $class = new ReflectionClass($key);
	        foreach ($class->getStaticPropertyValue('tests') as $subkey => $values)
                vd("here Executor needed!");
	    }

	    return $check;
