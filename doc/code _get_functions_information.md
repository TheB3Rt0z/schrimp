**_get_functions_information()** (PriS, Len: 26/31 ![(!)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_yellow_ops.png "Method's length could be reduced..") CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
  
        $functions = '';

        $user_functions = self::get_functions_list();
        foreach ($user_functions as $function)
        {
            $function = new ReflectionFunction($function);

            /*$parameters = array();
            foreach ($function->getParameters() as $parameter)
                $parameters[] = "$" . $parameter->getName()
                              . ($parameter->isOptional()
                                ? " = " . fv($parameter->getDefaultValue())
                                : '');*/

            $parameters = self::_list_method_parameters($function);

            $functions .= "- **" . $function->getName() . "("
                        . implode($parameters, ", ") . ")** &#10140; "
                        . str_replace(realpath('') . "/",
                                      '',
                                      $function->getFileName())
                        . " on line " . $function->getStartLine()
                        . ($function->getDocComment()
                          ? "," . trim(str_replace(array("*", "/"),
                                                   '',
                                                   $function->getDocComment()),
                                       " ")
                          : '') . MD_NEWLINE_SEQUENCE;
        }

        return $functions . MD_NEWLINE_SEQUENCE;
