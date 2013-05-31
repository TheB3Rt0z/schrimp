**_get_methods_information(ReflectionMethod $method)** (PriS ![(?)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_blue_boh.png "1 too long line(s) found!") Len: 34/37 ![(X)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_red_ics.png "Method's length should be reduced!") CyC: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
  
        extract(self::analyse_method($method)); // generates required variables

        $infos = "(" . ($parameters_warning >= 0
                       ? md::blue_boh("too many parameters used! (+"
                                   . ($parameters_warning + 1) . ")") . " "
                       : '')
               . implode($parameters, ", ") . ")** ("
               . self::get_method_status($method)
               . (!empty($length_warning)
                 ? " " . md::blue_boh($length_warning . " too long line(s) found!")
                 : ",")
               . " Len: " . ($length > 0
                            ? (($real_length != $length)
                              ? $real_length . "/"
                              : '') . $length
                            : '-') . " "
               . ($length <= (floor(MAX_METHODS_COMPLEXITY / 10) * 10)
                 ? ($length > 0
                   ? md::green_ok()
                   : '')
                 : ($length <= MAX_METHODS_COMPLEXITY
                   ? md::yellow_ops(self::_STR_LENGTH_WARNING)
                   : md::red_ics(self::_STR_LENGTH_ERROR)))
               . ($cyc > 0
                 ? " CyC: " . $cyc . " " . self::_get_cyc_marker($cyc)
                 : '')
               . ")" . MD_NEWLINE_SEQUENCE;

        if (_SET_DEVELOPMENT_MODE)
            file_put_contents("doc/" . $method->class . " " . $method->name . ".md",
                              "**" . $method->getName() . $infos
                            . MD_NEWLINE_SEQUENCE . implode($code));

        return "- **" . md::hyperlink($method->getName(),
                                      SET_GITHUB_WIKIPATH
                                    . $method->class . "-"
                                    . $method->getName()) . $infos;
