**_div($content, $classes = null, $id = null)** (PriS, Len: 9/11 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
  
        $attributes = array();
        if (!empty($classes))
            $attributes['class'] = implode($classes, ' ');
        if (!empty($id))
            $attributes['id'] = trim($id);

        $self = new self('div',
                         $attributes,
                         $content);

        return $self->_html;
