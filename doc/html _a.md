**_a($href, $content)** (PriS, Len: 7/10 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
  
        if (!strpos($href, "://"))
            $href = ru($href);

        $attributes = array('href' => $href);

        $self = new self('a',
                         $attributes,
                         $content);

        return $self->_html;
