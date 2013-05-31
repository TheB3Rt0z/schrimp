**_img($src, $alt, $title = null)** (PriS, Len: 8/11 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
  
        if (!fe($src))
            return $main->launch_error_file_not_found($src);

        $attributes = array('src' => ru($src),
                            'alt' => $alt,
                            'title' => $title);

        $self = new self('img',
                         $attributes);

        return $self->_html;
