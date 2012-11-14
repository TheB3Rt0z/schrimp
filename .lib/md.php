<?php

class md
{
	private $_tag = false;
	private $_content = '';
	private $_formatting = '';

	private $_md = '';

	private $_tags = array
	        (
	        	'h1' => "return \"\n\"
			                  . str_repeat(\"=\",
			                               strlen(\$this->_content))
		                      . \"\n\n\n\n\";",
			    'h2' => "return \"\n\"
			                  . str_repeat(\"-\",
			                               strlen(\$this->_content))
			                  . \"\n\n\n\";",
			    'h3' => "return \"\n\n\";",
	        	'text' => '',
	       	);

	function __construct($tag,
			             $content = '')
	{
		$this->_tag = $tag;

		if ($this->_validate_tag())
		{
			$this->_md = "__CONTENT____FORMATTING__"; // to be checked
			$this->_set_content($content);
			$this->_set_formatting();
		}
	}

	private function _validate_tag()
	{
		return array_key_exists($this->_tag,
				                $this->_tags);
	}

	private function _set_formatting() // maybe apply_formatting in the future..
	{
		$this->_formatting = eval($this->_tags[$this->_tag]);

		$this->_md = str_replace("__FORMATTING__",
				                 $this->_formatting,
				                 $this->_md);
	}

	private function _set_content($content = '')
	{
		$this->_content = $content;

		$this->_md = str_replace("__CONTENT__",
				                 $this->_content,
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

	static function text($content) // direct construct generator
	{
		$self = new self(__FUNCTION__,
				         $content);

		return $self->_md;
	}
}

?>