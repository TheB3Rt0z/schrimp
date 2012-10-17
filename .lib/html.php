<?php

define('BREADCRUMB_SEPARATOR', " &raquo; ");

class html
{
	private $_tag = false;
	private $_attributes = array();
	private $_content = '';

    private $_html = '';

	private $_tags = array('single' => array('br',
        	                                 'img',
        	                                 'link'),
					       'container' => array('a',
					       		 				'div',
					                            'h1',
					                            'h2',
					                            'h3',
					                            'h4',
					                            'h5',
					                            'h6',
					                            'li',
					                            'ol',
					                            'p',
					                            'script',
					                            'ul'));

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
    		$href = main::resolve_uri($href);

    	$attributes = array('href' => $href);

    	$self = new self(__FUNCTION__,
    	                 $attributes,
    	                 $content);

    	return $self->_html;
    }

    private static function br($lines = 1)
    {
    	$self = new self(__FUNCTION__);

    	return str_repeat($self->_html, $lines);
    }

    private static function div($content)
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
    	if (!main::exists_file($src))
		{
			$msg = t('error',
                     'required file (%s) not exists',
				     $src);
			main::launch_error($msg);
		}

    	$attributes = array('src' => main::resolve_uri($src),
    		                'alt' => $alt,
    		                'title' => $title);

    	$self = new self(__FUNCTION__,
    	                 $attributes);

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

    private static function li($content,
                               $classes = '')
    {
    	$attributes = array();
    	if ($classes)
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
    	if (!main::exists_file($href))
    	{
			$msg = t('error',
                     'required file (%s) not exists',
				     $href);
			main::launch_error($msg);
			return;
		}
		elseif ($href
			&& !in_array($href, html::$_linked_files))
		{
			$attributes = array('href' => main::resolve_uri($href),
    		                    'rel' => $rel,
    		                    'type' => $type);

    	    $self = new self(__FUNCTION__,
    	                     $attributes);

			html::$_linked_files[] = $rel . '_' . $href;
		}
		else
			return false;

    	return $self->_html;
    }

    static private function ol($content,
                               $classes = '')
    {
    	$attributes = array();
    	if ($classes)
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

    private static function script($type,
                                   $src = false,
                                   $content = '')
    {
    	$attributes = array
    	(
    		'type' => $type,
    	);

    	if ($src
    		&& !in_array($src, html::$_loaded_scripts))
    	{
    		if (!main::exists_file($src)
    			&& !parse_url($src))
			{
				$msg = t('error',
	                     'required file (%s) not exists',
					     $src);
				main::launch_error($msg);
				return;
			}

    		$attributes['src'] = $src;
    		$self = new self(__FUNCTION__,
    	                     $attributes);

    		html::$_loaded_scripts[] = $src;
    	}
    	elseif ($content
    		&& !in_array($content, html::$_loaded_scripts))
    	{
    		$self = new self(__FUNCTION__,
    	                     $attributes,
    	                     $content);

    	    html::$_loaded_scripts[] = $content;
    	}
    	else
    		return false;

    	return $self->_html;
    }

    static private function ul($content,
                               $classes = '')
    {
    	$attributes = array();
    	if ($classes)
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
    	                  false,
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
				$content .= self::array_to_list($value['sub'],
				                                $type);
		}

		return self::$type($content);
    }

    static function hyperlink($href,
                              $content = false)
    {
    	return self::a($href,
                       (!$content ? $href : $content));
    }

    static function image($src,
    					  $alt,
                          $title = '')
    {
    	return self::img($src,
    					 $alt,
                         $title);
    }

    static function title($level,
                          $content)
    {
    	if (is_int($level)
    		&& $level > 0
    		&& $level < 7)
    	{
    		$level = "h" . $level;
        	return self::$level($content);
    	}
    }
}

?>