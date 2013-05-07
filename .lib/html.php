<?php

define('HTML_BREADCRUMB_SEPARATOR', " &rsaquo; ");
define('HTML_ARROW_LEFT', "&laquo;");
define('HTML_ARROW_RIGHT', "&raquo;");
define('HTML_ICON_NAVIGATION', "&#9784;");
define('HTML_ICON_LIST', "&#9992;");

class html
{
    public static $todos = array
    (
        'script online loading' => "if != local, should have a lfb..",
        'classes as string' => "check class for \$classes = '', should be array",
        'ordered_list' => "fix numbers, falsed as visible in error 404",
    );

    private $_tag = null;
    private $_attributes = array();
    private $_content = '';

    private $_html = '';

    private $_tags = array // this could carry extra information about tag..
    (
        'single' => array
        (
            'br',
            'img',
            'link',
        ),
        'container' => array
        (
            'a',
            'div',
            'h1',
            'h2',
            'h3',
            'h4',
            'h5',
            'h6',
            'h7', // experimental
            'li',
            'ol',
            'option',
            'p',
            'pre',
            'script',
            'select',
            'span',
            'ul',
        )
    );

    private static $_linked_files = array();

    private static $_loaded_scripts = array();

    function __construct($tag,
                         $attributes = array(),
                         $content = '')
    {
        $this->_tag = $tag;

        if ($this->_validate_tag())
        {
            $this->_html .= "<" . $this->_tag . "__ATTRIBUTES__";
            if ($this->_is_single())
                $this->_html .= " /";
            else
            {
                $this->_html .= ">";
                if ($this->_is_container())
                    $this->_html .= "__CONTENT__";
                $this->_html .= "</" . $this->_tag;
            }
            $this->_html .= ">";

            $this->_set_attributes($attributes);

            if ($this->_is_container($this->_tag))
                $this->_set_content($content);
        }
    }

    private function _is_single()
    {
        return in_array($this->_tag,
                        $this->_tags['single']);
    }

    private function _is_container()
    {
        return in_array($this->_tag,
                        $this->_tags['container']);
    }

    private function _validate_tag()
    {
        return ($this->_is_single() || $this->_is_container());
    }

    private function _set_attributes($attributes)
    {
        $this->_attributes = $attributes;

        $attributes = '';

        foreach ($this->_attributes as $key => $value)
        {
            $attributes .= " " . trim(strtolower($key)) . "=\"";

            if (is_array($value))
                $attributes .= implode(" ",
                                       $value);
            else
                $attributes .= $value;

            $attributes .= "\"";
        }

        $this->_html = str_replace("__ATTRIBUTES__",
                                   $attributes,
                                   $this->_html);
    }

    private function _set_content($content = '')
    {
        $this->_content = $content;

        $this->_html = str_replace("__CONTENT__",
                                   $this->_content,
                                   $this->_html);
    }

    private static function _a($href,
                               $content)
    {
        if (!strpos($href, "://"))
            $href = ru($href);

        $attributes = array('href' => $href);

        $self = new self('a',
                         $attributes,
                         $content);

        return $self->_html;
    }

    private static function _br($lines = 1,
                                $classes = array())
    {
        $attributes = array();
        if (!empty($classes))
            $attributes['class'] = trim($classes);

        $self = new self('br',
                         $attributes);

        return str_repeat($self->_html,
                          $lines);
    }

    private static function _div($content,
                                 $classes = array(),
                                 $id = null)
    {
        $attributes = array();
        if (!empty($classes))
            $attributes['class'] = implode($classes, ' ');
        if (!empty($id))
            $attributes['id'] = trim($id);

        $self = new self('div',
                         $attributes,
                         $content);

        return $self->_html;
    }

    private static function _h1($content)
    {
        $self = new self('h1',
                         array(),
                         $content);

        return $self->_html;
    }

    private static function _h2($content)
    {
        $self = new self('h2',
                         array(),
                         $content);

        return $self->_html;
    }

    private static function _h3($content)
    {
        $self = new self('h3',
                         array(),
                         $content);

        return $self->_html;
    }

    private static function _h4($content)
    {
        $self = new self('h4',
                         array(),
                         $content);

        return $self->_html;
    }

    private static function _h5($content)
    {
        $self = new self('h5',
                         array(),
                         $content);

        return $self->_html;
    }

    private static function _h6($content)
    {
        $self = new self('h6',
                         array(),
                         $content);

        return $self->_html;
    }

    private static function _h7($content)
    {
        $self = new self('h7',
                         array(),
                         $content);

        return $self->_html;
    }

