<?php

define('MD_NEWLINE', "   \n"); // markdown-style new line with br conversion

class md
{
	private $_tag = false;
	private $_content = '';
	private $_attributes = array();
	private $_formatting = '';

	private $_md = '';

	private $_tags = array
	        (
	        	'h1' => "return MD_NEWLINE
			                  . str_repeat(\"=\",
			                               strlen(\$this->_content))
		                      . str_repeat(MD_NEWLINE, 4);",

			    'h2' => "return MD_NEWLINE
			                  . str_repeat(\"-\",
			                               strlen(\$this->_content))
			                  . str_repeat(MD_NEWLINE, 3);",

			    'h3' => "return str_repeat(MD_NEWLINE, 2);",

	        	'hr' => "return MD_NEWLINE . '***' . str_repeat(MD_NEWLINE, 2);",

	        	'img' => "return '![' . \$this->_attributes['alt'] . ']('
	        		           . \$this->_attributes['src']
	        		           . ' \"' . \$this->_attributes['title'] . '\")';",

	        	'text' => "return MD_NEWLINE;",
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

	private static function h1($content)
	{
		$self = new self(__FUNCTION__,
				         $content);

		return $self->_md;
	}

	private static function h2($content)
	{
		$self = new self(__FUNCTION__,
				         $content);

		return $self->_md;
	}

	private static function h3($content) // not so experimental..
	{
		$self = new self(__FUNCTION__,
				         '**' . strtoupper($content) . '**');

		return $self->_md;
	}

	private static function img($src,
			                    $alt,
								$title = '')
	{
		if (!main::exists_file($src))
		{
			$msg = tr('error',
					  'required file (%s) not exists',
					  $src);
			main::launch_error($msg);
		}

		$attributes = array('src' => GITHUB_RAWPATH . $src,
							'alt' => $alt,
							'title' => $title);

		$self = new self(__FUNCTION__,
				         '',
				         $attributes);

		return $self->_md;
	}

	static function image($src,
						  $alt = '')
	{
		return self::img($src,
				         $alt);
	}

	static function hr() // direct constructing without any content
	{
		$self = new self(__FUNCTION__);

		return $self->_md;
	}

	static function text($content) // direct construct generator
	{
		$self = new self(__FUNCTION__,
				         $content);

		return $self->_md;
	}

	static function title($level,
			              $content)
	{
		if (is_int($level)
				&& $level > 0
				&& $level <= 3)
		{
			$level = "h" . $level;
			return self::$level($content);
		}
	}
}

?>