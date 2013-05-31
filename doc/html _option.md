**_option($value, $name, $selected = false)** (ProS, Len: 13/16 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
  
        $attributes = array
        (
            'value' => trim($value),
        );

        if ($selected)
        {
            $attributes['selected'] = 'selected';
            $attributes['disabled'] = 'disabled'; // to be continued..
        }

        $self = new self('option',
                         $attributes,
                         $name);

        return $self->_html;
