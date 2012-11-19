<?php

define('LANGUAGE_FALLBACK_LANG', "en");

class language // it could be interessant to use pspell&gettext
{
	static private $_languages = array
	               (
	                   'de',
					   'en',
					   'it',
	               );

	static $_translations = array
		   (
			   'here' => array
		   	   (
		   	       'de' => "hier",
	               'en' => "here",
	               'it' => "qua"
		   	   ),
	           'now' => array
		   	   (
		   	   	   'de' => "jetzt",
	               'en' => "now",
	               'it' => "ora",
		   	   )
		   );

	static function is_supported($language)
	{
		return in_array($language, self::$_languages);
	}

	static function translate($component,
	                          $marker)
	{
		$args = func_get_args();
		$component = array_shift($args);
		$texts = (array)@file(".app/" . $component . ".txt");
		$application_texts = (array)@file("app/" . $component . ".txt");
		$texts = array_map('trim',
				           array_merge($texts,
				           		       $application_texts));
		$texts[] = '';
		$language = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
		$translation = "["
				     . strtoupper(str_replace(" ", "_", array_shift($args)))
		             . "]";

		if (isset(self::$_translations[$marker][$language]))
			$translation = self::$_translations[$marker][$language];
		elseif (isset(self::$_translations[$marker][LANGUAGE_FALLBACK_LANG]))
			$translation = self::$_translations[$marker][LANGUAGE_FALLBACK_LANG];

		foreach ($texts as $key => $value)
			if ($marker == $value)
			{
				while ($text = explode("||", $texts[++$key]))
				{
					if (($text[0] == $language
						    || $text[0] == LANGUAGE_FALLBACK_LANG)
						&& !empty($text[1]))
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

/**
 * executes language translation of marker identifier, referring to given component;
 * @param string $component
 * @param string $marker
 */
function tr($component,
	        $marker)
{
	return call_user_func_array('language::translate', func_get_args()); // quick-alias
}

?>