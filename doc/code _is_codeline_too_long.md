**_is_codeline_too_long($code_line)** (PriS, Len: 4/5 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
  
        $code_line = explode(" // ", $code_line); // avoid calculating comments

        return strlen(str_replace("\t", // avoid undesired tabs
                                  '    ', // 1 tab = 4 spaces
                                  $code_line[0])) > MAX_BLOCK_COMPLEXITY;
