![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/schrimp_favicon_md.ico "") Das S.C.H.R.I.M.P.'s Documentation 0.5.2013.03.21  
=========================================================================================================================================  
  
  
General reference  
-----------------  
  
**GLOBAL CONFIGURATION CONSTANTS**  
  
- **DB_TABLE_PREFIX** &#10140; null  
- **HTML_BREADCRUMB_SEPARATOR** &#10140; " &raquo; "  
- **LANGUAGE_FALLBACK_LANG** &#10140; "en"  
- **MAX_BLOCK_COMPLEXITY** &#10140; 84  
- **MAX_CYCLOMATIC_COMPLEXITY** &#10140; 12  
- **MAX_METHODS_COMPLEXITY** &#10140; 36  
- **MAX_PARAMETERS_COMPLEXITY** &#10140; 4  
- **MD_NEWLINE_SEQUENCE** &#10140; "  \n"  
- **SET_COMPLEXITY_INDEX** &#10140; 12  
- **SET_DOCUMENTATION_MD** &#10140; "README"  
- **SET_GITHUB_RAWPATH** &#10140; "https://raw.github.com/TheB3Rt0z/schrimp/master/"  
- **SET_TRANSLATIONS_EXTENSION** &#10140; ".txt"  
  
**FUNCTION ALIASES**  
  
- **fe($path)** &#10140; .main.php on line 270,
  returns boolean if realpath path exists on running server;
  @param string $path
  @return boolean true if realpath exists, false otherwise
  
- **fv($mixed)** &#10140; .lib/toolbox.php on line 36,
  returns a beautiful formatted value, mixed variable-type-dependant;
  @param mixed $mixed
  @return mixed depending on internally defined rules
  
- **le($msg)** &#10140; .main.php on line 300,
  launches a customizable error 500, mit optional backtrace for debug;
  @param string $msg
  @return boolean false after relocate
  
- **rt($url = null)** &#10140; .main.php on line 290,
  relocates to given relative url or to base path on default;
  @param string $url
  @return void
  
- **ru($uri = null)** &#10140; .main.php on line 280,
  returns an absolute uri, based on current server configuration;
  @param string $uri
  @return string absolute http unified resource identifier
  
- **sb()** &#10140; .main.php on line 309,
  show call's backtrace with help of error base handler
  @return void
  
- **tr($component, $marker)** &#10140; .lib/language.php on line 108,
  executes language translation of marker identifier, referring to given component;
  @param string $component
  @param string $marker
  @return mixed callback function returned value(s)
  
- **vd($what)** &#10140; .main.php on line 260,
  returns pre-formatted mixed variables;
  @param mixed $what
  @return void
  
  
**TODOS**  
  
- **? admin bar** &#10140; optional control to measure run time performance (gApis)  
  
  
***  
  
Class CODE (Thu, 21 Mar 2013 18:01:07 +0000)  
--------------------------------------------  
  
**CODE REFERENCE:**  
  
