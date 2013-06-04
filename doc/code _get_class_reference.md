**_get_class_reference(ReflectionClass $class)** (PriS, Len: 21/26 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 5 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
  
        $reference = '';

        $class_methods = $class->getMethods();

        usort($class_methods, function($a, $b)
                              {
                                  return $a->name > $b->name;
                              });

        $inherited_methods = array();
        foreach ($class_methods as $method)
        {
            if ($method->class == $class->getName())
                $reference .= self::_get_methods_information($method);
            elseif (!$method->isPrivate()) // we show only usable methods
                $inherited_methods[] = $method;
        }

        if (!empty($inherited_methods))
        {
            $reference .= MD_NEWLINE_SEQUENCE . md::title(3, "Inherited methods:");
            foreach ($inherited_methods as $method)
                $reference .= self::_get_methods_information($method);
        }

        return $reference;
