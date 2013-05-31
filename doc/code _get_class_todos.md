**_get_class_todos(ReflectionClass $class)** (PriS, Len: 5/7 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
  
        $class_todos = '';

        foreach ($class->getStaticPropertyValue('todos') as $key => $value)
            $class_todos .= "- **" . $key . "** &#10140; " . $value
                          . MD_NEWLINE_SEQUENCE;

        return $class_todos;
