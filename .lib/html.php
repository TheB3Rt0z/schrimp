<?php

define('HTML_BREADCRUMB_SEPARATOR', " &rsaquo; ");
define('HTML_ARROW_LEFT', "&laquo;");
define('HTML_ARROW_RIGHT', "&raquo;");
define('HTML_ICON_NAVIGATION', "&#9784;");
define('HTML_ICON_LIST', "&#9992;");

class html
{
    static $todos = array
    (
        'script online loading' => "if != local, should have a lfb..",
        'ordered_list' => "fix numbers, falsed as visible in error 404",
        'over-components links' => "maybe automatic no-follow attribute (siloing)",
        'custom class prefixes' => "should be generated from keywords (!) ..csss?",
        'valid attributes' => "check classes string, register id like scripts/css",
        'id, lang and xml:lang validity' => "check again lists and/or guidelines",
    );

    static $tests = array();

    private $_tag = null;
    private $_type = null;
    private $_attributes = array();
    private $_content = '';

    private $_html = '';

    private $_tags = array // this could carry extra information about tag..
    (
        'single' => array
        (
            'area' => array
            (
                'rel' => array // index? first? last? up? sidebar? archives? pingback?
                (
                    'alternate', // links to an alternate version of the document (i.e. print page, translated or mirror)
                    //'appendix', // refers to a document serving as an appendix in a collection of documents
                    'author', // links to the author of the document
                    'bookmark', // permanent URL used for bookmarking
                    'chapter', // links to parent chapter of this document
                    //'contents', // refers to a document serving as a table of contents. Some user agents also support the synonym ToC (from "Table of Contents")
                    'copyright', // copyright information for linked document
                    //'glossary', // refers to a document providing a list of terms and their definitions that pertain to the current document
                    'help', // links to a help document
                    'license', // links to copyright information for the document
                    'next', // the next document in a selection
                    'nofollow', // links to an unendorsed document, like a paid link (used by Google, to specify that the Google search spider should not follow that link)
                    'noreferrer', // specifies that the browser should not send a HTTP referer header if the user follows the hyperlink
                    'prefetch', // specifies that the target document should be cached
                    'prev', // the previous document in a selection
                    'search', // links to a search tool for the document
                    //'section', // refers to a document serving as a section in a collection of documents
                    //'start', // refers to the first document in a collection of documents
                    //'subsection', // refers to a document serving as a subsection in a collection of documents
                    'tag', // a tag (keyword) for the current document
                ),
            ),
            'br' => array(),
            'img' => array
            (
                'alt' => true,
                'src' => true,
            ),
            'link' => array
            (
                'href' => true,
                'hreflang' => true, // language code ISO 639-1, see http://www.w3schools.com/tags/ref_language_codes.asp
                'media' => true, // specifies on what device the linked document will be displayed, see http://www.w3schools.com/tags/att_link_media.asp
                'rel' => array
                (
                    'alternate', // links to an alternate version of the document (i.e. print page, translated or mirror)
                    //'archives',
                    //'appendix', // refers to a document serving as an appendix in a collection of documents
                    'author', // links to the author of the document
                    'chapter', // links to parent chapter of this document
                    //'contents', // refers to a document serving as a table of contents. Some user agents also support the synonym ToC (from "Table of Contents")
                    'copyright', // copyright information for linked document
                    //'external',
                    //'first',
                    //'glossary', // refers to a document providing a list of terms and their definitions that pertain to the current document
                    'help', // links to a help document
                    'icon', // favicon for document
                        'shortcut icon', // for historical reasons, to be deleted in the future..?
                    //'last',
                    'license', // links to copyright information for the document
                    'next', // the next document in a selection
                    //'nofollow', 'noreferrer', apparently not allowed..
                    //'pingback',
                    'prefetch', // specifies that the target document should be cached
                    'prev', // the previous document in a selection
                    'search', // links to a search tool for the document
                    //'section', // refers to a document serving as a section in a collection of documents
                    //'sidebar',
                    //'start', // refers to the first document in a collection of documents
                    'stylesheet', // style sheet file for document
                    //'subsection', // refers to a document serving as a subsection in a collection of documents
                    'tag', // a tag (keyword) for the current document
                    //'up',
                ),
                'sizes' => true, // HeightxWidth|any, specifies the size of the linked resource (nly for rel="icon")
                'type' => array // for reference: http://www.iana.org/assignments/media-types
                (
                    'image/x-icon',
                    'text/css',
                ),
            ),
            'meta' => array
            (
                'charset' => 'UTF-8', // ..or see http://www.iana.org/assignments/character-sets/character-sets.xhtml
                'content' => true,
                'http-equiv' => array
                (
                    'content-type', // specifies the character encoding for the document
                    'default-style', // specified the preferred style sheet to use (note: The value of the content attribute above must match the value of the title attribute on a link element in the same document, or it must match the value of the title attribute on a style element in the same document)
                    'refresh', // defines a time interval for the document to refresh itself (discouraged as of W3C's content accessibility guidelnes)
                ),
                'name' => array
                (
                    'application-name',
                    'author',
                    'copyright',
                    'description',
                    'generator',
                    'keywords',
                    'robots',
                    'viewport',
                ),
            ),
        ),
        'container' => array
        (
            'a' => array
            (
                'href' => true,
                'rel' => array
                (
                    'alternate', // links to an alternate version of the document (i.e. print page, translated or mirror)
                    //'appendix', // refers to a document serving as an appendix in a collection of documents
                    'author', // links to the author of the document
                    'bookmark', // permanent URL used for bookmarking
                    'chapter', // links to parent chapter of this document
                    //'contents', // refers to a document serving as a table of contents. Some user agents also support the synonym ToC (from "Table of Contents")
                    'copyright', // copyright information for linked document
                    //'glossary', // refers to a document providing a list of terms and their definitions that pertain to the current document
                    'help', // links to a help document
                    'license', // links to copyright information for the document
                    'next', // the next document in a selection
                    'nofollow', // links to an unendorsed document, like a paid link (used by Google, to specify that the Google search spider should not follow that link)
                    'noreferrer', // specifies that the browser should not send a HTTP referer header if the user follows the hyperlink
                    'prefetch', // specifies that the target document should be cached
                    'prev', // the previous document in a selection
                    'search', // links to a search tool for the document
                    //'section', // refers to a document serving as a section in a collection of documents
                    //'start', // refers to the first document in a collection of documents
                    //'subsection', // refers to a document serving as a subsection in a collection of documents
                    'tag', // a tag (keyword) for the current document
                ),
            ),
            'code' => array(),
            'div' => array(),
            'h1' => array(),
            'h2' => array(),
            'h3' => array(),
            'h4' => array(),
            'h5' => array(),
            'h6' => array(),
            'h7' => array(), // experimental..
            'li' => array(),
            'map' => array(),
            'ol' => array(),
            'option' => array
            (
                'disabled' => 'disabled',
                'selected' => 'selected',
                'value' => true,
            ),
            'p' => array(),
            'pre' => array(),
            'script' => array
            (
                'src' => true,
                'type' => array // for reference: http://www.iana.org/assignments/media-types
                (
                    'text/javascript', // this is default if no value specified
                ),
            ),
            'select' => array
            (
                'onchange' => true,
            ),
            'span' => array(),
            'ul' => array(),
        )
    );

