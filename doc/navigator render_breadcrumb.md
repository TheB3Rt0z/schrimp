**render_breadcrumb()** (PubS, Len: 8/10 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
  
        $controller = main::$controller;

        if (!$controller::RENDER_BREADCRUMB)
            return false;

        if ($controller != _SET_HOME_COMPONENT)
        {
            $self = new self;
            $self->_render_breadcrumb($controller);
        }
