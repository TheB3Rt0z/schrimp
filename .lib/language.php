<?php

define('FALLBACK_LANGUAGE', "en");

class language
{
	static private $_languages = array('de',
								       'en',
								       'it');

	static $_translations = array('here' => array('de' => "hier",
	                                              'en' => "here",
	                                              'it' => "qua"),
	                              'now' => array('de' => "jetzt",
	                                             'en' => "now",
	                                             'it' => "ora"));

	static function is_supported($language)
	{
		return in_array($language, self::$_languages);
	}

	static function translate($component,
	                          $marker)
	{
		$args = func_get_args();
		$texts = array_map('trim', file(".app/" . array_shift($args) . ".txt"));
		$texts[] = '';
		$language = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
		$translation = "["
				     . strtoupper(str_replace(" ", "_", array_shift($args)))
		             . "]";

		if (isset(self::$_translations[$marker][$language]))
			$translation = self::$_translations[$marker][$language];
		elseif (isset(self::$_translations[$marker][FALLBACK_LANGUAGE]))
			$translation = self::$_translations[$marker][FALLBACK_LANGUAGE];

		foreach ($texts as $key => $value)
			if ($marker == $value)
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

		return vsprintf($translation, $args);
	}
}

function t($component,
	       $marker)
{
	return call_user_func_array('language::translate', func_get_args());
}

?>