    private $_core_attributes = array
    (
        'accesskey' => true, // specifies a shortcut key to activate/focus an element, ATM not compatible with opera
        'class' => true, // free text, not under control
        'dir' => array // should be set automatic (trough class language?)
        (
            'ltr', // default, left-to-right text direction
            'rtl', // right-to-left text direction
            'auto', // let the browser figure out the text direction, based on the content (only recommended if the text direction is unknown)
        ),
        'id' => true, // text identifier, the attribute's value must begin with a letter in the range A-Z or a-z and may be followed by letters (A-Za-z), digits (0-9), hyphens ("-"), underscores ("_"), colons (":"), and periods ("."); the value is case-sensitive
        'lang' => true, // should be set automatic (trough class language?)
        'onclick' => true, // the JavaScript of the value is executed when a pointing-device is used to 'click' on the element.
        'ondblclick' => true, // the JavaScript of the value is executed when a pointing-device is used to 'double-click' on the element.
        'onkeydown' => true, // the JavaScript of the value is executed when an element is in focus and a key on the keyboard is pressed down.
        'onkeypress' => true, // the JavaScript of the value is executed when an element is in focus and a key on the keyboard is pressed down and released.
        'onkeyup' => true, // the JavaScript of the value is executed when an element is in focus and a key on the keyboard is released.
        'onmousedown' => true, // the JavaScript of the value is executed when the button on a pointing-device is pressed down while the cursor is over the element.
        'onmousemove' => true, // the JavaScript of the value is executed when the cursor is moved over an element.
        'onmouseover' => true, // the JavaScript of the value is executed when the cursor is moved onto an element.
        'onmouseout' => true, // the JavaScript of the value is executed when the cursor is moved off an element.
        'onmouseup' => true, // the JavaScript of the value is executed when the button on a pointing-device is released while the cursor is over the element.
        // not really valid in schrimpisch.. 'style',
        'tabindex' => true, // specifies the tabbing order of an element
        'title' => true, // WARNING, not really fully compatible..
        'xml:lang' => true, // should be set automatic (trough class language?)
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
            if ($this->_type == 'single')
                $this->_html .= " /";
            else
            {
                $this->_html .= ">";
                if ($this->_type == 'container')
                    $this->_html .= "__CONTENT__";
                $this->_html .= "</" . $this->_tag;
            }
            $this->_html .= ">";

            $this->_set_attributes($attributes);

            if ($this->_type == 'container')
                $this->_set_content($content);
        }

