**get_component_translations_array($component)** (PubS, Len: 17/20 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
  
	    $translations_publicpath = _SET_APPLICATION_PUBLICPATH
	                             . $component
	                             . SET_TRANSLATIONS_EXTENSION;

	    $translations_path = _SET_APPLICATION_PATH
	                       . $component
	                       . SET_TRANSLATIONS_EXTENSION;

	    $placeholder = array('');

	    if (fe($translations_publicpath))
	        return array_map('trim',
	                         array_merge((array)file($translations_publicpath),
	                                     $placeholder));
	    elseif (fe($translations_path))
	        return array_map('trim',
	                         array_merge((array)file($translations_path),
	                                     $placeholder));
	    else
	        return $placeholder; // no translations file found for this component!
