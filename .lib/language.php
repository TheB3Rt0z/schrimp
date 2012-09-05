<?php

define('LANGUAGE_DEFAULT', "en");

class language
{
	static function translate($component,
	                          $placeholder)
	{
		$args = func_get_args();

		$texts = array_map('trim', file(".app/" . array_shift($args) . ".txt"));

		$texts[] = '';

		$language = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);

		$translation = "TRANSLATION FOR \"" . array_shift($args) . "\" NOT FOUND";

		foreach ($texts as $key => $value)
		{
			if ($placeholder == $value)
			{
				while ($text = explode("||", $texts[++$key]))
				{
					if ($text[0] == $language
						|| $text[0] == LANGUAGE_DEFAULT)
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