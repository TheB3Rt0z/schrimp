**_select($content, $attributes = null, $classes = null)** (ProS, Len: 6/8 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
  
        if (!empty($classes))
            $attributes['class'] = trim($classes);

        $self = new self('select',
                         $attributes,
                         $content);

        return $self->_html;
