<?php

define('MD_NEWLINE_SEQUENCE', "  \n"); // markdown-style new line with br conversion

class md
{
    public static $todos = array();

    private $_tag = null;
    private $_content = '';
    private $_attributes = array();
    private $_formatting = '';

    private $_md = '';

    private $_tags = array
    (
        'h1' => "return MD_NEWLINE_SEQUENCE
                      . str_repeat(\"=\",
                                   strlen(\$this->_content))
                      . str_repeat(MD_NEWLINE_SEQUENCE, 3);",

        'h2' => "return MD_NEWLINE_SEQUENCE
                      . str_repeat(\"-\",
                                   strlen(\$this->_content))
                      . str_repeat(MD_NEWLINE_SEQUENCE, 2);",

        'h3' => "return str_repeat(MD_NEWLINE_SEQUENCE, 2);",

        'hr' => "return MD_NEWLINE_SEQUENCE . '***'
                      . str_repeat(MD_NEWLINE_SEQUENCE, 2);",

        'img' => "return '![' . \$this->_attributes['alt'] . ']('
                       . \$this->_attributes['src']
                       . ' \"' . \$this->_attributes['title'] . '\")';",

        'link' => "return '[' . \$this->_attributes['label'] . ']('
                        . \$this->_attributes['href']
                        . ' \"' . \$this->_attributes['title'] . '\")';",

        'text' => "return MD_NEWLINE_SEQUENCE;",
    );

    function __construct($tag,
                         $content = '',
                         $attributes = array())
    {
        $this->_tag = $tag;

        if ($this->_validate_tag())
        {
            $this->_md = "__CONTENT____FORMATTING__"; // to be checked
            $this->_set_content($content);
            $this->_set_formatting($attributes);
        }
    }

    private function _validate_tag()
    {
        return array_key_exists($this->_tag,
                                $this->_tags);
    }

    private function _set_content($content = '')
    {
        $this->_content = $content;

        $this->_md = str_replace("__CONTENT__",
                                 $this->_content,
                                 $this->_md);
    }

    private function _set_formatting($attributes) // maybe apply_formatting in the future..
    {
        $this->_attributes = $attributes;

        $this->_formatting = eval($this->_tags[$this->_tag]);

        $this->_md = str_replace("__FORMATTING__",
                                 $this->_formatting,
                                 $this->_md);
    }

    private static function _h1($content)
    {
        $self = new self('h1',
                         $content);

        return $self->_md;
    }

    private static function _h2($content)
    {
        $self = new self('h2',
                         $content);

        return $self->_md;
    }

    private static function _h3($content) // not so experimental..
    {
        $self = new self('h3',
                         "**" . strtoupper($content) . "**");

        return $self->_md;
    }

    private static function _img($src,
                                 $alt,
                                 $title = '')
    {
        if (!fe($src))
            return le(tr('error',
                         'required file (%s) not exists',
                         $src));

        $attributes = array
        (
            'src' => SET_GITHUB_RAWPATH . $src,
            'alt' => $alt,
            'title' => $title,
        );

        $self = new self('img',
                         '',
                         $attributes);

        return $self->_md;
    }

    private static function _link($label,
                                  $href,
                                  $title)
    {
        $attributes = array
        (
            'label' => $label,
            'href' => $href,
            'title' => $title,
        );

        $self = new self('link',
                         '',
                         $attributes);

        return $self->_md;
    }

    static function code($content) // direct construct generator
    {
        $self = new self('text', // no formatting required..
                         "```php\n" . $content . "\n```");

        return $self->_md;
    }

    static function hr() // direct constructing without any content
    {
        $self = new self(__FUNCTION__);

        return $self->_md;
    }

    static function hyperlink($label,
                              $href,
                              $title = '')
    {
        return self::_link($label,
                           $href,
                           $title);
    }

    static function to_the_top()
    {
        return self::_link("⇧", "#wiki", 'to the top');
    }

    static function image($src,
                          $alt = '',
                          $title = '')
    {
        return self::_img($src,
                          $alt,
                          $title);
    }

    static function green_ok()
    {
        return self::_img(_SET_INCLUDES_PATH . "img/icon_16x16_green_ok.png",
                          "(&radic;)");
    }

    static function blue_boh($title)
    {
        return self::_img(_SET_INCLUDES_PATH . "img/icon_16x16_blue_boh.png",
                          "(?)",
                          $title);
    }

    static function yellow_ops($title)
    {
        return self::_img(_SET_INCLUDES_PATH . "img/icon_16x16_yellow_ops.png",
                          "(!)",
                          $title);
    }

    static function red_ics($title)
    {
        return self::_img(_SET_INCLUDES_PATH . "img/icon_16x16_red_ics.png",
                          "(X)",
                          $title);
    }

    static function text($content) // direct construct generator
    {
        $self = new self(__FUNCTION__,
                         $content);

        return $self->_md;
    }

    static function title($level,
                          $content) // for empty list-breakes
    {
        if (is_int($level)
                && $level > 0
                && $level <= 3)
        {
            $level = "_h" . $level;
            return self::$level($content);
        }
    }
}

?>
