**render_advanced_list()** (PubS, Len: 5/7 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
  
        $self = new self;

        $code = html::spanner(HTML_ICON_LIST,
                              'marker')
              . html::array_to_list($self->_structure[_SET_HOME_COMPONENT]['sub']);

        return html::divisor($code);
