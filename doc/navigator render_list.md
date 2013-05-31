**render_list()** (PubS, Len: 4/6 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
  
        if (_SET_ADVANCED_INTERFACE)
		    return self::render_advanced_list();

        $self = new self;

        return html::array_to_list($self->_structure[_SET_HOME_COMPONENT]['sub']);
