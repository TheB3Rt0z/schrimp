**_link($href, $rel, $type)** (PriS, Len: 16/20 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
  
        $placeholder = $rel . '_' . $href;

        if (!fe($href))
            return $main->launch_error_file_not_found($href);
        elseif (!empty($href)
            && !in_array($placeholder, self::$_linked_files))
        {
            $attributes = array('href' => ru($href),
                                'rel' => $rel,
                                'type' => $type);

            $self = new self('link',
                             $attributes);

            self::$_linked_files[] = $placeholder;
        }
        else
            return false; // MAYBE this link was already loaded, to be continued..

        return $self->_html;
