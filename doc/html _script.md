**_script($type, $src = null, $content = null)** (PriS, Len: 23/28 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 4 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
  
        $attributes['type'] = $type;

        if (!empty($src)
            && !in_array($src, self::$_loaded_scripts))
        {
            if (!fe($src) && !parse_url($src))
                return $main->launch_error_file_not_found($src);

            $attributes['src'] = $src;
            $self = new self('script',
                             $attributes);

            self::$_loaded_scripts[] = $type . '_' . $src;
        }
        elseif (!empty($content)
            && !in_array($content, self::$_loaded_scripts))
        {
            $attributes['charset'] = "utf-8"; // should be constant?
            $self = new self('script',
                             $attributes,
                             $content);

            self::$_loaded_scripts[] = $content;
        }
        else
            return false; // this script SEEMS to be already loaded

        return $self->_html;
