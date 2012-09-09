<?php

define('FALLBACK_LANGUAGE', "en");

class language
{
	static $_base_translations = array("here" => array('de' => "hier",
	                                                      'en' => "here",
	                                                      'it' => "qua"),
	                                   "now" => array('de' => "jetzt",
	                                                  'en' => "now",
	                                                  'it' => "ora"));

	static function translate($component,
	                          $placeholder)
	{
		$args = func_get_args();

		$texts = array_map('trim', file(".app/" . array_shift($args) . ".txt"));

		$texts[] = '';

		$language = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);

		$translation = "[" . strtoupper(str_replace(" ", "_", array_shift($args))) . "]";

		if (isset(self::$_base_translations[$placeholder][$language]))
		{
			$translation = self::$_base_translations[$placeholder][$language];
		}
		elseif (isset(self::$_base_translations[$placeholder][FALLBACK_LANGUAGE]))
		{
			$translation = self::$_base_translations[$placeholder][FALLBACK_LANGUAGE];
		}

		foreach ($texts as $key => $value)
		{
			if ($placeholder == $value)
			{
				while ($text = explode("||", $texts[++$key]))
				{
					if ($text[0] == $language
						|| $text[0] == FALLBACK_LANGUAGE)
					{
						$translation = $text[1];
					}

					if ($text[0] == $language
						|| !$text[0])
					{
						break;
					}
				}
			}
		}

		return vsprintf($translation, $args);
	}
}

?>