**get_method_code(ReflectionMethod $method, $highlighting = false)** (PubS, Len: 22/25 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
  
        $parameters = self::_list_method_parameters($method);
        $parameters_warning = count($parameters)
                            - MAX_PARAMETERS_COMPLEXITY;

        $real_length =
             $length = $method->getEndLine() - $method->getStartLine()
                     - ((count($parameters) > 1)
                       ? count($parameters) - 1
                       : 0) - ($method->isAbstract() ? 0 : 2); // modifier

        $code = array_slice(file($method->getFileName()),
                            $method->getEndLine() - $length - 1,
                            $length);

        if ($highlighting)
            return toolbox::highlight("<?php\n" . implode($code) . "\n?>");
        else
            return array
            (
                'parameters' => $parameters,
                'parameters_warning' => $parameters_warning,
                'real_length' => $real_length,
                'length' => $length,
                'code' => $code,
            );