        escort::register_object($this,
                                $this->_tag);
    }

    private function _is_tag_single()
    {
        if ($response = array_key_exists($this->_tag,
                                         $this->_tags['single']))
            $this->_type = 'single';

        return $response;
    }

    private function _is_tag_container()
    {
        if ($response = array_key_exists($this->_tag,
                                         $this->_tags['container']))
            $this->_type = 'container';

        return $response;
    }

    private function _is_attribute_valid($attribute,
                                         $value)
    {
        $valid_attributes = array_merge($this->_core_attributes,
                                        $this->_tags[$this->_type][$this->_tag]);

        if (!empty($valid_attributes[$attribute]))
        {
            $tag_attributes = $valid_attributes[$attribute];

            if (is_array($tag_attributes))
                return in_array($value,
                                $tag_attributes);
            elseif (is_string($tag_attributes))
                return ($value == $tag_attributes);
            else
                return true;
        }
        else
            return false;
    }

    private function _validate_tag()
    {
        return ($this->_is_tag_single() || $this->_is_tag_container());
    }

    private function _set_attributes($attributes)
    {
        $this->_attributes = $attributes;

        $attributes = '';

        foreach ($this->_attributes as $key => $value)
        {
            if ($this->_is_attribute_valid($key,
                                           $value))
            {
                $attributes .= " " . trim(strtolower($key)) . "=\"";

                if (is_array($value))
                    $attributes .= implode(" ",
                                           $value);
                else
                    $attributes .= $value;

                $attributes .= "\"";
            }
            else
                return bs(__CLASS__ . " " . CODE_ICON_ARROW . " " . $value . " | "
                        . $key . " | " . $this->_tag . " (" . $this->_type . ")");
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

        $attributes = array
                      (
                          'href' => $href,
                      );

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
            $attributes['class'] = implode($classes, " ");

        $self = new self('br',
                         $attributes);

        return str_repeat($self->_html,
                          $lines);
    }

    private static function _code($content)
    {
        $self = new self('code',
                         array(),
                         $content);

        return $self->_html;
    }

    private static function _div($content,
                                 $classes = array(),
                                 $id = null)
    {
        $attributes = array();
        if (!empty($classes))
            $attributes['class'] = implode($classes, " ");
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
            return mf($src);

        $attributes = array
                      (
                          'src' => ru($src),
                          'alt' => $alt,
                          'title' => $title,
                      );

        $self = new self('img',
                         $attributes);

        return $self->_html;
    }

    private static function _li($content,
                                $classes = array())
    {
        $attributes = array();
        if (!empty($classes))
            $attributes['class'] = implode($classes, " ");

        $self = new self('li',
                         $attributes,
                         $content);

        return $self->_html;
    }

    private static function _link($href,
                                  $rel,
                                  $type = null)
    {
        $placeholder = $rel . '_' . $href;

        if (!fe($href))
            return mf($href);
        elseif (!empty($href)
            && !in_array($placeholder, self::$_linked_files))
        {
            $attributes = array
                          (
                              'href' => ru($href),
                              'rel' => $rel,
                          );

            if (!empty($type))
                $attributes['type'] = $type;

            $self = new self('link',
                             $attributes);

            self::$_linked_files[] = $placeholder;
        }
        else
            return false; // MAYBE this link was already loaded, to be continued..

        return $self->_html;
    }

    private static function _meta($attributes)
    {
        if (!empty($attributes))
        {
            $self = new self('meta',
                             $attributes);

            return $self->_html;
        }
    }

    private static function _ol($content,
                                $classes = array())
    {
        $attributes = array();
        if (!empty($classes))
            $attributes['class'] = implode($classes, " ");

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

        if (!fe($src))
            return mf($src);
        elseif (!empty($src)
            && !in_array($src, self::$_loaded_scripts))
        {
            $attributes['src'] = ru($src);
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
            return false; // this script SEEMS to be already loaded, or to be empty!

        return $self->_html;
    }

    protected static function _select($content,
                                      $attributes = array(),
                                      $classes = array())
    {
        if (!empty($classes))
            $attributes['class'] = implode($classes, " ");

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
                                $classes = array())
    {
        $attributes = array();
        if (!empty($classes))
            $attributes['class'] = implode($classes, " ");

        $self = new self('ul',
                         $attributes,
                         $content);

        return $self->_html;
    }

    function get_content()
    {
        return $this->_content;
    }

    static function add_metatags($metatags = array())
    {
        foreach ($metatags as $values)
            echo self::_meta($values);
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

    static function add_canonical($href)
    {
        echo self::_link($href,
                         "canonical");
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
                          array
                          (
                              'box',
                          ));
    }

    static function highbox($content)
    {
        return self::_div($content,
                          array
                          (
                              'box',
                              'high',
                          ));
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
                         array
                         (
                             'clearfix',
                         ));
    }

    static function codeblock($content)
    {
        return self::_code($content);
    }

    static function text($content)
    {
        return self::_p($content);
    }

    static function spanner($content,
                            $classes = array())
    {
        return self::_span($content,
                           array(),
                           $classes);
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
