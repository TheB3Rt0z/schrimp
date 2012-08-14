<?php //TODO: sistemare l'indentazione, per quanto possibile..

class html
{
	private $_tag = false;
	private $_attributes = array();
	private $_content = '';

    private $_html = '';

	private $_tags = array('single' => array('br',
        	                                 'img',
        	                                 'link'),
					       'container' => array('div',
					                            'h1',
					                            'h2',
					                            'h3',
					                            'h4',
					                            'h5',
					                            'h6',
					                            'li',
					                            'p',
					                            'script',
					                            'ul'));

    function __construct($tag,
                         $attributes = array(),
                         $content = '')
    {
    	$this->_tag = $tag;

    	if ($this->_validate_tag())
    	{
    		$this->_html .= "<" . $this->_tag . "__ATTRIBUTES__";

    		if ($this->_is_single())
	        {
	            $this->_html .= " /";
	        }
	        else
	        {
	            $this->_html .= ">";

	            if ($content)
	            {
	            	$this->_html .= "\n";
	            }

	            if ($this->_is_container())
	            {
	                $this->_html .= "__CONTENT__";
	            }

	            $this->_html .= "</" . $this->_tag;
	        }

	        $this->_html .= ">";

	        $this->_set_attributes($attributes);

	        if ($this->_is_container($this->_tag))
	        {
	            $this->_set_content($content);
	        }
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
    		{
    			$attributes .= implode(" ",
    			                       $value);
    		}
    		else
    		{
    			$attributes .= $value;
    		}

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

    static function br($lines = 1)
    {
    	$self = new self(__FUNCTION__);

    	return str_repeat($self->_html, $lines) . "\n";
    }

    static function div($content)
    {
    	$self = new self(__FUNCTION__,
    	                 array(),
    	                 $content);

    	return $self->_html;
    }

    static function img($src,
    					$alt,
                        $title = '')
    {
    	if (!file_exists($_SERVER['DOCUMENT_ROOT'] . PATH . "/" . $src))
		{
			$msg = language::translate('error',
                                       "required file (%s) not exists",
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

    static function h1($content)
    {
    	$self = new self(__FUNCTION__,
    	                 array(),
    	                 $content);

    	return $self->_html;
    }

    static function h2($content)
    {
    	$self = new self(__FUNCTION__,
    	                 array(),
    	                 $content);

    	return $self->_html;
    }

    static function h3($content)
    {
    	$self = new self(__FUNCTION__,
    	                 array(),
    	                 $content);

    	return $self->_html;
    }

    static function h4($content)
    {
    	$self = new self(__FUNCTION__,
    	                 array(),
    	                 $content);

    	return $self->_html;
    }

    static function h5($content)
    {
    	$self = new self(__FUNCTION__,
    	                 array(),
    	                 $content);

    	return $self->_html;
    }

    static function h6($content)
    {
    	$self = new self(__FUNCTION__,
    	                 array(),
    	                 $content);

    	return $self->_html;
    }

    static function li($content,
                       $classes = '')
    {
    	$attributes = array();

    	if ($classes)
    	{
    		$attributes['class'] = trim($classes);
    	}

    	$self = new self(__FUNCTION__,
    	                 $attributes,
    	                 $content);

    	return $self->_html . "\n";
    }

    static function link($href,
                         $rel,
                         $type)
    {
    	if (!file_exists($_SERVER['DOCUMENT_ROOT'] . PATH . "/" . $href))
		{
			$msg = language::translate('error',
                                       "required file (%s) not exists",
				                       $href);
			main::launch_error($msg);
		}

    	$attributes = array('href' => main::resolve_uri($href),
    		                'rel' => $rel,
    		                'type' => $type);

    	$self = new self(__FUNCTION__,
    	                 $attributes);

    	return $self->_html . "\n";
    }

    static function p($content)
    {
    	$self = new self(__FUNCTION__,
    	                 array(),
    	                 $content);

    	return $self->_html;
    }

    static function script($type,
                           $src = false,
                           $content = '')
    {
    	$attributes = array
    	(
    		'type' => $type,
    	);

    	if ($src)
    	{
    		$attributes['src'] = $src;
    		$self = new self(__FUNCTION__,
    	                     $attributes);
    	}
    	else
    	{
    		$self = new self(__FUNCTION__,
    	                     $attributes,
    	                     $content);
    	}

    	return $self->_html . "\n";
    }

    static function ul($content,
                       $classes = '')
    {
    	$attributes = array();

    	if ($classes)
    	{
    		$attributes['class'] = trim($classes);
    	}

    	$self = new self(__FUNCTION__,
    	                 $attributes,
    	                 $content);

    	return $self->_html . "\n";
    }
}

?>