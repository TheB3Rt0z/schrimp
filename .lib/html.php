<?php

define('HTML_BREADCRUMB_SEPARATOR', " &raquo; ");

class html
{
	public static $todos = array
    (
        'script online loading' => "if != local, should have a lfb..",
        'private static builder' => "these should have a _ at the beginning, or not?",
    );

	private $_tag = null;
	private $_attributes = array();
	private $_content = '';

    private $_html = '';

	private $_tags = array
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
            'p',
    		'pre',
            'script',
            'ul',
    	)
    );

	static private $_linked_files = array();

	static private $_loaded_scripts = array();

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

    private static function a($href,
                              $content)
    {
    	if (!strpos($href, "://"))
    		$href = ru($href);

    	$attributes = array('href' => $href);

    	$self = new self(__FUNCTION__,
    	                 $attributes,
    	                 $content);

    	return $self->_html;
    }

    private static function br($lines = 1,
                               $classes = array())
    {
        $attributes = array();
        if (!empty($classes))
            $attributes['class'] = trim($classes);

        $self = new self(__FUNCTION__,
    	                 $attributes);

    	return str_repeat($self->_html, $lines);
    }

    private static function div($content,
    							$classes = array(),
    							$id = null)
    {
    	$attributes = array();
    	if (!empty($classes))
    		$attributes['class'] = implode($classes, ' ');
    	if (!empty($id))
    		$attributes['id'] = trim($id);

    	$self = new self(__FUNCTION__,
    	                 $attributes,
    	                 $content);

    	return $self->_html;
    }

    private static function h1($content)
    {
    	$self = new self(__FUNCTION__,
    	                 array(),
    	                 $content);

    	return $self->_html;
    }

    private static function h2($content)
    {
    	$self = new self(__FUNCTION__,
    	                 array(),
    	                 $content);

    	return $self->_html;
    }

    private static function h3($content)
    {
    	$self = new self(__FUNCTION__,
    	                 array(),
    	                 $content);

    	return $self->_html;
    }

    private static function h4($content)
    {
    	$self = new self(__FUNCTION__,
    	                 array(),
    	                 $content);

    	return $self->_html;
    }

    private static function h5($content)
    {
    	$self = new self(__FUNCTION__,
    	                 array(),
    	                 $content);

    	return $self->_html;
    }

    private static function h6($content)
    {
    	$self = new self(__FUNCTION__,
    	                 array(),
    	                 $content);

    	return $self->_html;
    }

    private static function h7($content)
    {
    	$self = new self(__FUNCTION__,
    			         array(),
    			         $content);

    	return $self->_html;
    }

    private static function img($src,
            $alt,
            $title = '')
    {
        if (!fe($src))
            return $main->launch_error_file_not_found($src);

        $attributes = array('src' => ru($src),
                            'alt' => $alt,
                            'title' => $title);

        $self = new self(__FUNCTION__,
                         $attributes);

        return $self->_html;
    }

    private static function li($content,
                               $classes = '')
    {
    	$attributes = array();
    	if (!empty($classes))
    		$attributes['class'] = trim($classes);

    	$self = new self(__FUNCTION__,
    	                 $attributes,
    	                 $content);

    	return $self->_html;
    }

    private static function link($href,
                                 $rel,
                                 $type)
    {
    	$placeholder = $rel . '_' . $href;

    	if (!fe($href))
			return $main->launch_error_file_not_found($href);
		elseif (!empty($href)
			&& !in_array($placeholder, html::$_linked_files))
		{
			$attributes = array('href' => ru($href),
    		                    'rel' => $rel,
    		                    'type' => $type);

    	    $self = new self(__FUNCTION__,
    	                     $attributes);

			html::$_linked_files[] = $placeholder;
		}
		else
			return false; // MAYBE this link was already loaded, to be continued..

    	return $self->_html;
    }

    static private function ol($content,
                               $classes = '')
    {
    	$attributes = array();
    	if (!empty($classes))
    		$attributes['class'] = trim($classes);

    	$self = new self(__FUNCTION__,
    	                 $attributes,
    	                 $content);

    	return $self->_html;
    }

    private static function p($content)
    {
    	$self = new self(__FUNCTION__,
    	                 array(),
    	                 $content);

    	return $self->_html;
    }

    private static function pre($content)
    {
    	$self = new self(__FUNCTION__,
    					 array(),
    					 $content);

    	return $self->_html;
    }

    private static function script($type,
                                   $src = null,
                                   $content = '')
    {
    	$attributes['type'] = $type;

    	if (!empty($src)
    		&& !in_array($src, html::$_loaded_scripts))
    	{
    		if (!fe($src) && !parse_url($src))
				return $main->launch_error_file_not_found($src);

    		$attributes['src'] = $src;
    		$self = new self(__FUNCTION__,
    	                     $attributes);

    		self::$_loaded_scripts[] = $type . '_' . $src;
    	}
    	elseif (!empty($content)
    		&& !in_array($content, html::$_loaded_scripts))
    	{
    		$attributes['charset'] = "utf-8"; // should be constant?
    		$self = new self(__FUNCTION__,
    	                     $attributes,
    	                     $content);

    	    self::$_loaded_scripts[] = $content;
    	}
    	else
    		return false; // this script SEEMS to be already loaded

    	return $self->_html;
    }

    static private function ul($content,
                               $classes = '')
    {
    	$attributes = array();
    	if (!empty($classes))
    		$attributes['class'] = trim($classes);

    	$self = new self(__FUNCTION__,
    	                 $attributes,
    	                 $content);

    	return $self->_html;
    }

    static function add_favicon($href)
    {
    	echo self::link($href,
    	                "icon",
						"image/x-icon");

    	echo self::link($href,
    			        "shortcut icon",
    			        "image/x-icon");
    }

    static function add_stylesheet($href)
    {
    	echo self::link($href,
                        "stylesheet",
                        "text/css");
    }

    static function add_js_file($src)
    {
    	echo self::script("text/javascript",
    	                  $src);
    }

    static function add_js_script($content)
    {
    	echo self::script("text/javascript",
    	                  null,
    	                  $content);
    }

    static function array_to_list($tree,
                                  $type = 'ul')
    {
    	$content = '';

		foreach ($tree as $key => $value)
		{
			$content .= html::li(html::a($key,
			                             $value['name']));
			if (!empty($value['sub']))
				$content .= html::li(self::array_to_list($value['sub'],
				                                         $type));
		}

		return self::$type($content);
    }

    static function box($content)
    {
		return self::div($content,
						 array('box'));
    }

    static function divisor($content,
    				        $classes = array(),
    					    $id = null)
    {
		return self::div($content,
    				     $classes,
    					 $id);
    }

	static function highbox($content)
    {
		return self::div($content,
						 array('box', 'high'));
    }

    static function hyperlink($href,
                              $content = null)
    {
    	return self::a($href,
                       (!$content
                       ? $href
                       : $content));
    }

    static function image($src,
    					  $alt,
                          $title = '')
    {
    	return self::img($src,
    					 $alt,
                         $title);
    }

    static function newline()
    {
    	return self::br();
    }

    static function clearfix()
    {
        return self::br(1,
                        'clearfix');
    }

	static function text($content)
    {
    	return self::p($content);
    }

    static function preform($content)
    {
    	return self::pre(var_export($content,
    	                            true));
    }

    static function title($level,
                          $content)
    {
    	if (is_int($level)
    		&& $level > 0
    		&& $level <= 7)
    	{
    		$level = "h" . $level;
        	return self::$level($content);
    	}
    }
}

?>