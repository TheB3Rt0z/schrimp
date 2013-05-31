**_link($label, $href, $title)** (PriS, Len: 10/12 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
  
        $attributes = array
        (
            'label' => $label,
            'href' => $href,
            'title' => $title,
        );

        $self = new self('link',
                         '',
                         $attributes);

        return $self->_md;
