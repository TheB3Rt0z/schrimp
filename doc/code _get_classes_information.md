**_get_classes_information($classes = null)** (PriS, Len: 32/35 ![(!)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_yellow_ops.png "Method's length could be reduced..") CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
  
        $declared_classes = get_declared_classes();
        asort($declared_classes);
        foreach ($declared_classes as $class)
            if (($class = new ReflectionClass($class)) // name converted to reflection class
                && $class->isUserDefined())
            {
                extract(self::get_class_data($class));

                $classes .= md::to_the_top() . " " . md::title(2, $header)
                          . self::_add_paragraph($class_constants,
                                                 "Class configuration constants:")
                          . self::_add_paragraph($reference,
                                                 "Code reference:")
                          . self::_add_paragraph($dependencies,
                                                 "Dependencies:")
                          . self::_add_paragraph($class_todos,
                                                 "TODOs:")
                          . md::hr();

                self::_add_summary_entry(array(
                    'header' => $header,
                    'label' => (substr_count($class->getName(), "_")
                               ? "-"
                               : "Library") . " " . $class->getName(),
                    'path' => $class_path,
                    'length_warning' => $length_warning,
                    'real_length' => $real_length,
                    'length' => $length,
                    'cis' => $cis,
                    'class_name' => $class->getName(),
                    'todos' => count($class->getStaticPropertyValue('todos')),
                ));
            }

        return $classes . MD_NEWLINE_SEQUENCE;
