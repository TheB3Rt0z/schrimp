**get_class_dependencies(ReflectionClass $class)** (PubS, Len: 25/30 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 6 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
  
        $dependencies = array(); // calculation is imprecise..

        if ($parent = $class->getParentClass())
            $dependencies[$parent->name] = true;
        foreach (self::get_libraries_list($class->name) as $key => $value)
            $dependencies[$key] = 0;

        foreach (file($class->getFileName()) as $code_line)
            foreach ($dependencies as $key => $value)
                if (substr_count($code_line, $key . '::')
                    || substr_count($code_line, ' new ' . $key))
                {
                    $dependencies[$key]++;
                }

        $dependencies = array_filter($dependencies);

        ksort($dependencies);

        if (!empty($dependencies))
            return "Uses: "
                 . implode(", ",
                           array_map(function($value)
                                     {
                                         return "**" . $value . "**";
                                     },
                                     array_keys($dependencies)))
                 . MD_NEWLINE_SEQUENCE;
        else
            return null;
