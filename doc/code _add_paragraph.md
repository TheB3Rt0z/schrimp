**_add_paragraph($data, $title)** (PriS, Len: 5 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
  
        if (!empty($data))
            return md::title(3,
                             $title)
                 . $data
                 . MD_NEWLINE_SEQUENCE;
