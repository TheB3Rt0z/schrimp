<?php

class code
{
	public static $todos = array
    (
        'code analysis' => "load, analyse, printing and more.. with toolbox&dokuhelper?",
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

	static function get_components($components = array())
	{
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

	static function get_documentation()
	{
	    $title = md::image(_SET_INCLUDES_PATH . "img/schrimp_favicon_md.ico")
	    . " " . _STR_PROJECT_NAME . "'s Documentation "
	    	       . main::get_version(1) . date('.Y.m.d');

	    $consts_list = '';
	    $constants = get_defined_constants(true);
	    $user_consts = $constants['user'];
	    ksort($user_consts);
	    foreach ($user_consts as $key => $value)
	        if (substr($key, 0, 1) != '_')
	        $consts_list .= "- **" . $key . "** &#10140; " . fv($value) . "\n";

	    $funcs_list = '';
	    $functions = get_defined_functions();
	    $user_funcs = $functions['user'];
	    sort($user_funcs);
	    foreach ($user_funcs as $function)
	    {
	        $function = new ReflectionFunction($function);
	        $doc_comment = $function->getDocComment();
	        $parameters = array();
	        foreach ($function->getParameters() as $parameter)
	            $parameters[] = "$" . $parameter->getName()
	            . ($parameter->isOptional()
	                    ? " = '" . $parameter->getDefaultValue() . "'" // to be formatted like costants
	                    : '');
	        $funcs_list .= "- **" . $function->getName() . "("
	                . implode($parameters, ", ") . ")** &#10140; "
	                        . str_replace(realpath('') . "/",
	                                '',
	                                $function->getFileName())
	                                . " on line " . $function->getStartLine()
	                                . ($doc_comment
	                                        ? "," . trim(str_replace(array("*", "/"),
	                                                '',
	                                                $doc_comment), " ")
	                                        : '') . "\n";
	    }

	    $todos_list = '';
	    foreach (unserialize(_TODOS) as $key => $value)
	        $todos_list .= "- **" . $key . "** &#10140; " . $value . "\n";

	    $classes_list = '';
	    $declared_classes = get_declared_classes();
	    asort($declared_classes);
	    foreach ($declared_classes as $class)
	    {
	        $class = new ReflectionClass($class);
	        if ($class->isUserDefined())
	        {
	            $class_code = file(($class->name != 'main'
	                    ? (file_exists(_SET_LIBRARIES_PATH . $class->name . ".php")
	                            ? "."
	                            : '') . _SET_LIBRARIES_PUBLICPATH
	                    : '.') . $class->name . ".php");

	            $class_consts = '';
	            foreach ($class->getConstants() as $key => $value)
	                if (substr($key, 0, 1) != '_')
	                $class_consts .= "- **" . $key . "** &#10140; "
	                        . fv($value) . "\n";

	            $reference = '';
	            foreach ($class->getMethods() as $method)
	            {
	                $parameters = $method->getParameters();
	                $num_params = ((count($parameters) > 1)
	                        ? count($parameters) - 1
	                        : 0);
	                $length = $method->getEndLine() - $method->getStartLine()
	                - $num_params - ($method->isAbstract() ? 0 : 2);
	                $method_code = array_slice($class_code,
	                        $method->getEndLine() - $length - 1,
	                        $length);
	                $length_warning = false;
	                $cyc = 0;
	                foreach ($method_code as $code_line)
	                {
	                    $code_line = explode(" // ", $code_line);
	                    if (strlen(str_replace("\t", '    ', $code_line[0])) > MAX_BLOCK_COMPLEXITY)
	                        $length_warning = true;

	                    foreach (self::$_cyc_counters as $counter)
	                        $cyc += substr_count($code_line[0], $counter);
	                }
	                $reference .= "- **" . $method->getName() . "** ("
	                        . ($method->isConstructor() ? "C" : '')
	                        . ($method->isPrivate() ? "Pri" : '')
	                        . ($method->isProtected() ? "Pro" : '')
	                        . ($method->isPublic() ? "Pub" : '')
	                        . ($method->isStatic() ? "S" : '')
	                        . ($method->isAbstract() ? "A" : '')
	                        . ($length_warning
	                                ? " " . md::image(_SET_INCLUDES_PATH . "img/icon_16x16_blueboh.png")
	                                : ",")
	                                . " Len: " . $length . " "
	                                        . ($length <= (floor(MAX_METHODS_COMPLEXITY / 10) * 10)
	                                                ? md::image(_SET_INCLUDES_PATH . "img/icon_16x16_greenok.png")
	                                                : ($length <= MAX_METHODS_COMPLEXITY
	                                                        ? md::image(_SET_INCLUDES_PATH . "img/icon_16x16_yellowops.png")
	                                                        : md::image(_SET_INCLUDES_PATH . "img/icon_16x16_redics.png")))
	                                                        . ($cyc ? " CyC: " . $cyc . " "
	                                                                . ($cyc <= (floor(MAX_CYCLOMATIC_COMPLEXITY / 10) * 10)
	                                                                        ? md::image(_SET_INCLUDES_PATH . "img/icon_16x16_greenok.png")
	                                                                        : ($cyc <= MAX_CYCLOMATIC_COMPLEXITY
	                                                                                ? md::image(_SET_INCLUDES_PATH . "img/icon_16x16_yellowops.png")
	                                                                                : md::image(_SET_INCLUDES_PATH . "img/icon_16x16_redics.png")))
	                                                                : '')
	                                                                . ")\n";
	            }

	            $dependences = '';

	            $class_todos = '';
	            foreach ($class->getStaticPropertyValue('todos') as $key => $value)
	                $class_todos .= "- **" . $key . "** &#10140; " . $value . "\n";

	            $heading = "Class " . strtoupper($class->name)
	            . " (" . date('r', filemtime($class->getFileName())) . ")";

	            $classes_list .= md::title(2, $heading)
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
	    }

	    $components = md::title(2, "Available components:");
	    foreach (self::get_components() as $component => $uts)
	        $components .= md::title(3, $component . " (" . date('r', $uts) . ")");
	    $components .= md::hr();

	    return md::title(1, $title)
	    . md::title(2, "General reference")
	    . md::title(3, "Global configuration constants")
	    . $consts_list . MD_NEWLINE_SEQUENCE
	    . md::title(3, "Function aliases")
	    . $funcs_list . MD_NEWLINE_SEQUENCE // add more information
	    . md::title(3, 'TODOs')
	    . $todos_list . MD_NEWLINE_SEQUENCE
	    . md::hr()
	    . $classes_list
	    . $components // adding more information?
	    . str_repeat("\n", 4) . md::text(_STR_COPYRIGHT_SIGNATURE);
	}
}

?>