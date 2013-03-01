<?php

define('LANGUAGE_FALLBACK_LANG', "en");

class language
{
	public static $todos = array
	(
		'automatic translation' => "it could be interessant to use pspell&gettext",
	);

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

	static function get_browser_language()
	{
	    return substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
	}

	static function is_supported($language)
	{
		return in_array($language, self::$_languages);
	}

	static function get_component_translations_array($component)
	{
	    $translations_publicpath = _SET_APPLICATION_PUBLICPATH
	                             . $component
	                             . SET_TRANSLATIONS_EXTENSION;

	    $translations_path = _SET_APPLICATION_PATH
	                       . $component
	                       . SET_TRANSLATIONS_EXTENSION;

	    if (fe($translations_publicpath))
	        return (array)file($translations_publicpath);
	    elseif (fe($translations_path))
	        return (array)file($translations_path);
	    else
	        return array(); // no translations file found for this component!
	}

	static function translate($component,
	                          $marker)
	{
		$args = func_get_args();
		$component = array_shift($args);
		$texts = array('');
		$translations = self::get_component_translations_array($component);
		if (!empty($translations))
		    $texts = array_map('trim',
				               array_merge($translations,
				                           $texts));
		$language = self::get_browser_language();
		$str = "[" . strtoupper(str_replace(" ", "_", array_shift($args))) . "]";

		if (isset(self::$_translations[$marker][$language]))
			$str = self::$_translations[$marker][$language];
		elseif (isset(self::$_translations[$marker][LANGUAGE_FALLBACK_LANG]))
			$str = self::$_translations[$marker][LANGUAGE_FALLBACK_LANG];

		foreach ($texts as $key => $value)
			if ($marker == $value)
				while ($text = explode("||", $texts[++$key]))
				{
					if (($text[0] == $language
						    || $text[0] == LANGUAGE_FALLBACK_LANG)
						&& !empty($text[1]))
					{
						$str = $text[1];
					}

					if ($text[0] == $language || !$text[0])
						break;
				}

		return vsprintf($str, $args);
	}
}

/**
 * executes language translation of marker identifier, referring to given component;
 * @param string $component
 * @param string $marker
 * @return mixed callback function returned value(s)
 */
function tr($component,
	        $marker)
{
	return call_user_func_array('language::translate', func_get_args()); // quick-alias
}

?>