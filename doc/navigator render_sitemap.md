**render_sitemap()** (PubS, Len: 3/5 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
  
        $self = new self; // populating structure array if still null (singleton)

        $sub_structure = $self->_structure[_SET_HOME_COMPONENT]['sub'];

        return html::array_to_list($sub_structure, 'ol');
