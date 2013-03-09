<?php

class code
{
	public static $todos = array
    (
        'code analysis' => "load, analyse, printing and more.. with toolbox class?",
    );

	private static $_cyc_counters = array // do we need failsafe falls?
	(
        "if (",
        "if(",
        "if  (",
        "case ",
        "catch (",
        "while (",
        "while(",
        "while  (",
        "for (",
        "for(",
        "for  (",
        "foreach (",
        "foreach(",
        "foreach  (",
        " && ",
        "\n&& ",
        "\r&& ",
        "\t&& ",
        " || ",
        "\n|| ",
        "\r|| ",
        "\t|| ",
        " and ",
        "\nand ",
        "\rand ",
        "\tand ",
        " or ",
        "\nor ",
        "\ror ",
        "\tor ",
        " xor ",
        "\nxor ",
        "\rxor ",
        "\txor ",
        " & ",
        "\n& ",
        "\r& ",
        "\t& ",
        " | ",
        "\n| ",
        "\r| ",
        "\t| ",
        " ^ ",
        "\n^ ",
        "\r^ ",
        "\t^ ",
	);

	private static function _get_constants_information()
	{
	    $constants = '';

	    $user_constants = self::get_constants_list();
	    foreach ($user_constants as $key => $value)
	        if (substr($key, 0, 1) != '_')
	            $constants .= "- **" . $key . "** &#10140; " . fv($value) . "\n";

	    return $constants . MD_NEWLINE_SEQUENCE;
	}

	private static function _get_functions_information()
	{
	    $functions = '';

	    $user_functions = self::get_functions_list();
	    foreach ($user_functions as $function)
	    {
	        $function = new ReflectionFunction($function);

	        $parameters = array();
	        foreach ($function->getParameters() as $parameter)
	            $parameters[] = "$" . $parameter->getName()
	                          . ($parameter->isOptional()
	                            ? " = '" . $parameter->getDefaultValue() . "'" // to be formatted like costants
	                            : '');

	        $functions .= "- **" . $function->getName() . "("
	                    . implode($parameters, ", ") . ")** &#10140; "
	                    . str_replace(realpath('') . "/",
	                                  '',
	                                  $function->getFileName())
	                    . " on line " . $function->getStartLine()
	                    . ($function->getDocComment()
	                      ? "," . trim(str_replace(array("*", "/"),
	                                               '',
	                                               $function->getDocComment()),
	                                   " ")
	                      : '') . "\n";
	    }

	    return $functions . MD_NEWLINE_SEQUENCE;
	}

	private static function _get_todos_information()
	{
	    $todos = '';

	    foreach (unserialize(_TODOS) as $key => $value)
	        $todos .= "- **" . $key . "** &#10140; " . $value . "\n";

	    return $todos . MD_NEWLINE_SEQUENCE;
	}

	private static function _get_classes_information()
	{
	    $classes = '';

	    $declared_classes = get_declared_classes();
	    asort($declared_classes);
	    foreach ($declared_classes as $class)
	        if (($class = new ReflectionClass($class)) // name converted to reflection class
	            && $class->isUserDefined())
	        {
	            $class_constants = '';
	            foreach ($class->getConstants() as $key => $value)
	                if (substr($key, 0, 1) != '_')
	                    $class_constants .= "- **" . $key . "** &#10140; "
	                                      . fv($value) . "\n";

	            $reference = '';
	            foreach ($class->getMethods() as $method)
	            {
	                extract(self::analyse_method($method)); // generates required variables

	                $reference .= "- **" . $method->getName() . "** ("
	                        . self::get_method_status($method)
	                        . ($length_warning
	                                ? " " . md::image(_SET_INCLUDES_PATH . "img/icon_16x16_blueboh.png",
	                                                  "(?)",
	                                                  $length_warning . " too long line(s) found!")
	                                : ",")
	                                . " Len: " . ($length ? $length : '-') . " "
	                                        . ($length <= (floor(MAX_METHODS_COMPLEXITY / 10) * 10)
	                                                ? ($length
	                                                  ? md::image(_SET_INCLUDES_PATH . "img/icon_16x16_greenok.png",
	                                                              "(&radic;)")
	                                                  : '')
	                                                : ($length <= MAX_METHODS_COMPLEXITY
	                                                        ? md::image(_SET_INCLUDES_PATH . "img/icon_16x16_yellowops.png",
	                                                                    "(!)",
	                                                                    "Method's length could be reduced..")
	                                                        : md::image(_SET_INCLUDES_PATH . "img/icon_16x16_redics.png",
	                                                                    "(X)",
	                                                                    "Method's length should be reduced!")))
	                                                        . ($cyc ? " CyC: " . $cyc . " "
	                                                                . ($cyc <= (floor(MAX_CYCLOMATIC_COMPLEXITY / 10) * 10)
	                                                                        ? md::image(_SET_INCLUDES_PATH . "img/icon_16x16_greenok.png",
	                                                                                    "(&radic;)")
	                                                                        : ($cyc <= MAX_CYCLOMATIC_COMPLEXITY
	                                                                                ? md::image(_SET_INCLUDES_PATH . "img/icon_16x16_yellowops.png",
	                                                                                            "(!)",
	                                                                                            "Method's cyclomatic complexity could be reduced..")
	                                                                                : md::image(_SET_INCLUDES_PATH . "img/icon_16x16_redics.png",
	                                                                                            "(X)",
	                                                                                            "Method's cyclomatic complexity should be reduced!")))
	                                                                : '')
	                                                                . ")\n";
	            }

	            $dependences = '';

	            $class_todos = '';
	            foreach ($class->getStaticPropertyValue('todos') as $key => $value)
	                $class_todos .= "- **" . $key . "** &#10140; " . $value . "\n";

	            $heading = "Class " . strtoupper($class->name)
	            . " (" . date('r', filemtime($class->getFileName())) . ")";

	            $classes .= md::title(2, $heading)
	            . (!empty($class_consts)
	                    ? md::title(3, "Class configuration constants:")
	                    . $class_consts . "\n" // unprotected (no '_XXX') constants here
	                    : '')
	                    . (!empty($reference)
	                            ? md::title(3, "Code reference:")
	                            . $reference . "\n"
	                            : '')
	                            . (!empty($dependences)
	                                    ? md::title(3, "Dependences:")
	                                    . $dependences . "\n"
	                                    : '')
	                                    . (!empty($class_todos)
	                                            ? md::title(3, "TODOs")
	                                            . $class_todos . "\n"
	                                            : '')
	                                            . md::hr();
	        }

	    return $classes . MD_NEWLINE_SEQUENCE;
	}

