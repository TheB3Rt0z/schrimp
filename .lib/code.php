<?php

class code
{
    public static $todos = array
    (
        'code analysis' => "load, analyse, printing and more.. use toolbox class?",
        'methods lists' => "add parameter class information, also for aliases",
        'github wiki docs' => "generate wiki pages with md syntax and update",
        'add code-testing methods' => "usephpunit to autobuild and execute tests",
        'get_class_dependencies' => "too unaccurate, see navigator-controller",
        'get_class_dependencies 2' => "it should count, then order dependencies",
        'inherited methods' => "create another list, just after first one",
    );

    const _STR_SUMMARY_BLUE = "Method(s) with too many parameters?";
    const _STR_SUMMARY_YELLOW = "Attention! Some yellow alert(s)!";
    const _STR_SUMMARY_RED = "Warning! Warning! Some red alert(s)!";
    const _STR_LENGTH_WARNING = "Method's length could be reduced..";
    const _STR_LENGTH_ERROR = "Method's length should be reduced!";
    const _STR_CYC_WARNING = "Method's cyclomatic complexity could be reduced..";
    const _STR_CYC_ERROR = "Method's cyclomatic complexity should be reduced!";
    const _STR_CIS_WARNING = "Class interface size could lead to a refactoring";
    const _STR_CIS_ERROR = "Class interface size should lead to a refactoring!";

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
        " ? ",
        "\n? ",
        "\r? ",
        "\t? ",
    );

    private static $_summary = array();

    private static $_class_warnings = array();

    private static function _add_summary_entry($data)
    {
        $href = strtolower(str_replace(" ",
                                       "-",
                                       str_replace(array("(", ",", ":", "+", ")"),
                                                   '',
                                                   $data['header'])));

        self::$_summary["#-" . $href . "--"] = array
        (
            'label' => $data['label'],
            'path' => $data['path'],
            'length_warning' => $data['length_warning'],
            'real_length' => $data['real_length'],
            'length' => $data['length'],
            'cis' => $data['cis'],
            'class_name' => $data['class_name'],
            'todos' => $data['todos'],
        );
    }

    private static function _get_class_markers($class_name)
    {
        $output = '';

        if (!empty(self::$_class_warnings[$class_name]['blue'])
            || !empty(self::$_class_warnings[$class_name]['yellow'])
            || !empty(self::$_class_warnings[$class_name]['red']))
        {
            $output .= "&#10140; ";
        }

        if (!empty(self::$_class_warnings[$class_name]['blue']))
            $output .= " " . self::$_class_warnings[$class_name]['blue'] . " "
                     . md::blue_boh(self::_STR_SUMMARY_BLUE);

        if (!empty(self::$_class_warnings[$class_name]['yellow']))
            $output .= " " . self::$_class_warnings[$class_name]['yellow'] . " "
                     . md::yellow_ops(self::_STR_SUMMARY_YELLOW);

        if (!empty(self::$_class_warnings[$class_name]['red']))
            $output .= " " . self::$_class_warnings[$class_name]['red'] . " "
                     . md::red_ics(self::_STR_SUMMARY_RED);

        return $output;
    }

    private static function _get_class_constants(reflectionClass $class)
    {
        $class_constants = '';

        foreach ($class->getConstants() as $key => $value)
            if (substr($key, 0, 1) != '_')
                $class_constants .= "- **" . $key . "** &#10140; "
                                  . fv($value) . MD_NEWLINE_SEQUENCE;

        return $class_constants;
    }

    private static function _get_class_reference(reflectionClass $class)
    {
        $reference = '';

        $class_methods = $class->getMethods();

        usort($class_methods, function($a, $b)
                              {
                                  return $a->name > $b->name;
                              });

        foreach ($class_methods as $method)
            $reference .= self::_get_methods_information($method);

        return $reference;
    }

    private static function _get_class_todos(reflectionClass $class)
    {
        $class_todos = '';

        foreach ($class->getStaticPropertyValue('todos') as $key => $value)
            $class_todos .= "- **" . $key . "** &#10140; " . $value
                          . MD_NEWLINE_SEQUENCE;

        return $class_todos;
    }

    private static function _add_paragraph($data,
                                           $title)
    {
        if (!empty($data))
            return md::title(3,
                             $title)
                 . $data
                 . MD_NEWLINE_SEQUENCE;
    }

    private static function _get_cyc_marker($cyc)
    {
        if ($cyc <= (floor(MAX_CYCLOMATIC_COMPLEXITY / 10) * 10))
            return md::green_ok();
        elseif ($cyc <= MAX_CYCLOMATIC_COMPLEXITY)
            return md::yellow_ops(self::_STR_CYC_WARNING);
        else
            return md::red_ics(self::_STR_CYC_ERROR);
    }

    private static function _is_codeline_too_long($code_line)
    {
        $code_line = explode(" // ", $code_line); // avoid calculating comments

        return strlen(str_replace("\t", // avoid undesired tabs
                                  '    ', // 1 tab = 4 spaces
                                  $code_line[0])) > MAX_BLOCK_COMPLEXITY;
    }

    private static function _list_method_parameters(reflectionMethod $method)
    {
        $parameters = array();

        foreach ($method->getParameters() as $parameter)
            $parameters[] = "$" . $parameter->getName()
                          . ($parameter->isOptional()
                            ? " = " . fv($parameter->getDefaultValue())
                            : '');

        return $parameters;
    }

    private static function _get_summary_information()
    {
        $summary = md::title(2, "Table of contents")
                   . md::hyperlink("General reference",
                                   '#general-reference--')
                   . MD_NEWLINE_SEQUENCE;

        foreach (self::$_summary as $key => $values)
            $summary .= md::hyperlink($values['label'],
                                      $key)
                      . (!empty($values['todos'])
                        ? " " . str_repeat("&#10029;",
                                           $values['todos']) . " "
                        : '')
                      . " (" . $values['path']
                      . (!empty($values['length_warning'])
                        ? " " . md::blue_boh($values['length_warning']
                        . " too long line(s) found!")
                        : ",")
                      . " Len: "
                      . $values['real_length'] . "/" . $values['length']
                      . ", CIS: " . $values['cis'] . " "
                      . ($values['cis'] <= floor(MAX_METHODS_COMPLEXITY / 10) * 10
                        ? ($values['cis'] > 0
                          ? md::green_ok()
                          : '')
                        : ($values['cis'] <= MAX_METHODS_COMPLEXITY
                          ? md::yellow_ops(self::_STR_CIS_WARNING)
                          : md::red_ics(self::_STR_CIS_ERROR))) . ") "
                      . self::_get_class_markers($values['class_name'])
                      . MD_NEWLINE_SEQUENCE;

        return $summary . MD_NEWLINE_SEQUENCE;
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
                                ? " = " . fv($parameter->getDefaultValue())
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

        return "- **" . $method->getName() . "("
             . ($parameters_warning >= 0
               ? md::blue_boh("too many parameters used! (+"
                            . ($parameters_warning + 1) . ")") . " "
               : '')
             . implode($parameters, ", ") . ")** ("
             . self::get_method_status($method)
             . (!empty($length_warning)
               ? " " . md::blue_boh($length_warning . " too long line(s) found!")
               : ",")
             . " Len: " . ($length > 0
                          ? (($real_length != $length)
                            ? $real_length . "/"
                            : '') . $length
                          : '-') . " "
             . ($length <= (floor(MAX_METHODS_COMPLEXITY / 10) * 10)
               ? ($length > 0
                 ? md::green_ok()
                 : '')
               : ($length <= MAX_METHODS_COMPLEXITY
                 ? md::yellow_ops(self::_STR_LENGTH_WARNING)
                 : md::red_ics(self::_STR_LENGTH_ERROR)))
             . ($cyc > 0
               ? " CyC: " . $cyc . " " . self::_get_cyc_marker($cyc)
               : '')
             . ")" . MD_NEWLINE_SEQUENCE;
    }

    private static function _get_classes_information($classes = '')
    {
        $declared_classes = get_declared_classes();
        asort($declared_classes);
        foreach ($declared_classes as $class)
            if (($class = new ReflectionClass($class)) // name converted to reflection class
                && $class->isUserDefined())
            {
                extract(self::get_class_data($class));

                $classes .= md::to_the_top() . " " . md::title(2, $header)
                          . self::_add_paragraph($class_constants,
                                                 "Class configuration constants:")
                          . self::_add_paragraph($reference,
                                                 "Code reference:")
                          . self::_add_paragraph($dependencies,
                                                 "Dependencies:")
                          . self::_add_paragraph($class_todos,
                                                 "TODOs")
                          . md::hr();

                self::_add_summary_entry(array(
                    'header' => $header,
                    'label' => "Library " . $class->getName(),
                    'path' => $class_path,
                    'length_warning' => $length_warning,
                    'real_length' => $real_length,
                    'length' => $length,
                    'cis' => $cis,
                    'class_name' => $class->getName(),
                    'todos' => count($class->getStaticPropertyValue('todos')),
                ));
            }

        return $classes . MD_NEWLINE_SEQUENCE;
    }

    private static function _get_component_information($name)
    {
        $class = new ReflectionClass($name);

        extract(self::get_class_data($class));

        $component = md::to_the_top() . " " . md::title(2, $header)
                   . self::_add_paragraph($class_constants,
                                          "Class configuration constants:")
                   . self::_add_paragraph($reference,
                                          "Code reference:")
                   . self::_add_paragraph($dependencies,
                                          "Dependencies:")
                   . self::_add_paragraph($class_todos,
                                          "TODOs");

        self::_add_summary_entry(array(
            'header' => $header,
            'label' => (substr_count($name, "_")
                       ? "-"
                       : "Component") . " " . $name,
            'path' => $class_path,
            'length_warning' => $length_warning,
            'real_length' => $real_length,
            'length' => $length,
            'cis' => $cis,
            'class_name' => $name,
            'todos' => count($class->getStaticPropertyValue('todos')),
        ));

        return $component;
    }

    private static function _get_components_information()
    {
        $components = md::title(1, "Available components:");

        foreach (self::get_components_list() as $component => $uts)
        {
            if (fe(_SET_APPLICATION_PATH . $component . ".php"))
                require_once _SET_APPLICATION_PATH . $component . ".php";
            else
                require_once _SET_APPLICATION_PUBLICPATH . $component . ".php";

            $components .= self::_get_component_information($component);

            $helper = $component . "_helper";
            if (fe(_SET_APPLICATION_PATH . $helper . ".php"))
            {
                require_once _SET_APPLICATION_PATH . $helper . ".php";
                $components .= self::_get_component_information($helper);
            }
            elseif (fe(_SET_APPLICATION_PUBLICPATH . $helper . ".php"))
            {
                require_once _SET_APPLICATION_PUBLICPATH . $helper . ".php";
                $components .= self::_get_component_information($helper);
            }

            $components .= md::hr();
        }

        return $components . MD_NEWLINE_SEQUENCE;
    }

    private static function _update_class_warnings($class_name,
                                                   $parameters,
                                                   $length,
                                                   $cyc)
    {
        if (empty(self::$_class_warnings[$class_name]))
            self::$_class_warnings[$class_name] = array
            (
                'blue' => 0,
                'yellow' => 0,
                'red' => 0,
            );

        if ((count($parameters) - MAX_PARAMETERS_COMPLEXITY) >= 0)
            self::$_class_warnings[$class_name]['blue']++;

        if ($length > (floor(MAX_METHODS_COMPLEXITY / 10) * 10))
        {
            if ($length <= MAX_METHODS_COMPLEXITY)
                self::$_class_warnings[$class_name]['yellow']++;
            else
                self::$_class_warnings[$class_name]['red']++;
        }

        if ($cyc > (floor(MAX_CYCLOMATIC_COMPLEXITY / 10) * 10))
        {
            if ($cyc <= MAX_CYCLOMATIC_COMPLEXITY)
                self::$_class_warnings[$class_name]['yellow']++;
            else
                self::$_class_warnings[$class_name]['red']++;
        }
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

    static function get_libraries_list($exclude = null)
    {
        $libraries = array('main' => filemtime(".main.php")); // hardcoded? mmm..

        $substitutions = array
        (
            _SET_LIBRARIES_PATH,
            _SET_LIBRARIES_PUBLICPATH,
            ".php",
        );

        foreach (glob(_SET_LIBRARIES_PATH . "*.php") as $filename) // scans core directory
            if (!substr_count($filename, "_"))
                $libraries[str_replace($substitutions,
                                       '',
                                       $filename)] = filemtime($filename);

        foreach (glob(_SET_LIBRARIES_PUBLICPATH . "*.php") as $filename) // scans plugins directory
            if (!substr_count($filename, "_"))
                $libraries[str_replace($substitutions,
                                       '',
                                       $filename)] = filemtime($filename);

        ksort($libraries);

        if (!empty($libraries[$exclude]))
            unset($libraries[$exclude]);

        return $libraries;
    }

    static function get_components_list()
    {
        $components = array();

        $substitutions = array
        (
            _SET_APPLICATION_PATH,
            _SET_APPLICATION_PUBLICPATH,
            ".php",
        );

        foreach (glob(_SET_APPLICATION_PATH . "*.php") as $filename) // scans modules directory
            if (!substr_count($filename, "_"))
                $components[str_replace($substitutions,
                                        '',
                                        $filename)] = filemtime($filename);

        foreach (glob(_SET_APPLICATION_PUBLICPATH . "*.php") as $filename) // scans application directory
            if (!substr_count($filename, "_"))
                $components[str_replace($substitutions,
                                        '',
                                        $filename)] = filemtime($filename);

        ksort($components);

        return $components;
    }

    static function get_class_dependencies(reflectionClass $class)
    {
        $dependencies = array(); // calculation is imprecise..

        foreach (self::get_libraries_list($class->name) as $key => $value)
            $dependencies[$key] = 0;

        foreach (file($class->getFileName()) as $code_line)
            foreach ($dependencies as $key => $value)
                if (substr_count($code_line, $key . '::')
                    || substr_count($code_line, ' new ' . $key))
                {
                    $dependencies[$key]++;
                }

        $dependencies = array_filter($dependencies);

        ksort($dependencies);

        if (!empty($dependencies))
            return "Uses: "
                 . implode(", ",
                           array_map(function($value)
                                     {
                                         return "**" . $value . "**";
                                     },
                                     array_keys($dependencies)))
                 . MD_NEWLINE_SEQUENCE;
        else
            return null;
    }

    static function get_class_data(reflectionClass $class)
    {
        $data['header'] = "Class " . strtoupper($class->name)
                        . " (" . date('r', filemtime($class->getFileName())) . ")";

        $data['class_constants'] = self::_get_class_constants($class);
        $data['reference'] = self::_get_class_reference($class);
        $data['dependencies'] = self::get_class_dependencies($class);
        $data['class_todos'] = self::_get_class_todos($class);

        $data['class_path'] = "root" . str_replace(realpath(null),
                                                   '',
                                                   $class->getFileName());

        $data['real_length'] =
             $data['length'] = $class->getEndLine() - $class->getStartLine() - 2;

        $data['code'] = array_slice(file($class->getFileName()),
                                    $class->getStartLine() + 1, // indentation + parentheses
                                    $data['length']);

        $data['length_warning'] = 0;
        foreach ($data['code'] as $code_line)
        {
             if (self::_is_codeline_too_long($code_line))
                $data['length_warning']++;

            $code_line = trim($code_line);
            if (empty($code_line))
                $data['real_length']--;
        }

        $class_properties = $class->getProperties(ReflectionProperty::IS_PUBLIC);
        foreach ($class_properties as $key => $property)
            if ($property->class != $class->name)
                unset($class_properties[$key]);

        $class_methods = $class->getMethods(ReflectionMethod::IS_PUBLIC);
        foreach ($class_methods as $key => $method)
            if ($method->class != $class->name)
                unset($class_methods[$key]);

        $data['cis'] = count($class_properties) + count($class_methods);

        return $data;
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
        $data['parameters'] = self::_list_method_parameters($method);
        $data['parameters_warning'] = count($data['parameters'])
                                    - MAX_PARAMETERS_COMPLEXITY;

        $data['real_length'] =
             $data['length'] = $method->getEndLine() - $method->getStartLine()
                             - (($count = count($data['parameters']) > 1)
                               ? $count - 1
                               : 0) - ($method->isAbstract() ? 0 : 2); // modifier

        $data['code'] = array_slice(file($method->getFileName()),
                                    $method->getEndLine() - $data['length'],
                                    $data['length'] - 1);

        $data['length_warning'] = 0;
        $data['cyc'] = 0;
        foreach ($data['code'] as $code_line)
        {
            if (self::_is_codeline_too_long($code_line))
                $data['length_warning']++;

            $code_line = trim($code_line);
            if (empty($code_line))
                $data['real_length']--;

            foreach (self::$_cyc_counters as $counter)
                $data['cyc'] += substr_count($code_line, $counter);
        }

        self::_update_class_warnings($method->getDeclaringClass()->getName(),
                                     $data['parameters'],
                                     $data['length'],
                                     $data['cyc']);

        return $data;
    }

    static function get_documentation()
    {
        $title = md::image(_SET_INCLUDES_PATH . "img/schrimp_favicon_md.ico")
               . " " . _STR_PROJECT_NAME . "'s Documentation "
               . main::get_version(1) . date('.Y.m.d');

        $documentation = md::title(2, "General reference")
                       . self::_add_paragraph(self::_get_constants_information(),
                                              "Global configuration constants")
                       . self::_add_paragraph(self::_get_functions_information(),
                                              "Function aliases")
                       . self::_add_paragraph(self::_get_todos_information(),
                                              "TODOs")
                       . md::hr()
                       . self::_get_classes_information()
                       . self::_get_components_information() // adding more information?
                     . str_repeat(MD_NEWLINE_SEQUENCE, 4)
                     . md::text(_STR_COPYRIGHT_SIGNATURE);

        return md::title(1, $title)
             . self::_get_summary_information()
             . $documentation;
    }
}

?>
