<?php namespace schrimp;

define('CODE_DATE_FORMAT', "d.m.Y");
define('CODE_ICON_ARROW', "&#10140;");
define('CODE_ICON_TODO', "&#10029;");

define('_CODE_MC_THRESHOLD', floor(MAX_METHODS_COMPLEXITY / 10) * 10);
define('_CODE_CYC_THRESHOLD', floor(MAX_CYCLOMATIC_COMPLEXITY / 7) * 7);

class code
{
    static $todos = array
    (
        'to fix issues' => "add blue (or maybe red?) dot on class/methods names",
        'static files form' => "check backend&component css files + schrimp_*.js",
        'test list in documentation footer' => "see scaffold method for infos",
    );

    static $tests = array();

    const _SET_NS_PREFIX = 'schrimp\\';

    const _STR_SUMMARY_BLUE = "Method(s) with too many parameters?";
    const _STR_SUMMARY_YELLOW = "Attention! Some yellow alert(s)!";
    const _STR_SUMMARY_RED = "Warning! Warning! Some red alert(s)!";
    const _STR_LENGTH_WARNING = "Method's length could be reduced..";
    const _STR_LENGTH_ERROR = "Method's length should be reduced!";
    const _STR_CYC_WARNING = "Method's cyclomatic complexity could be reduced..";
    const _STR_CYC_ERROR = "Method's cyclomatic complexity should be reduced!";
    const _STR_CIS_WARNING = "Class interface size could lead to a refactoring";
    const _STR_CIS_ERROR = "Class interface size should lead to a refactoring!";

    private static $_form_counters = array // encoded as checked on whole class files
    (
        "\t",
        ")%20{\n",
        ")%20{\r",
        ")%20{\r",
            "){\n",
            "){\r",
            "){\t",
            ")%20%20{\n",
            ")%20%20{\r",
            ")%20%20{\t",
        "%20array(%22", // it means "
            "%20array(%20%22",
            "%20array(%20%20%22",
        "%20array(%27", // it means '
            "%20array(%20%27",
            "%20array(%20%20%27",
        "%20array(%24", // it means $
            "%20array(%20%24",
            "%20array(%20%20%24",
        "%20array(\n",
            "%20array(%20\n",
            "%20array(%20%20\n",
        "%20array(\r",
            "%20array(%20\r",
            "%20array(%20%20\r",
        "%20array(\t",
            "%20array(%20\t",
            "%20array(%20%20\t",
        "%20array%20(",
            "array%20%20(",
        "%20array(%20)",
            "%20array(%20%20)",
    );

    private static $_cyc_counters = array // do we really really need failsafe falls?
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
        " & ", // bitwise operator and, bits that are set in both integers are set
            "\n& ",
            "\r& ",
            "\t& ",
        " | ", // bitwise operator or, bits that are set in either integers are set
            "\n| ",
            "\r| ",
            "\t| ",
        " ^ ", // bitwise operator xor, bits that are set in either integers (but not both) are set
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
        $clean_header = str_replace(["(", ",", ".", ":", "+", ")", "@"],
                                    '',
                                    $data['header']);