	private static function _get_components_information()
	{
	    $components = md::title(2, "Available components:");

	    foreach (self::get_components_list() as $component => $uts)
	        $components .= md::title(3, $component . " (" . date('r', $uts) . ")");

	    return $components . MD_NEWLINE_SEQUENCE;
	}

	static function get_constants_list()
	{
	    $constants_list = get_defined_constants(true);
	    $user_constants = $constants_list['user'];
	    ksort($user_constants);

	    return $user_constants;
	}

	static function get_functions_list()
	{
	    $functions_list = get_defined_functions();
	    $user_functions = $functions_list['user'];
	    sort($user_functions);

	    return $user_functions;
	}

	static function get_components_list()
	{
	    $components = array();

	    $substitutions = array(
	        _SET_APPLICATION_PATH,
	        ".php",
	    );

	    foreach (glob(_SET_APPLICATION_PATH . "*.php") as $filename) // scans modules directory
	        if (!substr_count($filename, "_"))
	        {
	            $component = str_replace($substitutions,
	                                     '',
	                                     $filename);
	            $components[$component] = filemtime($filename);
	        }

	    $substitutions[0] = _SET_APPLICATION_PUBLICPATH;

        foreach (glob(_SET_APPLICATION_PUBLICPATH . "*.php") as $filename) // scans application directory
            if (!substr_count($filename, "_"))
            {
                $component = str_replace($substitutions,
                                         '',
                                         $filename);
                $components[$component] = filemtime($filename);
            }

        ksort($components);

        return $components;
	}

	static function get_class_code(reflectionClass $class)
	{
	    $class_path = ($class->name != 'main'
	                  ? (file_exists(_SET_LIBRARIES_PATH . $class->name . ".php")
	                    ? _SET_LIBRARIES_PATH
	                    : _SET_LIBRARIES_PUBLICPATH)
	                  : '.') . $class->name . ".php";

	    return file($class_path); // in array format
	}

	static function get_method_status(reflectionMethod $method)
	{
	    return ($method->isConstructor() ? "C" : '')
             . ($method->isPrivate() ? "Pri" : '')
             . ($method->isProtected() ? "Pro" : '')
             . ($method->isPublic() ? "Pub" : '')
             . ($method->isStatic() ? "S" : '')
             . ($method->isAbstract() ? "A" : '');
	}

	static function analyse_method(reflectionMethod $method)
	{
	    $parameters = (count($method->getParameters()) > 1
	                  ? count($method->getParameters()) - 1
	                  : 0); // should be an array with infos?

	    $length = $method->getEndLine() - $method->getStartLine()
	            - $parameters - ($method->isAbstract() ? 0 : 2);

	    $code = array_slice(self::get_class_code($method->getDeclaringClass()),
	                        $method->getEndLine() - $length - 1,
	                        $length);

	    $length_warning = 0;
	    $cyc = 0;
        foreach ($code as $code_line)
        {
            $code_line = explode(" // ", $code_line); // avoid calculating comments
            if (strlen(str_replace("\t",
                                   '    ',
                                   $code_line[0])) > MAX_BLOCK_COMPLEXITY) // avoid undesired tabs
                $length_warning++;

            foreach (self::$_cyc_counters as $counter)
                $cyc += substr_count($code_line[0], $counter);
        }

        return array(
		    'parameters' => $parameters,
		    'length' => $length,
            'code' => $code,
            'length_warning' => $length_warning,
            'cyc' => $cyc,
		);
	}

	static function get_documentation()
	{
	    $title = md::image(_SET_INCLUDES_PATH . "img/schrimp_favicon_md.ico")
	           . " " . _STR_PROJECT_NAME . "'s Documentation "
	    	   . main::get_version(1) . date('.Y.m.d');

	    return md::title(1, $title)
    	       . md::title(2, "General reference")
    	         . md::title(3, "Global configuration constants")
    	           . self::_get_constants_information()
    	         . md::title(3, "Function aliases")
    	           . self::_get_functions_information() // add more information
    	         . md::title(3, 'TODOs')
    	           . self::_get_todos_information()
    	         . md::hr()
    	       . self::_get_classes_information()
    	       . self::_get_components_information() // adding more information?
    	       . md::hr()
    	     . str_repeat("\n", 4) . md::text(_STR_COPYRIGHT_SIGNATURE);
	}
}

?>