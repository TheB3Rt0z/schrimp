**_list_method_parameters($functional_code)** (PriS, Len: 10/12 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
  
        $parameters = array();

        foreach ($functional_code->getParameters() as $parameter) {
            $class = $parameter->getClass();
            $parameters[] = ($class ? $class->getName() . " " : '')
                          . "$" . $parameter->getName()
                          . ($parameter->isOptional()
                            ? " = " . fv($parameter->getDefaultValue())
                            : '');
        }

        return $parameters;
