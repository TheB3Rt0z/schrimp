**get_documentation_title()** (PubS, Len: 4/5 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
  
        $title = md::image(_SET_INCLUDES_PATH . "img/schrimp_favicon_md.ico")
               . " " . _STR_PROJECT_NAME . "'s Documentation "
               . main::get_version(1) . "." . date('Y.m.d');

        return md::title(2, $title);
