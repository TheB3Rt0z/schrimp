**_get_class_markers($class_name)** (PriS, Len: 17/22 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 4 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
  
        $output = '';

        if (!empty(self::$_class_warnings[$class_name]['blue'])
            || !empty(self::$_class_warnings[$class_name]['yellow'])
            || !empty(self::$_class_warnings[$class_name]['red']))
        {
            $output .= "&#10140; ";
        }

        if (!empty(self::$_class_warnings[$class_name]['blue']))
            $output .= " " . self::$_class_warnings[$class_name]['blue'] . " "
                     . md::blue_boh(self::_STR_SUMMARY_BLUE);

        if (!empty(self::$_class_warnings[$class_name]['yellow']))
            $output .= " " . self::$_class_warnings[$class_name]['yellow'] . " "
                     . md::yellow_ops(self::_STR_SUMMARY_YELLOW);

        if (!empty(self::$_class_warnings[$class_name]['red']))
            $output .= " " . self::$_class_warnings[$class_name]['red'] . " "
                     . md::red_ics(self::_STR_SUMMARY_RED);

        return $output;
