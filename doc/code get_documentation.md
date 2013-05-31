**get_documentation()** (PubS, Len: 15/16 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
  
        $documentation = md::title(2, "General reference")
                       . self::_add_paragraph(self::_get_constants_information(),
                                              "Global configuration constants:")
                       . self::_add_paragraph(self::_get_functions_information(),
                                              "Function aliases:")
                       . self::_add_paragraph(self::_get_todos_information(),
                                              "TODOs:")
                       . md::hr()
                       . self::_get_classes_information()
                       . self::_get_components_information() // adding more information?
                     . str_repeat(MD_NEWLINE_SEQUENCE, 4)
                     . md::text(_STR_COPYRIGHT_SIGNATURE);

        return self::get_documentation_title()
             . self::_get_summary_information()
             . $documentation;
