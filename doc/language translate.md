**translate($component, $marker)** (PubS, Len: 23/27 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 8 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
  
		$args = func_get_args();
		$component = array_shift($args);
		$translations = self::get_component_translations_array($component);
		$language = self::get_browser_language();
		$str = "[" . strtoupper(str_replace(" ", "_", array_shift($args))) . "]";

		if (isset(self::$_translations[$marker][$language]))
			$str = self::$_translations[$marker][$language];
		elseif (isset(self::$_translations[$marker][LANGUAGE_FALLBACK_LANG]))
			$str = self::$_translations[$marker][LANGUAGE_FALLBACK_LANG];

		foreach ($translations as $key => $value)
			if ($marker == $value)
				while ($text = explode("||", $translations[++$key]))
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
