**array_to_list($tree, $type = "ul")** (PubS, Len: 11/14 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
  
        $content = '';

        foreach ($tree as $key => $value)
        {
            $content .= self::_li(self::_a($key,
                                           $value['name']));
            if (!empty($value['sub']))
                $content .= self::_li(self::array_to_list($value['sub'],
                                                          $type));
        }

        $type = '_' . $type;

        return self::$type($content);
