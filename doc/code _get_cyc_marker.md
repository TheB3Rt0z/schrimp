**_get_cyc_marker($cyc)** (PriS, Len: 6 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
  
        if ($cyc <= (floor(MAX_CYCLOMATIC_COMPLEXITY / 10) * 10))
            return md::green_ok();
        elseif ($cyc <= MAX_CYCLOMATIC_COMPLEXITY)
            return md::yellow_ops(self::_STR_CYC_WARNING);
        else
            return md::red_ics(self::_STR_CYC_ERROR);
