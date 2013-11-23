<?php namespace schrimp;

define('LANGUAGE_FALLBACK_LANG', "en");

class language
{
	static $todos = array
	(
	    'integrates ISO 639-1 codes' => "combine with html attributes check..", // http://www.w3schools.com/tags/ref_language_codes.asp
		'automatic translation' => "it could be interessant to use pspell&gettext",
	    'implement euristic interpret' => "integrate it in translate as fallback!",
	);

    static $tests = array();

	private static $_languages = array
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

	static protected function _search_for_translation($translations,
		                                              $marker)
	{
	    $language = self::get_browser_language();

	    $str = false;
    	foreach ($translations as $key => $value)
            if ($marker == $value)
				while ($text = explode("||", $translations[++$key]))
				{
					if (($text[0] == $language
						|| $text[0] == LANGUAGE_FALLBACK_LANG)
						&& !empty($text[1]))
					{
						$str = $text[1]; // can overwrite $_translations-based results (if required, use translation files)
					}

					if ($text[0] == $language
					    || !$text[0])
						break;
				}

    	return $str;
	}

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

	    $placeholder = array
	                   (
	                       '',
	                   );

	    if (fe($translations_publicpath))
	        return array_map('trim',
	                         array_merge((array)file($translations_publicpath),
	                                     $placeholder));
	    elseif (fe($translations_path))
	        return array_map('trim',
	                         array_merge((array)file($translations_path),
	                                     $placeholder));
	    else
	        return $placeholder; // no translations file found for this component!
	}

	static function translate($component,
	                          $marker)
	{
		$args = func_get_args();
		$component = array_shift($args);
		$translations = self::get_component_translations_array($component);
		$language = self::get_browser_language();
		$str = "[" . strtoupper(str_replace(" ", "_", array_shift($args))) . "]";

		if (isset(self::$_translations[$marker][$language]))
			$str = self::$_translations[$marker][$language];
		elseif (isset(self::$_translations[$marker][LANGUAGE_FALLBACK_LANG]))
			$str = self::$_translations[$marker][LANGUAGE_FALLBACK_LANG];

		if ($found = self::_search_for_translation($translations,
		                                           $marker))
		    $str = $found;

		return vsprintf($str, $args);
	}

	static function interpret($string,
	                          $from_lang, // or maybe auto-detection? (!!!)
	                          $to_lang)
	{
	    return $string;
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
	return call_user_func_array(code::_SET_NS_PREFIX . 'language::translate', func_get_args()); // quick-alias
}