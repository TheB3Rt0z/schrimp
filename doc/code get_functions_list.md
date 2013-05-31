**get_functions_list()** (PubS, Len: 4/5 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
  
        $functions_list = get_defined_functions();
        $user_functions = $functions_list['user'];
        sort($user_functions);

        return $user_functions;
