<?php

class code
{
	public static $todos = array
    (
        'code analysis' => "load, analyse, printing and more.. with toolbox class?",
    );

	const _STR_LENGTH_WARNING = "Method's length could be reduced..";
	const _STR_LENGTH_ERROR = "Method's length should be reduced!";
	const _STR_CYC_WARNING = "Method's cyclomatic complexity could be reduced..";
	const _STR_CYC_ERROR = "Method's cyclomatic complexity should be reduced!";

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

	private static function _is_too_long($code_line)
	{
	    $code_line = explode(" // ", $code_line); // avoid calculating comments

	    return strlen(str_replace("\t", // avoid undesired tabs
	                              '    ', // 1 tab = 4 spaces
	                              $code_line[0])) > MAX_BLOCK_COMPLEXITY;
	}

	private static function _get_constants_information()
	{
	    $constants = '';

	    $user_constants = self::get_constants_list();
	    foreach ($user_constants as $key => $value)
	        if (substr($key, 0, 1) != '_')
	            $constants .= "- **" . $key . "** &#10140; " . fv($value)
	                        . MD_NEWLINE_SEQUENCE;

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
	                      : '') . MD_NEWLINE_SEQUENCE;
	    }

	    return $functions . MD_NEWLINE_SEQUENCE;
	}

	private static function _get_todos_information()
	{
	    $todos = '';

	    foreach (unserialize(_TODOS) as $key => $value)
	        $todos .= "- **" . $key . "** &#10140; " . $value
	                . MD_NEWLINE_SEQUENCE;

	    return $todos . MD_NEWLINE_SEQUENCE;
	}

	private static function _get_methods_information(reflectionMethod $method)
	{
	    extract(self::analyse_method($method)); // generates required variables

	    return "- **" . $method->getName() . "** ("
	         . self::get_method_status($method)
	         . ($length_warning
	           ? " " . md::blue_boh($length_warning . " too long line(s) found!")
	           : ",")
	         . " Len: " . ($length > 0
	                      ? $length
	                      : '-') . " "
	         . ($length <= (floor(MAX_METHODS_COMPLEXITY / 10) * 10)
	           ? ($length > 0
	             ? md::green_ok()
	             : '')
	           : ($length <= MAX_METHODS_COMPLEXITY
	             ? md::yellow_ops(self::_STR_LENGTH_WARNING)
	             : md::red_ics(self::_STR_LENGTH_ERROR)))
	         . ($cyc > 0
	           ? " CyC: " . $cyc . " "
	           . ($cyc <= (floor(MAX_CYCLOMATIC_COMPLEXITY / 10) * 10)
	             ? md::green_ok()
	             : ($cyc <= MAX_CYCLOMATIC_COMPLEXITY
	               ? md::yellow_ops(self::_STR_CYC_WARNING)
	               : md::red_ics(self::_STR_CYC_ERROR)))
               : '')
	         . ")" . MD_NEWLINE_SEQUENCE;
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
	            extract(self::get_class_data($class));

	            $classes .= md::title(2, $header);
	            if (!empty($class_consts))
	                $classes .= md::title(3, "Class configuration constants:")
	                          . $class_consts . MD_NEWLINE_SEQUENCE; // unprotected (no '_XXX') constants here
	            if (!empty($reference))
	                $classes .= md::title(3, "Code reference:")
	                          . $reference . MD_NEWLINE_SEQUENCE;
	            if (!empty($dependencies))
	                $classes .= md::title(3, "Dependencies:")
	                          . "Uses: " . $dependencies . MD_NEWLINE_SEQUENCE;
	            if (!empty($class_todos))
	                $classes .= md::title(3, "TODOs")
	                          . $class_todos . MD_NEWLINE_SEQUENCE;
	            $classes .= md::hr();
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

	static function get_libraries_list()
	{
	    $libraries = array('main' => filemtime(".main.php")); // hardcoded? mmm..

	    $substitutions = array
	    (
	        _SET_LIBRARIES_PATH,
	        ".php",
	    );

	    foreach (glob(_SET_LIBRARIES_PATH . "*.php") as $filename) // scans core directory
	        if (!substr_count($filename, "_"))
	        {
	            $library = str_replace($substitutions,
	                                   '',
	                                   $filename);
	            $libraries[$library] = filemtime($filename);
	        }

	    $substitutions[0] = _SET_LIBRARIES_PUBLICPATH;

        foreach (glob(_SET_LIBRARIES_PUBLICPATH . "*.php") as $filename) // scans plugins directory
            if (!substr_count($filename, "_"))
            {
                $library = str_replace($substitutions,
                                       '',
                                       $filename);
                $libraries[$library] = filemtime($filename);
            }

        ksort($libraries);

        return $libraries;
	}

	static function get_components_list()
	{
	    $components = array();

	    $substitutions = array
	    (
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

	static function get_class_data(reflectionClass $class)
	{
	    $header = "Class " . strtoupper($class->name)
	            . " (" . date('r', filemtime($class->getFileName())) . ")";

	    $class_constants = '';
	    foreach ($class->getConstants() as $key => $value)
	        if (substr($key, 0, 1) != '_')
	            $class_constants .= "- **" . $key . "** &#10140; "
	                              . fv($value) . MD_NEWLINE_SEQUENCE;

	    $reference = '';
	    foreach ($class->getMethods() as $method)
	        $reference .= self::_get_methods_information($method);

	    $dependencies = array(); // this block, to be moved..
	    foreach (self::get_libraries_list() as $key => $value)
	         $dependencies[$key] = 0;
	    $class_code = self::get_class_code($class);
	    foreach ($class_code as $code_line)
	        foreach ($dependencies as $key => $value)
	            if (substr_count($code_line, $key . '::'))
	                $dependencies[$key]++;
        $dependencies = array_filter($dependencies);
        ksort($dependencies);
        if (!empty($dependencies))
            $dependencies = implode(", ", array_flip($dependencies))
                          . MD_NEWLINE_SEQUENCE;
        else
            $dependencies = '';

	    $class_todos = '';
	    foreach ($class->getStaticPropertyValue('todos') as $key => $value)
	        $class_todos .= "- **" . $key . "** &#10140; " . $value
	                      . MD_NEWLINE_SEQUENCE;

	    return array
	    (
	        'header' => $header,
	        'class_constants' => $class_constants,
	        'reference' => $reference,
	        'dependencies' => $dependencies,
	        'class_todos' => $class_todos,
	    );
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
	    $parameters = (($count = count($method->getParameters())) > 1
	                  ? $count - 1
	                  : 0); // should be an array with infos?

	    $length = $method->getEndLine() - $method->getStartLine()
	            - $parameters - ($method->isAbstract() ? 0 : 2); // modifier

	    $code = array_slice(self::get_class_code($method->getDeclaringClass()),
	                        $method->getEndLine() - $length - 1,
	                        $length);

	    $length_warning = 0;
	    $cyc = 0;
        foreach ($code as $code_line)
        {
            if (self::_is_too_long($code_line))
                $length_warning++;

            foreach (self::$_cyc_counters as $counter)
                $cyc += substr_count($code_line[0], $counter);
        }

        return array
        (
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
    	     . str_repeat(MD_NEWLINE_SEQUENCE, 4)
	         . md::text(_STR_COPYRIGHT_SIGNATURE);
	}
}

?>