**_add_summary_entry($data)** (PriS, Len: 22/23 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
  
        $href = strtolower(str_replace(" ",
                                       "-",
                                       str_replace(array(
                                                       "(",
                                                       ",",
                                                       ":",
                                                       "+",
                                                       ")",
                                                       "@"),
                                                   '',
                                                   $data['header'])));

        self::$_summary["#-" . $href . "--"] = array
        (
            'label' => $data['label'],
            'path' => $data['path'],
            'length_warning' => $data['length_warning'],
            'real_length' => $data['real_length'],
            'length' => $data['length'],
            'cis' => $data['cis'],
            'class_name' => $data['class_name'],
            'todos' => $data['todos'],
        );
