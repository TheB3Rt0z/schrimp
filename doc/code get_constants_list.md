**get_constants_list()** (PubS, Len: 4/5 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
  
        $constants_list = get_defined_constants(true);
        $user_constants = $constants_list['user'];
        ksort($user_constants);

        return $user_constants;
