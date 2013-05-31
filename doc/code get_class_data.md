**get_class_data(ReflectionClass $class)** (PubS, Len: 34/44 ![(X)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_red_ics.png "Method's length should be reduced!") CyC: 7 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
  
        $data['header'] = "Class " . strtoupper($class->name)
                        . " (" . date(CODE_DATE_FORMAT,
                                      filemtime($class->getFileName())) . ")";

        $data['class_constants'] = self::_get_class_constants($class);
        $data['reference'] = self::_get_class_reference($class);
        $data['dependencies'] = self::get_class_dependencies($class);
        $data['class_todos'] = self::_get_class_todos($class);

        $data['class_path'] = "root" . str_replace(realpath(null),
                                                   '',
                                                   $class->getFileName());

        $data['real_length'] =
             $data['length'] = $class->getEndLine() - $class->getStartLine() - 2;

        $data['code'] = array_slice(file($class->getFileName()),
                                    $class->getStartLine() + 1, // indentation + parentheses
                                    $data['length']);

        $data['length_warning'] = 0;
        foreach ($data['code'] as $code_line)
        {
             if (self::_is_codeline_too_long($code_line))
                $data['length_warning']++;

            $code_line = trim($code_line);
            if (empty($code_line))
                $data['real_length']--;
        }

        $class_properties = $class->getProperties(ReflectionProperty::IS_PUBLIC);
        foreach ($class_properties as $key => $property)
            if ($property->class != $class->name)
                unset($class_properties[$key]);

        $class_methods = $class->getMethods(ReflectionMethod::IS_PUBLIC);
        foreach ($class_methods as $key => $method)
            if ($method->class != $class->name)
                unset($class_methods[$key]);

        $data['cis'] = count($class_properties) + count($class_methods);

        return $data;
