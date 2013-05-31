**_get_component_information($name)** (PriS, Len: 25/29 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
  
        $class = new ReflectionClass($name);

        extract(self::get_class_data($class));

        $component = md::to_the_top() . " " . md::title(2, $header)
                   . self::_add_paragraph($class_constants,
                                          "Class configuration constants:")
                   . self::_add_paragraph($reference,
                                          "Code reference:")
                   . self::_add_paragraph($dependencies,
                                          "Dependencies:")
                   . self::_add_paragraph($class_todos,
                                          "TODOs:");

        self::_add_summary_entry(array(
            'header' => $header,
            'label' => (substr_count($name, "_")
                       ? "-"
                       : "Component") . " " . $name,
            'path' => $class_path,
            'length_warning' => $length_warning,
            'real_length' => $real_length,
            'length' => $length,
            'cis' => $cis,
            'class_name' => $name,
            'todos' => count($class->getStaticPropertyValue('todos')),
        ));

        return $component;
