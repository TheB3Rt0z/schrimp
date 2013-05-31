**analyse_method(ReflectionMethod $method)** (PubS, Len: 23/29 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 4 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
  
        extract(self::get_method_code($method));

        $data['parameters'] = $parameters;
        $data['parameters_warning'] = $parameters_warning;
        $data['real_length'] = $real_length;
        $data['length'] = $length;
        $data['code'] = $code;

        $data['length_warning'] = 0;
        $data['cyc'] = 0;
        foreach ($data['code'] as $code_line)
        {
            if (self::_is_codeline_too_long($code_line))
                $data['length_warning']++;

            $code_line = trim($code_line);
            if (empty($code_line))
                $data['real_length']--;

            foreach (self::$_cyc_counters as $counter)
                $data['cyc'] += substr_count($code_line, $counter);
        }

        self::_update_class_warnings($method->getDeclaringClass()->getName(),
                                     $data['parameters'],
                                     $data['length'],
                                     $data['cyc']);

        return $data;