    	$href = strtolower(str_replace(" ",
        		                       "-",
        	                           $clean_header));

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
            'tofix' => $data['tofix'],
        );
    }

    private static function _get_class_markers($class_name)
    {
        $output = '';

        if (!empty(self::$_class_warnings[$class_name]['blue'])
            || !empty(self::$_class_warnings[$class_name]['yellow'])
            || !empty(self::$_class_warnings[$class_name]['red']))
        {
            $output .= CODE_ICON_ARROW . " ";
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

    private static function _get_class_tofix($tofix,
                                             $class_start,
                                             $class_line)
    {
        return "- Form error(s) **"
               . toolbox::format($tofix)
             . "** on file line **"
               . ($class_start + 2 + $class_line)
             . "**" . MD_NEWLINE_SEQUENCE;
    }

    private static function _get_class_constants(\ReflectionClass $class)
    {
        $class_constants = '';

        foreach ($class->getConstants() as $key => $value)
            if (substr($key, 0, 1) != '_')
                $class_constants .= "- **" . $key . "** " . CODE_ICON_ARROW . " "
                                  . fm($value) . MD_NEWLINE_SEQUENCE;

        return $class_constants;
    }

    private static function _get_class_reference(\ReflectionClass $class)
    {
        $reference = '';

        $class_methods = $class->getMethods();

        usort($class_methods, function($a, $b)
                              {
                                  return $a->name > $b->name;
                              });

        $inherited_methods = array();
        foreach ($class_methods as $method)
        {
            if ($method->class == $class->getName())
                $reference .= self::_get_methods_information($method);
            elseif (!$method->isPrivate()) // we show only usable methods
                $inherited_methods[] = $method;
        }

        if (!empty($inherited_methods))
        {
            $reference .= MD_NEWLINE_SEQUENCE . md::title(3, "Inherited methods:");
            foreach ($inherited_methods as $method)
                $reference .= self::_get_methods_information($method);
        }

        return $reference;
    }

    private static function _get_class_todos(\ReflectionClass $class)
    {
        $class_todos = '';

        foreach ($class->getStaticPropertyValue('todos') as $key => $value)
            $class_todos .= "- **" . $key . "** " . CODE_ICON_ARROW . " " . $value
                          . MD_NEWLINE_SEQUENCE;

        return $class_todos;
    }

    private static function _get_class_tests(\ReflectionClass $class)
    {
        $class_tests = '';

        foreach ($class->getStaticPropertyValue('tests') as $key => $value)
            $class_tests .= ''; // to be continued

        return $class_tests;
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

    private static function _get_clean_doccom(\ReflectionFunction $function)
    {
        $doc_com = $function->getDocComment();

        if (!empty($doc_com))
            return ", **" . trim(str_replace(["*", "/", ";"],
                                             ['', '', '**'],
                                             $doc_com));
    }

    private static function _get_cis_marker($cis)
    {
        if ($cis <= _CODE_MC_THRESHOLD)
        {
            if ($cis > 0)
                return md::green_ok();
            else
                return '';
        }
        elseif ($cis <= MAX_METHODS_COMPLEXITY)
            return md::yellow_ops(self::_STR_CIS_WARNING);
        else
            return md::red_ics(self::_STR_CIS_ERROR);
    }

    private static function _get_len_marker($length)
    {
        if ($length <= _CODE_MC_THRESHOLD)
        {
            if ($length > 0)
                return md::green_ok();
            else
                return '';
        }
        elseif ($length <= MAX_METHODS_COMPLEXITY)
            return md::yellow_ops(self::_STR_LENGTH_WARNING);
        else
            return md::red_ics(self::_STR_LENGTH_ERROR);
    }

    private static function _get_cyc_marker($cyc)
    {
        if ($cyc <= _CODE_CYC_THRESHOLD)
            return md::green_ok();
        elseif ($cyc <= MAX_CYCLOMATIC_COMPLEXITY)
            return md::yellow_ops(self::_STR_CYC_WARNING);
        else
            return md::red_ics(self::_STR_CYC_ERROR);
    }

    private static function _get_class_codedata($code,
                                                $real_length,
                                                $start_line,
                                                $data = array())
    {
        $data['length_warning'] = 0;
        $data['real_length'] = $real_length;
        $data['fixs'] = '';

        foreach ($code as $key => $code_line)
        {
            if (self::_is_codeline_too_long($code_line))
                $data['length_warning']++;

            if (trim($code_line) == '')
                $data['real_length']--;

            foreach (self::$_form_counters as $counter)
                if (substr_count($code_line, rawurldecode($counter)))
                    $data['fixs'] .= self::_get_class_tofix(rawurldecode($counter),
                                                            $start_line,
                                                            $key);
        }

        return $data;
    }

    private static function _is_codeline_too_long($code_line)
    {
        $code_line = explode(" // ", $code_line)[0]; // avoid calculating comments

        return strlen(str_replace("\t", // avoid undesired tabs
                                  '    ', // 1 tab = 4 spaces
                                  $code_line)) > MAX_BLOCK_COMPLEXITY;
    }

    private static function _calculate_codeline_cyc($code_line)
    {
        $cyc = 0;
        foreach (self::$_cyc_counters as $counter)
            $cyc += substr_count(explode(rawurldecode("%20//%20"), $code_line)[0],
                                 $counter);

        return $cyc;
    }

    private static function _list_method_parameters($functional_code)
    {
        $parameters = array();

        foreach ($functional_code->getParameters() as $parameter)
        {
            $class = $parameter->getClass();
            $parameters[] = (!empty($class) ? $class->getName() . " " : '')
                          . "$" . $parameter->getName()
                          . ($parameter->isOptional()
                            ? " = " . fm($parameter->getDefaultValue())
                            : '');
        }

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
                        ? " " . str_repeat(CODE_ICON_TODO,
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
                        . self::_get_cis_marker($values['cis']) . ") "
                      . self::_get_class_markers($values['class_name'])
                      . ($values['tofix'] ? " to be fixed!" : '')
                      . MD_NEWLINE_SEQUENCE;

        return addcslashes($summary,
                           '_') . MD_NEWLINE_SEQUENCE;
    }

    private static function _get_constants_information()
    {
        $constants = '';

        $user_constants = self::get_constants_list(true);
        foreach ($user_constants as $key => $value)
            if (substr($key, 0, 1) != '_')
            {
                $components = explode('_', $key);

                $constants .= "- **" . $key . "** " . CODE_ICON_ARROW . " "
                            . $value . " ("
                            . (class_exists(self::_SET_NS_PREFIX
                                          . strtolower($components[0]))
                              ? "defined by " . $components[0]
                              : "global core constant") . ")"
                            . MD_NEWLINE_SEQUENCE;
            }

        return addcslashes($constants,
                           '_') . MD_NEWLINE_SEQUENCE;
    }

    private static function _get_functions_information($functions = '') // these are aliases..
    {
        $user_functions = self::get_functions_list();
        foreach ($user_functions as $function)
        {
            $function = new \ReflectionFunction($function);

            $parameters = self::_list_method_parameters($function);

            $functions .= "- **" . str_replace(self::_SET_NS_PREFIX,
                                               '',
                                               $function->getName()) . "("
                        . implode($parameters, ", ") . ")** " . CODE_ICON_ARROW
                        . " " . str_replace(realpath('') . "/",
                                            '',
                                            $function->getFileName())
                        . " on line " . $function->getStartLine()
                        . self::_get_clean_doccom($function) . MD_NEWLINE_SEQUENCE;
        }

        return $functions . MD_NEWLINE_SEQUENCE;
    }

    private static function _get_todos_information()
    {
        $todos = '';

        foreach (unserialize(_TODOS) as $key => $value)
            $todos .= "- **" . $key . "** " . CODE_ICON_ARROW . " " . $value
                    . MD_NEWLINE_SEQUENCE;

        return addcslashes($todos,
                           '_') . MD_NEWLINE_SEQUENCE;
    }

    private static function _get_methods_information(\ReflectionMethod $method)
    {
        extract(self::analyse_method($method)); // generates required variables

        $infos = "(" . ($parameters_warning >= 0
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
                            : '-') . " " . self::_get_len_marker($length)
               . ($cyc > 0
                 ? " CyC: " . $cyc . " " . self::_get_cyc_marker($cyc)
                 : '')
               . ")" . MD_NEWLINE_SEQUENCE;

        if (_SET_DEVELOPMENT_MODE) // updates right md in doc directory
            self::_update_wiki_file($class,
                                    $name,
                                    $infos,
                                    $code);

        return "- **" . md::hyperlink($method->getName(),
                                      SET_GITHUB_WIKIPATH
                                    . str_replace(self::_SET_NS_PREFIX,
                                                  '',
                                                  $class) . " " . $name) . $infos;
    }

    private static function _get_class_information(\ReflectionClass $class)
    {
        extract(self::get_class_data($class));

        self::_add_summary_entry(array
        (
            'header' => $header,
            'label' => (substr_count($class->getName(), "_")
                       ? "-"
                       : "Library") . " " . str_replace(self::_SET_NS_PREFIX,
                                                       '',
                                                       $class->getName()),
            'path' => $class_path,
            'length_warning' => $length_warning,
            'real_length' => $real_length,
            'length' => $length,
            'cis' => $cis,
            'class_name' => $class->getName(),
            'todos' => count($class->getStaticPropertyValue('todos')),
            'tofix' => (!empty($fixs)),
        ));

        return md::title(2, $header)
             . self::_add_paragraph($fixs,
                                    "TOFIX:")
             . self::_add_paragraph($class_constants,
                                    "Class configuration constants:")
             . self::_add_paragraph($reference,
                                    "Code reference:")
             . self::_add_paragraph($dependencies,
                                    "Dependencies:")
             . self::_add_paragraph($class_todos,
                                    "TODOs:");
    }

    private static function _get_classes_information($classes = '')
    {
        $declared_classes = get_declared_classes();

        usort($declared_classes, function($a, $b)
                                 {
                                     return str_replace(code::_SET_NS_PREFIX,
                                                        '',
                                                        $a)
                                            >
                                            str_replace(code::_SET_NS_PREFIX,
                                                        '',
                                                        $b);
                                 });

        foreach ($declared_classes as $class)
            if (($class = new \ReflectionClass($class)) // name converted to reflection class
                && $class->isUserDefined()) // this block should be under _register_class_information (return)
                $classes .= md::to_the_top() . " "
                          . self::_get_class_information($class)
                          . md::hr();

        return addcslashes($classes,
                           '_') . MD_NEWLINE_SEQUENCE;
    }

    private static function _get_component_information(\ReflectionClass $class)
    {
        extract(self::get_class_data($class));

        self::_add_summary_entry(array
        (
            'header' => $header,
            'label' => (substr_count($class->name, "_")
                       ? "-"
                       : "Component") . " " . str_replace(self::_SET_NS_PREFIX,
                                                          '',
                                                          $class->name),
            'path' => $class_path,
            'length_warning' => $length_warning,
            'real_length' => $real_length,
            'length' => $length,
            'cis' => $cis,
            'class_name' => $class->name,
            'todos' => count($class->getStaticPropertyValue('todos')),
            'tofix' => (!empty($fixs)),
        ));

        return md::title(2, $header)
             . self::_add_paragraph($fixs,
                                    "TOFIX:")
             . self::_add_paragraph($class_constants,
                                    "Class configuration constants:")
             . self::_add_paragraph($reference,
                                    "Code reference:")
             . self::_add_paragraph($dependencies,
                                    "Dependencies:")
             . self::_add_paragraph($class_todos,
                                    "TODOs:");
    }

    private static function _get_components_information()
    {
        $components = md::title(1, "Available components:");

        foreach (self::get_components_list() as $component => $uts)
        {
            if (!ld(_SET_APPLICATION_PATH . $component . ".php"))
                ld(_SET_APPLICATION_PUBLICPATH . $component . ".php");

            $component_class = new \ReflectionClass((class_exists($component)
                                                    ? $component
                                                    : self::_SET_NS_PREFIX
                                                    . $component));
            $components .= md::to_the_top() . " "
                         . self::_get_component_information($component_class);

            $helper = $component . "_helper";
            if (ld(_SET_APPLICATION_PATH . $helper . ".php")
                && $helper_class = new \ReflectionClass(self::_SET_NS_PREFIX
                                                      . $helper))
                $components .= md::to_the_top() . " "
                             . self::_get_component_information($helper_class);
            elseif (ld(_SET_APPLICATION_PUBLICPATH . $helper . ".php")
                && $helper_class = new \ReflectionClass($helper))
                $components .= md::to_the_top() . " "
                             . self::_get_component_information($helper_class);

            $components .= md::hr();
        }

        return addcslashes($components,
                           '_') . MD_NEWLINE_SEQUENCE;
    }

    private static function _update_class_warning($class_name,
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

        if ($length > _CODE_MC_THRESHOLD)
        {
            if ($length <= MAX_METHODS_COMPLEXITY)
                self::$_class_warnings[$class_name]['yellow']++;
            else
                self::$_class_warnings[$class_name]['red']++;
        }

        if ($cyc > _CODE_CYC_THRESHOLD)
        {
            if ($cyc <= MAX_CYCLOMATIC_COMPLEXITY)
                self::$_class_warnings[$class_name]['yellow']++;
            else
                self::$_class_warnings[$class_name]['red']++;
        }
    }

    private static function _update_wiki_file($class,
                                              $method,
                                              $infos,
                                              $code)
    {
        $file = _SET_WIKI_PATH . str_replace(self::_SET_NS_PREFIX,
                                             '',
                                             $class) . " " . $method . ".md";

        array_walk($code, function(&$value) // cleans code identation before save
        {
            if ($value != "\n")
                $value = substr(str_replace("\t",
                                            "    ",
                                            $value),
                                8);
        });

        $content = "**" . addcslashes($method,
                                      '_') . $infos . MD_NEWLINE_SEQUENCE
                 . code_autodoc::get_autodoc($code) // uses indentation-cleaned code
                 . MD_NEWLINE_SEQUENCE . '```php' . MD_NEWLINE_SEQUENCE
                   . implode($code)
                 . '```';

        file_put_contents(dirname(__FILE__) . '/../' . $file,
                          $content);
    }

    static function get_constants_list($formatted = false)
    {
        $constants_list = get_defined_constants(true);
        $user_constants = $constants_list['user'];
        ksort($user_constants);

        if (!empty($formatted))
            array_walk($user_constants, function(&$value)
                                        {
                                            $value = fm($value);
                                        });

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
        $libraries = array
                     (
                         'main' => filemtime(dirname(__FILE__) . '/../' . ".main.php"), // hardcoded? mmm..
                     );

        $substitutions = [_SET_LIBRARIES_PATH, _SET_LIBRARIES_PUBLICPATH, ".php"];

        foreach (glob(_SET_LIBRARIES_PATH . "*.php") as $filename) // scans core directory
                $libraries[str_replace($substitutions,
                                       '',
                                       $filename)] = filemtime($filename);

        foreach (glob(_SET_LIBRARIES_PUBLICPATH . "*.php") as $filename) // scans plugins directory
                $libraries[str_replace($substitutions,
                                       '',
                                       $filename)] = filemtime($filename);

        $libraries_list = toolbox::filter($libraries,
                                          $exclude);
        ksort($libraries_list);

        return $libraries;
    }

    static function get_components_list()
    {
        $components = array();

        $subs = [_SET_APPLICATION_PATH, _SET_APPLICATION_PUBLICPATH, ".php"];

        foreach (glob(_SET_APPLICATION_PATH . "*.php") as $filename) // scans modules directory
            if (!substr_count($filename, "_"))
                $components[str_replace($subs,
                                        '',
                                        $filename)] = filemtime($filename);

        foreach (glob(_SET_APPLICATION_PUBLICPATH . "*.php") as $filename) // scans application directory
            if (!substr_count($filename, "_"))
                $components[str_replace($subs,
                                        '',
                                        $filename)] = filemtime($filename);

        ksort($components);

        return $components;
    }

    static function get_class_dependencies(\ReflectionClass $class)
    {
        $dependencies = array();

        foreach (self::get_libraries_list($class->name) as $key => $value)
            $dependencies[$key] = 0;
        if ($parent = $class->getParentClass()) // includes extended class if available
            @$dependencies[str_replace(self::_SET_NS_PREFIX, // silent notice not-exists
                                       '',
                                       $parent->name)]++;

        $class_length = $class->getEndLine() - $class->getStartLine() - 2;
        foreach (array_slice(file($class->getFileName()),
                             $class->getStartLine() + 1,
                             $class_length) as $code_line)
            foreach ($dependencies as $key => $value)
                if (substr_count($code_line, $key . '::')
                    || substr_count($code_line, ' = new ' . $key))
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

    static function get_class_data(\ReflectionClass $class)
    {
        $data['header'] = "Class " . strtoupper(str_replace(self::_SET_NS_PREFIX,
                                                            '',
                                                            $class->name))
                        . " (" . date(CODE_DATE_FORMAT,
                                      filemtime($class->getFileName())) . ")";

        $data['class_constants'] = self::_get_class_constants($class);
        $data['reference'] = self::_get_class_reference($class);
        $data['dependencies'] = self::get_class_dependencies($class);
        $data['class_todos'] = self::_get_class_todos($class);
        $data['class_tests'] = self::_get_class_tests($class);

        $data['class_path'] = str_replace(realpath(null) . "/",
                                          '',
                                          $class->getFileName());

        $data['real_length'] =
             $data['length'] = $class->getEndLine() - $class->getStartLine() - 2;

        $data['code'] = array_slice(file($class->getFileName()),
                                    $class->getStartLine() + 1, // indentation + parentheses
                                    $data['length']);

        $data['cis'] = self::get_class_cis($class);

        return array_merge($data,
                           self::_get_class_codedata($data['code'],
                                                     $data['real_length'],
                                                     $class->getStartLine()));
    }

    static function get_class_cis(\ReflectionClass $class)
    {
        $class_properties = $class->getProperties(\ReflectionProperty::IS_PUBLIC);
        foreach ($class_properties as $key => $property)
            if ($property->class != $class->name)
                unset($class_properties[$key]);

        $class_methods = $class->getMethods(\ReflectionMethod::IS_PUBLIC);
        foreach ($class_methods as $key => $method)
            if ($method->class != $class->name)
                unset($class_methods[$key]);

        return count($class_properties) + count($class_methods);
    }

    static function get_method_status(\ReflectionMethod $method)
    {
        return ($method->isConstructor() ? "C" : '')
             . ($method->isPrivate() ? "Pri" : '')
             . ($method->isProtected() ? "Pro" : '')
             . ($method->isPublic() ? "Pub" : '')
             . ($method->isStatic() ? "S" : '')
             . ($method->isAbstract() ? "A" : '')
             . ($method->isFinal() ? "F" : ''); // last 2 should not be used together..
    }

    static function get_method_code(\ReflectionMethod $method,
                                    $highlight = false)
    {
        $parameters = self::_list_method_parameters($method);
        $parameters_warning = count($parameters)
                            - MAX_PARAMETERS_COMPLEXITY;

        $real_length =
             $length = $method->getEndLine() - $method->getStartLine()
                     - ((count($parameters) > 1)
                       ? count($parameters) - 1
                       : 0) - ($method->isAbstract() ? 0 : 2); // modifier

        $code = array_slice(file($method->getFileName()),
                            $method->getEndLine() - $length - 1,
                            $length);

        if ($highlight)
            return toolbox::highlight("<?\n" . implode($code) . "\n?>");
        else
            return array
            (
                'parameters' => $parameters,
                'parameters_warning' => $parameters_warning,
                'real_length' => $real_length,
                'length' => $length,
                'code' => $code,
            );
    }

    static function analyse_method(\ReflectionMethod $method)
    {
        extract(self::get_method_code($method));

        $data['class'] = $method->class;
        $data['name'] = $method->name;
        $data['parameters'] = $parameters;
        $data['parameters_warning'] = $parameters_warning;
        $data['real_length'] = $real_length;
        $data['length'] = $length;
        $data['code'] = $code;

        $data['length_warning'] = 0;
        $data['cyc'] = 0;
        foreach ($data['code'] as $code_line)
        {
            if (trim($code_line) == '')
                $data['real_length']--;

            if (self::_is_codeline_too_long($code_line))
                $data['length_warning']++;

            $data['cyc'] += self::_calculate_codeline_cyc($code_line);
        }

        self::_update_class_warning($method->getDeclaringClass()->getName(),
                                    $data['parameters'],
                                    $data['length'],
                                    $data['cyc']);

        return $data;
    }

    static function get_documentation_title()
    {
        $title = md::image(dirname(__FILE__) . '/../' . _SET_INCLUDES_PATH
        	   . "img/schrimp_favicon_md.ico")
               . " " . _STR_PROJECT_NAME
               . "'s Dokumentation v" . main::get_version(1)
               . HTML_ELEMENTS_SEPARATOR . main::get_timestone();

        return md::title(2, $title);
    }

    static function get_documentation()
    {
        $documentation = md::title(2, "General reference") // only in english
                       . self::_add_paragraph(self::_get_constants_information(),
                                              "Global configuration constants:")
                       . self::_add_paragraph(self::_get_functions_information(),
                                              "Function aliases:")
                       . self::_add_paragraph(self::_get_todos_information(),
                                              "TODOs:")
                       . md::hr()
                       . self::_get_classes_information()
                       . self::_get_components_information(); // adding more information?

        return self::get_documentation_title()
             . self::_get_summary_information()
             . $documentation
             . self::get_documentation_footer();
    }

    static function get_documentation_footer()
    {
         return str_repeat(MD_NEWLINE_SEQUENCE, 4)
              . md::text(_STR_COPYRIGHT_SIGNATURE);
    }
}