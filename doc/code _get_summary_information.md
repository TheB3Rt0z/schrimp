**_get_summary_information()** (PriS, Len: 29/31 ![(!)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_yellow_ops.png "Method's length could be reduced..") CyC: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
  
        $summary = md::title(2, "Table of contents")
                   . md::hyperlink("General reference",
                                   '#general-reference--')
                   . MD_NEWLINE_SEQUENCE;

        foreach (self::$_summary as $key => $values)
            $summary .= md::hyperlink($values['label'],
                                      $key)
                      . (!empty($values['todos'])
                        ? " " . str_repeat("&#10029;",
                                           $values['todos']) . " "
                        : '')
                      . " (" . $values['path']
                      . (!empty($values['length_warning'])
                        ? " " . md::blue_boh($values['length_warning']
                        . " too long line(s) found!")
                        : ",")
                      . " Len: "
                      . $values['real_length'] . "/" . $values['length']
                      . ", CIS: " . $values['cis'] . " "
                      . ($values['cis'] <= floor(MAX_METHODS_COMPLEXITY / 10) * 10
                        ? ($values['cis'] > 0
                          ? md::green_ok()
                          : '')
                        : ($values['cis'] <= MAX_METHODS_COMPLEXITY
                          ? md::yellow_ops(self::_STR_CIS_WARNING)
                          : md::red_ics(self::_STR_CIS_ERROR))) . ") "
                      . self::_get_class_markers($values['class_name'])
                      . MD_NEWLINE_SEQUENCE;

        return $summary . MD_NEWLINE_SEQUENCE;