- **_is_too_long($code_line)** (PriS, Len: -  CyC: 50 ![(X)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_red_ics.png "Method's cyclomatic complexity should be reduced!"))  
- **_list_method_parameters($method)** (PriS, Len: -  CyC: 49 ![(X)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_red_ics.png "Method's cyclomatic complexity should be reduced!"))  
- **_get_summary_information()** (PriS, Len: -  CyC: 49 ![(X)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_red_ics.png "Method's cyclomatic complexity should be reduced!"))  
- **_get_constants_information()** (PriS, Len: -  CyC: 47 ![(X)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_red_ics.png "Method's cyclomatic complexity should be reduced!"))  
- **_get_functions_information()** (PriS, Len: -  CyC: 45 ![(X)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_red_ics.png "Method's cyclomatic complexity should be reduced!"))  
- **_get_todos_information()** (PriS, Len: -  CyC: 44 ![(X)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_red_ics.png "Method's cyclomatic complexity should be reduced!"))  
- **_get_methods_information($method)** (PriS, Len: -  CyC: 44 ![(X)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_red_ics.png "Method's cyclomatic complexity should be reduced!"))  
- **_get_classes_information()** (PriS, Len: -  CyC: 38 ![(X)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_red_ics.png "Method's cyclomatic complexity should be reduced!"))  
- **_get_component_information($name)** (PriS, Len: -  CyC: 34 ![(X)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_red_ics.png "Method's cyclomatic complexity should be reduced!"))  
- **_get_components_information()** (PriS, Len: -  CyC: 30 ![(X)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_red_ics.png "Method's cyclomatic complexity should be reduced!"))  
- **get_constants_list()** (PubS, Len: -  CyC: 30 ![(X)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_red_ics.png "Method's cyclomatic complexity should be reduced!"))  
- **get_functions_list()** (PubS, Len: -  CyC: 30 ![(X)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_red_ics.png "Method's cyclomatic complexity should be reduced!"))  
- **get_libraries_list($exclude = null)** (PubS, Len: -  CyC: 25 ![(X)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_red_ics.png "Method's cyclomatic complexity should be reduced!"))  
- **get_components_list()** (PubS, Len: -  CyC: 21 ![(X)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_red_ics.png "Method's cyclomatic complexity should be reduced!"))  
- **get_class_dependencies($class)** (PubS, Len: -  CyC: 16 ![(X)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_red_ics.png "Method's cyclomatic complexity should be reduced!"))  
- **get_class_data($class)** (PubS, Len: -  CyC: 12 ![(!)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_yellow_ops.png "Method's cyclomatic complexity could be reduced.."))  
- **get_method_status($method)** (PubS, Len: -  CyC: 6 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **analyse_method($method)** (PubS, Len: - )  
- **get_documentation()** (PubS, Len: - )  
  
**DEPENDENCIES:**  
  
Uses: **main**, **md**  
  
**TODOS**  
  
- **summary with links** &#10140; generate automatic index with doc + meta links and warnings..  
- **code analysis** &#10140; load, analyse, printing and more.. use toolbox class?  
- **methods lists** &#10140; add parameter class type information, also for aliases  
- **github wiki documentation** &#10140; generate wiki pages with md syntax and update  
- **add code-testing methods** &#10140; using phpunit to autobuild and execute tests  
- **semantic documentation** &#10140; generate human-friendly doc from methods code..  
- **get_class_dependencies** &#10140; too unaccurate, navigator-controller, only explicit new, etc.  
  
  
***  
  
Class CONTROLLER (Thu, 21 Mar 2013 11:22:55 +0000)  
--------------------------------------------------  
  
**CLASS CONFIGURATION CONSTANTS:**  
  
- **VISIBLE_IN_NAVIGATION** &#10140; true  
- **RENDER_BREADCRUMB** &#10140; true  
  
**CODE REFERENCE:**  
  
- **__construct($action, $args)** (CPub, Len: -  CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **initialize()** (ProA, Len: -  CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_set_title($html)** (Pro, Len: -  CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_set_header($html)** (Pro, Len: -  CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_set_nav($html)** (Pro, Len: -  CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_set_section($html)** (Pro, Len: -  CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_set_article($html)** (Pro, Len: -  CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_set_aside($html)** (Pro, Len: -  CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_set_footer($html)** (Pro, Len: -  CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_translate($placeholder)** (Pro, Len: -  CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **get_title()** (Pub, Len: -  CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **get_header()** (Pub, Len: - )  
- **get_nav()** (Pub, Len: - )  
- **get_section()** (Pub, Len: - )  
- **get_article()** (Pub, Len: - )  
- **get_aside()** (Pub, Len: - )  
- **get_footer()** (Pub, Len: - )  
  
**DEPENDENCIES:**  
  
Uses: **html**, **navigator**  
  
  
***  
  
Class DB (Mon, 11 Mar 2013 09:13:54 +0000)  
------------------------------------------  
  
**CODE REFERENCE:**  
  
- **__construct()** (CPub, Len: - )  
  
**TODOS**  
  
- **connection constants** &#10140; they should be in main configuration file as array (to be unserialized before use)  
  
  
***  
  
Class ESCORT (Tue, 19 Mar 2013 10:31:40 +0000)  
----------------------------------------------  
  
**TODOS**  
  
- **runtime registry** &#10140; save created objects structure as reference hierarchy  
  
  
***  
  
Class HTML (Wed, 20 Mar 2013 18:32:06 +0000)  
--------------------------------------------  
  
**CODE REFERENCE:**  
  
- **__construct($tag, $attributes = null, $content = null)** (CPub, Len: -  CyC: 20 ![(X)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_red_ics.png "Method's cyclomatic complexity should be reduced!"))  
- **_is_single()** (Pri, Len: -  CyC: 20 ![(X)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_red_ics.png "Method's cyclomatic complexity should be reduced!"))  
- **_is_container()** (Pri, Len: -  CyC: 20 ![(X)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_red_ics.png "Method's cyclomatic complexity should be reduced!"))  
- **_validate_tag()** (Pri, Len: -  CyC: 19 ![(X)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_red_ics.png "Method's cyclomatic complexity should be reduced!"))  
- **_set_attributes($attributes)** (Pri, Len: -  CyC: 17 ![(X)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_red_ics.png "Method's cyclomatic complexity should be reduced!"))  
- **_set_content($content = null)** (Pri, Len: -  CyC: 17 ![(X)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_red_ics.png "Method's cyclomatic complexity should be reduced!"))  
- **a($href, $content)** (PriS, Len: -  CyC: 16 ![(X)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_red_ics.png "Method's cyclomatic complexity should be reduced!"))  
- **br($lines = true, $classes = null)** (PriS, Len: -  CyC: 15 ![(X)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_red_ics.png "Method's cyclomatic complexity should be reduced!"))  
- **div($content, $classes = null, $id = null)** (PriS, Len: -  CyC: 13 ![(X)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_red_ics.png "Method's cyclomatic complexity should be reduced!"))  
- **h1($content)** (PriS, Len: -  CyC: 13 ![(X)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_red_ics.png "Method's cyclomatic complexity should be reduced!"))  
- **h2($content)** (PriS, Len: -  CyC: 13 ![(X)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_red_ics.png "Method's cyclomatic complexity should be reduced!"))  
- **h3($content)** (PriS, Len: -  CyC: 13 ![(X)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_red_ics.png "Method's cyclomatic complexity should be reduced!"))  
- **h4($content)** (PriS, Len: -  CyC: 13 ![(X)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_red_ics.png "Method's cyclomatic complexity should be reduced!"))  
- **h5($content)** (PriS, Len: -  CyC: 13 ![(X)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_red_ics.png "Method's cyclomatic complexity should be reduced!"))  
- **h6($content)** (PriS, Len: -  CyC: 13 ![(X)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_red_ics.png "Method's cyclomatic complexity should be reduced!"))  
- **h7($content)** (PriS, Len: -  CyC: 13 ![(X)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_red_ics.png "Method's cyclomatic complexity should be reduced!"))  
- **img($src, $alt, $title = null)** (PriS, Len: -  CyC: 12 ![(!)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_yellow_ops.png "Method's cyclomatic complexity could be reduced.."))  
- **li($content, $classes = null)** (PriS, Len: -  CyC: 11 ![(!)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_yellow_ops.png "Method's cyclomatic complexity could be reduced.."))  
- **link($href, $rel, $type)** (PriS, Len: -  CyC: 9 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **ol($content, $classes = null)** (PriS, Len: -  CyC: 8 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **p($content)** (PriS, Len: -  CyC: 8 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **pre($content)** (PriS, Len: -  CyC: 8 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **script($type, $src = null, $content = null)** (PriS, Len: -  CyC: 4 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **ul($content, $classes = null)** (PriS, Len: -  CyC: 3 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **add_favicon($href)** (PubS, Len: -  CyC: 3 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **add_stylesheet($href)** (PubS, Len: -  CyC: 3 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **add_js_file($src)** (PubS, Len: -  CyC: 3 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **add_js_script($content)** (PubS, Len: -  CyC: 3 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **array_to_list($tree, $type = "ul")** (PubS, Len: -  CyC: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **box($content)** (PubS, Len: -  CyC: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **divisor($content, $classes = null, $id = null)** (PubS, Len: -  CyC: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **highbox($content)** (PubS, Len: -  CyC: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **hyperlink($href, $content = null)** (PubS, Len: -  CyC: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **image($src, $alt, $title = null)** (PubS, Len: -  CyC: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **newline()** (PubS, Len: -  CyC: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **clearfix()** (PubS, Len: -  CyC: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **text($content)** (PubS, Len: -  CyC: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **preform($content)** (PubS, Len: -  CyC: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **title($level, $content)** (PubS, Len: - )  
  
**TODOS**  
  
- **script online loading** &#10140; if != local, should have a lfb..  
  
  
***  
  
Class LANGUAGE (Mon, 04 Mar 2013 10:41:00 +0000)  
------------------------------------------------  
  
**CODE REFERENCE:**  
  
- **get_browser_language()** (PubS ![(?)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_blue_boh.png "1 too long line(s) found!") Len: -  CyC: 10 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **is_supported($language)** (PubS ![(?)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_blue_boh.png "1 too long line(s) found!") Len: -  CyC: 10 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **get_component_translations_array($component)** (PubS ![(?)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_blue_boh.png "1 too long line(s) found!") Len: -  CyC: 8 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **translate($component, $marker)** (PubS ![(?)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_blue_boh.png "1 too long line(s) found!") Len: - )  
  
**TODOS**  
  
- **automatic translation** &#10140; it could be interessant to use pspell&gettext  
  
  
***  
  
Class MAIN (Thu, 21 Mar 2013 18:01:08 +0000)  
--------------------------------------------  
  
**CODE REFERENCE:**  
  
- **__construct($uri)** (CPub, Len: -  CyC: 16 ![(X)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_red_ics.png "Method's cyclomatic complexity should be reduced!"))  
- **_set_configuration($conf_name)** (Pri, Len: -  CyC: 15 ![(X)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_red_ics.png "Method's cyclomatic complexity should be reduced!"))  
- **_load_libraries()** (Pri, Len: -  CyC: 13 ![(X)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_red_ics.png "Method's cyclomatic complexity should be reduced!"))  
- **_set_route_static_traits($components)** (Pri, Len: -  CyC: 11 ![(!)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_yellow_ops.png "Method's cyclomatic complexity could be reduced.."))  
- **_set_home_component()** (Pri, Len: -  CyC: 10 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_set_htmls_from_controller()** (Pri, Len: -  CyC: 10 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_initialize($route)** (Pri, Len: -  CyC: 5 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **get_call()** (Pub, Len: -  CyC: 5 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **get_path()** (Pub, Len: -  CyC: 5 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **get_fullpath()** (Pub, Len: -  CyC: 5 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **var_dump($what)** (PubS, Len: -  CyC: 5 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **get_version($precision = 2)** (PubS, Len: -  CyC: 4 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **is_webstoraged()** (PubS, Len: -  CyC: 4 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **is_memcached()** (PubS, Len: -  CyC: 4 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **exists_file($path)** (PubS, Len: -  CyC: 4 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **resolve_uri($uri = null)** (PubS, Len: -  CyC: 4 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **relocate_to($url = null)** (PubS, Len: -  CyC: 4 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **launch_error($msg)** (PubS, Len: -  CyC: 3 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **launch_error_file_not_found($file)** (PubS, Len: -  CyC: 3 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **set_buffer($buffer)** (PubS, Len: -  CyC: 3 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **get_buffer($delete = true)** (PubS, Len: -  CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **show_backtrace()** (PubS, Len: -  CyC: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
  
**DEPENDENCIES:**  
  
Uses: **code**, **html**  
  
**TODOS**  
  
- **documentation** &#10140; PHP's highlight_string/file to rapresent code excerpts  
- **escort library** &#10140; session su PHP poi DB se webstore & memcache fail?  
- **memcache support** &#10140; verify in method, if at least one mem-server works  
- **pdf documentation** &#10140; check file creation/modification date -> reminder on old first decimal  
- **css selectors** &#10140; uniform to html-class render-methods (only default style)  
- **css stylesheets autoload** &#10140; automatically load ANY file in .inc/inc / css?  
  
  
***  
  
Class MD (Tue, 12 Mar 2013 12:19:30 +0000)  
------------------------------------------  
  
**CODE REFERENCE:**  
  
- **__construct($tag, $content = null, $attributes = null)** (CPub, Len: -  CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_validate_tag()** (Pri, Len: -  CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_set_content($content = null)** (Pri, Len: -  CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_set_formatting($attributes)** (Pri, Len: -  CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **h1($content)** (PriS, Len: -  CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **h2($content)** (PriS, Len: -  CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **h3($content)** (PriS, Len: -  CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **img($src, $alt, $title = null)** (PriS, Len: -  CyC: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **hr()** (PubS, Len: -  CyC: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **image($src, $alt = null, $title = null)** (PubS, Len: -  CyC: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **green_ok()** (PubS, Len: -  CyC: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **blue_boh($title)** (PubS, Len: -  CyC: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **yellow_ops($title)** (PubS, Len: -  CyC: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **red_ics($title)** (PubS, Len: -  CyC: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **text($content)** (PubS, Len: -  CyC: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **title($level, $content)** (PubS, Len: - )  
  
  
***  
  
Class NAVIGATOR (Wed, 20 Mar 2013 18:37:49 +0000)  
-------------------------------------------------  
  
**CODE REFERENCE:**  
  
- **__construct()** (CPub, Len: -  CyC: 15 ![(X)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_red_ics.png "Method's cyclomatic complexity should be reduced!"))  
- **_initialize_structure()** (Pri, Len: -  CyC: 15 ![(X)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_red_ics.png "Method's cyclomatic complexity should be reduced!"))  
- **_add_branch($controller)** (Pri, Len: -  CyC: 12 ![(!)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_yellow_ops.png "Method's cyclomatic complexity could be reduced.."))  
- **_add_handlers($controller, $object, $sub)** (Pri, Len: -  CyC: 10 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_add_handler_static_options($static_variables, $sub, $controller, $link, $object)** (Pri, Len: 24/28 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 4 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_print_handler_name($branch, $link, $controller)** (Pri, Len: -  CyC: 6 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_print_handler_parameter($branch, $link, $controller)** (Pri, Len: -  CyC: 5 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_print_additional_parameters($branch, $link, $controller)** (Pri, Len: -  CyC: 4 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_render_breadcrumb($controller)** (Pri, Len: -  CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **render_list()** (PubS, Len: -  CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **render_breadcrumb()** (PubS, Len: - )  
- **render_active_breadcrumb()** (PubS, Len: - )  
- **render_sitemap()** (PubS, Len: - )  
  
**DEPENDENCIES:**  
  
Uses: **controller**, **html**, **main**  
  
**TODOS**  
  
- **render_breadcrumb** &#10140; should return the html code, not printing it directly  
- **render_list** &#10140; this should be CSS3 and appear on a mouse gesture..  
- **active breadcrumb** &#10140; dynamic same-level-select trunks, or maybe widget?  
  
  
***  
  
Class POWERING (Tue, 12 Mar 2013 12:19:30 +0000)  
------------------------------------------------  
  
  
***  
  
Class TOOLBOX (Mon, 18 Mar 2013 09:32:01 +0000)  
-----------------------------------------------  
  
**CODE REFERENCE:**  
  
- **format_value($mixed)** (PubS, Len: - )  
  
  
***  
  
Class WIDGETS (Fri, 23 Nov 2012 17:54:52 +0000)  
-----------------------------------------------  
  
  
***  
  
  
Available components:  
=====================  
  
  
Class ADMIN (Tue, 12 Mar 2013 12:19:30 +0000)  
---------------------------------------------  
  
**CLASS CONFIGURATION CONSTANTS:**  
  
- **VISIBLE_IN_NAVIGATION** &#10140; true  
- **RENDER_BREADCRUMB** &#10140; true  
  
**CODE REFERENCE:**  
  
- **initialize()** (Pub, Len: - )  
- **_handler()** (Pro, Len: - )  
- **__construct($action, $args)** (CPub, Len: -  CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_set_title($html)** (Pro, Len: -  CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_set_header($html)** (Pro, Len: -  CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_set_nav($html)** (Pro, Len: -  CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_set_section($html)** (Pro, Len: -  CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_set_article($html)** (Pro, Len: -  CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_set_aside($html)** (Pro, Len: -  CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_set_footer($html)** (Pro, Len: -  CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_translate($placeholder)** (Pro, Len: -  CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **get_title()** (Pub, Len: -  CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **get_header()** (Pub, Len: - )  
- **get_nav()** (Pub, Len: - )  
- **get_section()** (Pub, Len: - )  
- **get_article()** (Pub, Len: - )  
- **get_aside()** (Pub, Len: - )  
- **get_footer()** (Pub, Len: - )  
  
**DEPENDENCIES:**  
  
Uses: **html**, **navigator**  
  
Class ADMIN_HELPER (Wed, 20 Mar 2013 19:47:11 +0000)  
----------------------------------------------------  
  
  
***  
  
Class CONTROL (Thu, 21 Mar 2013 11:22:55 +0000)  
-----------------------------------------------  
  
**CLASS CONFIGURATION CONSTANTS:**  
  
- **VISIBLE_IN_NAVIGATION** &#10140; true  
- **RENDER_BREADCRUMB** &#10140; true  
  
**CODE REFERENCE:**  
  
- **initialize()** (Pub, Len: -  CyC: 8 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_handler()** (Pro, Len: -  CyC: 8 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_handler_core()** (Pri, Len: -  CyC: 8 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_handler_core_db()** (Pri, Len: -  CyC: 8 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_handler_core_controller()** (Pri, Len: -  CyC: 8 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_handler_core_escort()** (Pri, Len: -  CyC: 8 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_handler_core_navigator()** (Pri, Len: -  CyC: 8 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_handler_core_html()** (Pri, Len: -  CyC: 8 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_handler_core_md()** (Pri, Len: -  CyC: 8 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_handler_core_widget()** (Pri, Len: -  CyC: 8 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_handler_core_language()** (Pri, Len: -  CyC: 6 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_handler_core_code()** (Pri, Len: -  CyC: 6 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_handler_core_toolbox()** (Pri, Len: -  CyC: 6 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_handler_plugins()** (Pri, Len: -  CyC: 5 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_handler_modules()** (Pri, Len: -  CyC: 5 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_handler_modules_admin()** (Pri, Len: -  CyC: 5 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_handler_modules_control()** (Pri, Len: -  CyC: 5 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_handler_modules_documentation()** (Pri, Len: -  CyC: 5 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_handler_modules_error()** (Pri, Len: -  CyC: 5 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_handler_application()** (Pri, Len: -  CyC: 3 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_handler_phpinfo()** (Pri, Len: - )  
- **__construct($action, $args)** (CPub, Len: -  CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_set_title($html)** (Pro, Len: -  CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_set_header($html)** (Pro, Len: -  CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_set_nav($html)** (Pro, Len: -  CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_set_section($html)** (Pro, Len: -  CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_set_article($html)** (Pro, Len: -  CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_set_aside($html)** (Pro, Len: -  CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_set_footer($html)** (Pro, Len: -  CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_translate($placeholder)** (Pro, Len: -  CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **get_title()** (Pub, Len: -  CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **get_header()** (Pub, Len: - )  
- **get_nav()** (Pub, Len: - )  
- **get_section()** (Pub, Len: - )  
- **get_article()** (Pub, Len: - )  
- **get_aside()** (Pub, Len: - )  
- **get_footer()** (Pub, Len: - )  
  
**DEPENDENCIES:**  
  
Uses: **html**, **language**, **main**  
  
**TODOS**  
  
- **phpinfo server configuration** &#10140; better rappresentation of access details, see php-documentation  
- **plugins libraries** &#10140; find a way to incapsulate needed translations (static array of translations? default if only one level..) and controls (?) in backend   
  
Class CONTROL_HELPER (Thu, 21 Mar 2013 11:22:55 +0000)  
------------------------------------------------------  
  
**CODE REFERENCE:**  
  
- **get_general_phpinfos($output = null)** (Pub, Len: -  CyC: 6 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **get_configuration_phpinfos($output = null)** (Pub, Len: -  CyC: 5 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **get_environment_phpinfos($output = null)** (Pub, Len: -  CyC: 3 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **get_phpinfos($arg)** (Pub, Len: - )  
  
**DEPENDENCIES:**  
  
Uses: **html**  
  
  
***  
  
Class DOCUMENTATION (Wed, 20 Mar 2013 13:33:34 +0000)  
-----------------------------------------------------  
  
**CLASS CONFIGURATION CONSTANTS:**  
  
- **VISIBLE_IN_NAVIGATION** &#10140; true  
- **RENDER_BREADCRUMB** &#10140; true  
  
**CODE REFERENCE:**  
  
- **initialize()** (Pub, Len: - )  
- **_handler()** (Pro, Len: - )  
- **_handler_list()** (Pri, Len: - )  
- **_handler_list_files()** (Pri, Len: - )  
- **__construct($action, $args)** (CPub, Len: -  CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_set_title($html)** (Pro, Len: -  CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_set_header($html)** (Pro, Len: -  CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_set_nav($html)** (Pro, Len: -  CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_set_section($html)** (Pro, Len: -  CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_set_article($html)** (Pro, Len: -  CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_set_aside($html)** (Pro, Len: -  CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_set_footer($html)** (Pro, Len: -  CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_translate($placeholder)** (Pro, Len: -  CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **get_title()** (Pub, Len: -  CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **get_header()** (Pub, Len: - )  
- **get_nav()** (Pub, Len: - )  
- **get_section()** (Pub, Len: - )  
- **get_article()** (Pub, Len: - )  
- **get_aside()** (Pub, Len: - )  
- **get_footer()** (Pub, Len: - )  
  
**TODOS**  
  
- **method toString** &#10140; to get a rappresentative highlighted code as reference  
  
Class DOCUMENTATION_HELPER (Wed, 20 Mar 2013 19:47:11 +0000)  
------------------------------------------------------------  
  
  
***  
  
Class ERROR (Fri, 01 Mar 2013 16:01:13 +0000)  
---------------------------------------------  
  
**CLASS CONFIGURATION CONSTANTS:**  
  
- **VISIBLE_IN_NAVIGATION** &#10140; false  
- **RENDER_BREADCRUMB** &#10140; false  
  
**CODE REFERENCE:**  
  
- **initialize()** (Pub, Len: -  CyC: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_handler()** (Pro, Len: -  CyC: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_handler_400()** (Pri, Len: -  CyC: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_handler_401()** (Pri, Len: -  CyC: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_handler_403()** (Pri, Len: -  CyC: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_handler_404()** (Pri, Len: -  CyC: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_handler_500()** (Pri, Len: - )  
- **__construct($action, $args)** (CPub, Len: -  CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_set_title($html)** (Pro, Len: -  CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_set_header($html)** (Pro, Len: -  CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_set_nav($html)** (Pro, Len: -  CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_set_section($html)** (Pro, Len: -  CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_set_article($html)** (Pro, Len: -  CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_set_aside($html)** (Pro, Len: -  CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_set_footer($html)** (Pro, Len: -  CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_translate($placeholder)** (Pro, Len: -  CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **get_title()** (Pub, Len: -  CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **get_header()** (Pub, Len: - )  
- **get_nav()** (Pub, Len: - )  
- **get_section()** (Pub, Len: - )  
- **get_article()** (Pub, Len: - )  
- **get_aside()** (Pub, Len: - )  
- **get_footer()** (Pub, Len: - )  
  
**DEPENDENCIES:**  
  
Uses: **html**, **main**, **navigator**  
  
Class ERROR_HELPER (Wed, 20 Mar 2013 19:47:11 +0000)  
----------------------------------------------------  
  
  
***  
  
Class HOMEPAGE (Tue, 12 Mar 2013 12:19:30 +0000)  
------------------------------------------------  
  
**CLASS CONFIGURATION CONSTANTS:**  
  
- **VISIBLE_IN_NAVIGATION** &#10140; true  
- **RENDER_BREADCRUMB** &#10140; true  
  
**CODE REFERENCE:**  
  
- **initialize()** (Pub, Len: - )  
- **_handler()** (Pro, Len: - )  
- **__construct($action, $args)** (CPub, Len: -  CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_set_title($html)** (Pro, Len: -  CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_set_header($html)** (Pro, Len: -  CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_set_nav($html)** (Pro, Len: -  CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_set_section($html)** (Pro, Len: -  CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_set_article($html)** (Pro, Len: -  CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_set_aside($html)** (Pro, Len: -  CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_set_footer($html)** (Pro, Len: -  CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_translate($placeholder)** (Pro, Len: -  CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **get_title()** (Pub, Len: -  CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **get_header()** (Pub, Len: - )  
- **get_nav()** (Pub, Len: - )  
- **get_section()** (Pub, Len: - )  
- **get_article()** (Pub, Len: - )  
- **get_aside()** (Pub, Len: - )  
- **get_footer()** (Pub, Len: - )  
  
**DEPENDENCIES:**  
  
Uses: **html**, **navigator**  
  
Class HOMEPAGE_HELPER (Wed, 20 Mar 2013 19:47:33 +0000)  
-------------------------------------------------------  
  
  
***  
  
Class POWER (Tue, 12 Mar 2013 12:19:30 +0000)  
---------------------------------------------  
  
**CLASS CONFIGURATION CONSTANTS:**  
  
- **VISIBLE_IN_NAVIGATION** &#10140; true  
- **RENDER_BREADCRUMB** &#10140; true  
  
**CODE REFERENCE:**  
  
- **initialize()** (Pub, Len: - )  
- **__construct($action, $args)** (CPub, Len: -  CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_set_title($html)** (Pro, Len: -  CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_set_header($html)** (Pro, Len: -  CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_set_nav($html)** (Pro, Len: -  CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_set_section($html)** (Pro, Len: -  CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_set_article($html)** (Pro, Len: -  CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_set_aside($html)** (Pro, Len: -  CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_set_footer($html)** (Pro, Len: -  CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_translate($placeholder)** (Pro, Len: -  CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **get_title()** (Pub, Len: -  CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **get_header()** (Pub, Len: - )  
- **get_nav()** (Pub, Len: - )  
- **get_section()** (Pub, Len: - )  
- **get_article()** (Pub, Len: - )  
- **get_aside()** (Pub, Len: - )  
- **get_footer()** (Pub, Len: - )  
  
Class POWER_HELPER (Wed, 20 Mar 2013 19:47:33 +0000)  
----------------------------------------------------  
  
  
***  
  
  
  
  
  
  
Copyright © 2011-2013 | Das S.C.H.R.I.M.P. Project  