    private static function _img($src,
                                 $alt,
                                 $title = '')
    {
        if (!fe($src))
            return $main->launch_error_file_not_found($src);

        $attributes = array('src' => ru($src),
                            'alt' => $alt,
                            'title' => $title);

        $self = new self('img',
                         $attributes);

        return $self->_html;
    }

    private static function _li($content,
                                $classes = '')
    {
        $attributes = array();
        if (!empty($classes))
            $attributes['class'] = trim($classes);

        $self = new self('li',
                         $attributes,
                         $content);

        return $self->_html;
    }

    private static function _link($href,
                                  $rel,
                                  $type)
    {
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
    }

    private static function _ol($content,
                                $classes = '')
    {
        $attributes = array();
        if (!empty($classes))
            $attributes['class'] = trim($classes);

        $self = new self('ol',
                         $attributes,
                         $content);

        return $self->_html;
    }

    protected static function _option($value,
                                      $name,
                                      $selected = false)
    {
        $attributes = array
        (
            'value' => trim($value),
        );

        if ($selected)
        {
            $attributes['selected'] = 'selected';
            $attributes['disabled'] = 'disabled'; // to be continued..
        }

        $self = new self('option',
                         $attributes,
                         $name);

        return $self->_html;
    }

    private static function _p($content)
    {
        $self = new self('p',
                         array(),
                         $content);

        return $self->_html;
    }

    private static function _pre($content)
    {
        $self = new self('pre',
                         array(),
                         $content);

        return $self->_html;
    }

    private static function _script($type,
                                    $src = null,
                                    $content = '')
    {
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
    }

    protected static function _select($content,
                                      $attributes = array(),
                                      $classes = '')
    {
        if (!empty($classes))
            $attributes['class'] = trim($classes);

        $self = new self('select',
                         $attributes,
                         $content);

        return $self->_html;
    }

    private static function _span($content,
                                  $attributes = array(),
                                  $classes = array())
    {
        if (!empty($classes))
            $attributes['class'] = implode($classes, " ");

        $self = new self('span',
                         $attributes,
                         $content);

        return $self->_html;
    }

    private static function _ul($content,
                                $classes = '')
    {
        $attributes = array();
        if (!empty($classes))
            $attributes['class'] = trim($classes);

        $self = new self('ul',
                         $attributes,
                         $content);

        return $self->_html;
    }

    static function add_favicon($href)
    {
        echo self::_link($href,
                         "icon",
                         "image/x-icon");

        echo self::_link($href,
                         "shortcut icon",
                         "image/x-icon");
    }

    static function add_stylesheet($href)
    {
        echo self::_link($href,
                         "stylesheet",
                         "text/css");
    }

    static function add_js_file($src)
    {
        echo self::_script("text/javascript",
                           $src);
    }

    static function add_js_script($content)
    {
        echo self::_script("text/javascript",
                           null,
                           $content);
    }

    static function array_to_list($tree,
                                  $type = 'ul')
    {
        $content = '';

        foreach ($tree as $key => $value)
        {
            $content .= self::_li(self::_a($key,
                                           $value['name']));
            if (!empty($value['sub']))
                $content .= self::_li(self::array_to_list($value['sub'],
                                                          $type));
        }

        $type = '_' . $type;

        return self::$type($content);
    }

    static function divisor($content,
                            $classes = array(),
                            $id = null)
    {
        return self::_div($content,
                          $classes,
                          $id);
    }

    static function box($content)
    {
        return self::_div($content,
                          array('box'));
    }

    static function highbox($content)
    {
        return self::_div($content,
                          array('box', 'high'));
    }

    static function hyperlink($href,
                              $content = null)
    {
        return self::_a($href,
                        (!$content
                        ? $href
                        : $content));
    }

    static function image($src,
                          $alt,
                          $title = '')
    {
        return self::_img($src,
                          $alt,
                          $title);
    }

    static function newline()
    {
        return self::_br();
    }

    static function clearfix()
    {
        return self::_br(1,
                         'clearfix');
    }

    static function text($content)
    {
        return self::_p($content);
    }

    static function spanner($content,
                            $classes = '')
    {
        return self::_span($content,
                           array(),
                           explode(" ", $classes));
    }

    static function preform($content)
    {
        return self::_pre(var_export($content,
                                     true));
    }

    static function title($level,
                          $content)
    {
        if (is_int($level)
            && $level > 0
            && $level <= 7)
        {
            $level = "_h" . $level;
            return self::$level($content);
        }
    }
}

?>
