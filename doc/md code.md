**code($content)** (PubS, Len: 3/4 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
  
        $self = new self('text', // no formatting required..
                         "```php\n" . $content . "\n```");

        return $self->_md;
