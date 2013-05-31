**_li($content, $classes = null)** (PriS, Len: 7/9 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
  
        $attributes = array();
        if (!empty($classes))
            $attributes['class'] = trim($classes);

        $self = new self('li',
                         $attributes,
                         $content);

        return $self->_html;
