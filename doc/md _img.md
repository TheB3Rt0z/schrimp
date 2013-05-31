**_img($src, $alt, $title = null)** (PriS, Len: 14/17 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
  
        if (!fe($src))
            return le(tr('error',
                         'required file (%s) not exists',
                         $src));

        $attributes = array
        (
            'src' => SET_GITHUB_RAWPATH . $src,
            'alt' => $alt,
            'title' => $title,
        );

        $self = new self('img',
                         '',
                         $attributes);

        return $self->_md;
