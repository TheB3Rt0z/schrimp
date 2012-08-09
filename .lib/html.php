<?php

class html
{
	private $_tag = false;
	private $_attributes = array();
	private $_content = '';

    private $_html = '';

	private $_tags = array('single' => array('meta',
        	                                 'link',
        	                                 'img'),
					       'container' => array('script',
					                            'div',
					                            'h1',
					                            'h2',
					                            'h3',
					                            'p'));

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

    static function link($href,
                         $rel,
                         $type)
    {
    	$attributes = array('href' => main::resolve_uri($href),
    		                'rel' => $rel,
    		                'type' => $type);

    	$self = new self('link',
    	                 $attributes);

    	return $self->_html . "\n";
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
    		$self = new self('script',
    	                     $attributes);
    	}
    	else
    	{
    		$self = new self('script',
    	                     $attributes,
    	                     $content);
    	}

    	return $self->_html . "\n";
    }

    static function h1($content)
    {
    	$self = new self('h1',
    	                 array(),
    	                 $content);

    	return $self->_html;
    }

    static function h2($content)
    {
    	$self = new self('h2',
    	                 array(),
    	                 $content);

    	return $self->_html;
    }

    static function h3($content)
    {
    	$self = new self('h3',
    	                 array(),
    	                 $content);

    	return $self->_html;
    }

    static function img($filename,
    					$alt,
                        $title = '')
    {
    	$attributes = array('src' => main::resolve_uri($filename),
    		                'alt' => $alt,
    		                'title' => $title);

    	$self = new self('img',
    	                 $attributes);

    	return $self->_html;
    }
}

?>