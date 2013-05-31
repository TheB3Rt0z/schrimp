**_update_class_warnings($class_name, $parameters, $length, $cyc)** (PriS, Len: 23/26 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 6 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
  
        if (empty(self::$_class_warnings[$class_name]))
            self::$_class_warnings[$class_name] = array
            (
                'blue' => 0,
                'yellow' => 0,
                'red' => 0,
            );

        if ((count($parameters) - MAX_PARAMETERS_COMPLEXITY) >= 0)
            self::$_class_warnings[$class_name]['blue']++;

        if ($length > (floor(MAX_METHODS_COMPLEXITY / 10) * 10))
        {
            if ($length <= MAX_METHODS_COMPLEXITY)
                self::$_class_warnings[$class_name]['yellow']++;
            else
                self::$_class_warnings[$class_name]['red']++;
        }

        if ($cyc > (floor(MAX_CYCLOMATIC_COMPLEXITY / 10) * 10))
        {
            if ($cyc <= MAX_CYCLOMATIC_COMPLEXITY)
                self::$_class_warnings[$class_name]['yellow']++;
            else
                self::$_class_warnings[$class_name]['red']++;
        }
