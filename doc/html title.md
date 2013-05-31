**title($level, $content)** (PubS, Len: 7 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
  
        if (is_int($level)
            && $level > 0
            && $level <= 7)
        {
            $level = "_h" . $level;
            return self::$level($content);
        }
