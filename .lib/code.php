<?php

class code
{
	public static $todos = array
    (
        'summary with links' => "generate automatic index with doc + meta links and warnings..",
        'code analysis' => "load, analyse, printing and more.. use toolbox class?",
        'methods lists' => "add parameter class type information, also for aliases",
        'github wiki documentation' => "generate wiki pages with md syntax and update",
        'add code-testing methods' => "using phpunit to autobuild and execute tests",
        'semantic documentation' => "generate human-friendly doc from methods code..",
        'get_class_dependencies' => "too unaccurate, navigator-controller, only explicit new, etc.",
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
	    " ? ",
	    "\n? ",
	    "\r? ",
	    "\t? ",
	);

	private static $_summary = array();

	private static function _is_too_long($code_line)
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
	               . md::title(3, "General reference");
	    /* general-reference--

	    Markdown supports two style of links: inline and reference.

In both styles, the link text is delimited by [square brackets].

To create an inline link, use a set of regular parentheses immediately after the link text’s closing square bracket. Inside the parentheses, put the URL where you want the link to point, along with an optional title for the link, surrounded in quotes. For example:

This is [an example](http://example.com/ "Title") inline link.

[This link](http://example.net/) has no title attribute.

Will produce:

<p>This is <a href="http://example.com/" title="Title">
an example</a> inline link.</p>

<p><a href="http://example.net/">This link</a> has no
title attribute.</p>

If you’re referring to a local resource on the same server, you can use relative paths:

See my [About](/about/) page for details.

Reference-style links use a second set of square brackets, inside which you place a label of your choosing to identify the link:

This is [an example][id] reference-style link.

You can optionally use a space to separate the sets of brackets:

This is [an example] [id] reference-style link.

Then, anywhere in the document, you define your link label like this, on a line by itself:

[id]: http://example.com/  "Optional Title Here"

That is:

    Square brackets containing the link identifier (optionally indented from the left margin using up to three spaces);
    followed by a colon;
    followed by one or more spaces (or tabs);
    followed by the URL for the link;
    optionally followed by a title attribute for the link, enclosed in double or single quotes, or enclosed in parentheses.

The following three link definitions are equivalent:

[foo]: http://example.com/  "Optional Title Here"
[foo]: http://example.com/  'Optional Title Here'
[foo]: http://example.com/  (Optional Title Here)

Note: There is a known bug in Markdown.pl 1.0.1 which prevents single quotes from being used to delimit link titles.

The link URL may, optionally, be surrounded by angle brackets:

[id]: <http://example.com/>  "Optional Title Here"

You can put the title attribute on the next line and use extra spaces or tabs for padding, which tends to look better with longer URLs:

[id]: http://example.com/longish/path/to/resource/here
    "Optional Title Here"

Link definitions are only used for creating links during Markdown processing, and are stripped from your document in the HTML output.

Link definition names may consist of letters, numbers, spaces, and punctuation — but they are not case sensitive. E.g. these two links:

[link text][a]
[link text][A]

are equivalent.

The implicit link name shortcut allows you to omit the name of the link, in which case the link text itself is used as the name. Just use an empty set of square brackets — e.g., to link the word “Google” to the google.com web site, you could simply write:

[Google][]

And then define the link:

[Google]: http://google.com/

Because link names may contain spaces, this shortcut even works for multiple words in the link text:

Visit [Daring Fireball][] for more information.

And then define the link:

[Daring Fireball]: http://daringfireball.net/

Link definitions can be placed anywhere in your Markdown document. I tend to put them immediately after each paragraph in which they’re used, but if you want, you can put them all at the end of your document, sort of like footnotes.

Here’s an example of reference links in action:

I get 10 times more traffic from [Google] [1] than from
[Yahoo] [2] or [MSN] [3].

  [1]: http://google.com/        "Google"
  [2]: http://search.yahoo.com/  "Yahoo Search"
  [3]: http://search.msn.com/    "MSN Search"

Using the implicit link name shortcut, you could instead write:

I get 10 times more traffic from [Google][] than from
[Yahoo][] or [MSN][].

  [google]: http://google.com/        "Google"
  [yahoo]:  http://search.yahoo.com/  "Yahoo Search"
  [msn]:    http://search.msn.com/    "MSN Search"

Both of the above examples will produce the following HTML output:

<p>I get 10 times more traffic from <a href="http://google.com/"
title="Google">Google</a> than from
<a href="http://search.yahoo.com/" title="Yahoo Search">Yahoo</a>
or <a href="http://search.msn.com/" title="MSN Search">MSN</a>.</p>

For comparison, here is the same paragraph written using Markdown’s inline link style:

I get 10 times more traffic from [Google](http://google.com/ "Google")
than from [Yahoo](http://search.yahoo.com/ "Yahoo Search") or
[MSN](http://search.msn.com/ "MSN Search").

The point of reference-style links is not that they’re easier to write. The point is that with reference-style links, your document source is vastly more readable. Compare the above examples: using reference-style links, the paragraph itself is only 81 characters long; with inline-style links, it’s 176 characters; and as raw HTML, it’s 234 characters. In the raw HTML, there’s more markup than there is text.

With Markdown’s reference-style links, a source document much more closely resembles the final output, as rendered in a browser. By allowing you to move the markup-related metadata out of the paragraph, you can add links without interrupting the narrative flow of your prose.
*/

