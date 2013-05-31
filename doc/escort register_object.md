**register_object($object, $identifier)** (PubS, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
  
        self::$_register[get_class($object)][$identifier][] = serialize($object);
