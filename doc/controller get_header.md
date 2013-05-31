**get_header()** (Pub, Len: 7/8 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
  
	    ob_start();
    	    if (_SET_ADVANCED_INTERFACE)
    	        navigator::render_active_breadcrumb();
    	    else
    	        navigator::render_breadcrumb(); // nothing shown on home page
	    $breadcrumb = ob_get_clean();

		return $this->_header . ($breadcrumb ? html::box($breadcrumb) : '');