	    return $summary;
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
	            if (!empty($class_constants))
	                $classes .= md::title(3, "Class configuration constants:")
	                          . $class_constants . MD_NEWLINE_SEQUENCE; // unprotected (no '_XXX') constants here
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

	private static function _get_component_information($name)
	{
	    extract(self::get_class_data(new ReflectionClass($name)));

	    $component = md::title(2, $header);
	    if (!empty($class_constants))
	        $component .= md::title(3, "Class configuration constants:")
	                    . $class_constants . MD_NEWLINE_SEQUENCE; // unprotected (no '_XXX') constants here
	    if (!empty($reference))
	        $component .= md::title(3, "Code reference:")
	                    . $reference .MD_NEWLINE_SEQUENCE;
	    if (!empty($dependencies))
	        $component .= md::title(3, "Dependencies:")
	                    . "Uses: " . $dependencies . MD_NEWLINE_SEQUENCE;
	    if (!empty($class_todos))
	        $component .= md::title(3, "TODOs")
	                    . $class_todos . MD_NEWLINE_SEQUENCE;

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
	        return implode(", ",
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

	    $class_todos = '';
	    foreach ($class->getStaticPropertyValue('todos') as $key => $value)
	        $class_todos .= "- **" . $key . "** &#10140; " . $value
	                      . MD_NEWLINE_SEQUENCE;

	    return array
	    (
	        'header' => $header,
	        'class_constants' => $class_constants,
	        'reference' => $reference,
	        'dependencies' => self::get_class_dependencies($class),
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
	    $parameters = self::_list_method_parameters($method);

	    $real_length = $length = $method->getEndLine() - $method->getStartLine()
	                         - (($count = count($parameters) > 1)
	                           ? $count - 1
	                           : 0) - ($method->isAbstract() ? 0 : 2); // modifier

	    $code = array_slice(file($method->getDeclaringClass()->getFileName()),
	                        $method->getEndLine() - $length - 1,
	                        $length);

	    $length_warning = 0;
	    $cyc = 0;
        foreach ($code as $code_line)
        {
            if (self::_is_too_long($code_line))
                $length_warning++;

            $code_line = trim($code_line);
            if (empty($code_line))
                $real_length--;

            foreach (self::$_cyc_counters as $counter)
                $cyc += substr_count($code_line, $counter);
        }

        return array
        (
		    'parameters' => $parameters,
            'parameters_warning' => count($parameters) - MAX_PARAMETERS_COMPLEXITY,
		    'length' => $length,
            'code' => $code,
            'real_length' => $real_length,
            'length_warning' => $length_warning,
            'cyc' => $cyc,
		);
	}

	static function get_documentation()
	{
	    $title = md::image(_SET_INCLUDES_PATH . "img/schrimp_favicon_md.ico")
	           . " " . _STR_PROJECT_NAME . "'s Documentation "
	    	   . main::get_version(1) . date('.Y.m.d');

	    $documentation = md::title(2, "General reference")
            	         . md::title(3, "Global configuration constants")
            	           . self::_get_constants_information()
            	         . md::title(3, "Function aliases")
            	           . self::_get_functions_information() // add more information
            	         . md::title(3, 'TODOs')
            	           . self::_get_todos_information()
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