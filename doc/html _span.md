**_span($content, $attributes = null, $classes = null)** (PriS, Len: 6/8 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
  
        if (!empty($classes))
            $attributes['class'] = implode($classes, " ");

        $self = new self('span',
                         $attributes,
                         $content);

        return $self->_html;
