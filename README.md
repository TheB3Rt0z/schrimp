![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/schrimp_favicon_md.ico "") Das S.C.H.R.I.M.P.'s Documentation 0.5.2013.03.23  
=========================================================================================================================================  
  
  
Table of contents  
-----------------  
  
[General reference](#general-reference-- "")  
[Library code](#-class-code-sat-23-mar-2013-161612-0100-- "") (root/.lib/code.php ![(?)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_blue_boh.png "8 too long line(s) found!") Len: 485/570)  
[Library controller](#-class-controller-thu-21-mar-2013-002013-0100-- "") (root/.lib/controller.php, Len: 90/116)  
[Library db](#-class-db-sat-09-mar-2013-202051-0100-- "") (root/.lib/db.php ![(?)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_blue_boh.png "1 too long line(s) found!") Len: 27/30)  
[Library escort](#-class-escort-sat-23-mar-2013-125845-0100-- "") (root/.lib/escort.php, Len: 3/3)  
[Library html](#-class-html-thu-21-mar-2013-234050-0100-- "") (root/.lib/html.php ![(?)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_blue_boh.png "1 too long line(s) found!") Len: 396/486)  
[Library language](#-class-language-fri-01-mar-2013-235323-0100-- "") (root/.lib/language.php, Len: 80/93)  
[Library main](#-class-main-sat-23-mar-2013-094505-0100-- "") (root/.main.php ![(?)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_blue_boh.png "5 too long line(s) found!") Len: 198/249)  
[Library md](#-class-md-sat-23-mar-2013-093516-0100-- "") (root/.lib/md.php ![(?)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_blue_boh.png "1 too long line(s) found!") Len: 179/221)  
[Library navigator](#-class-navigator-wed-20-mar-2013-231302-0100-- "") (root/.lib/navigator.php ![(?)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_blue_boh.png "2 too long line(s) found!") Len: 213/258)  
[Library powering](#-class-powering-mon-11-mar-2013-223703-0100-- "") (root/lib/powering.php, Len: 1/1)  
[Library toolbox](#-class-toolbox-thu-14-mar-2013-231532-0100-- "") (root/.lib/toolbox.php, Len: 23/24)  
[Library widgets](#-class-widgets-fri-23-nov-2012-210716-0100-- "") (root/.lib/widgets.php, Len: 1/1)  
[Component admin](#-class-admin-mon-11-mar-2013-224503-0100-- "") (root/.app/admin.php, Len: 10/12)  
[- admin_helper](#-class-admin_helper-wed-20-mar-2013-231302-0100-- "") (root/.app/admin_helper.php, Len: 1/1)  
[Component control](#-class-control-thu-21-mar-2013-000840-0100-- "") (root/.app/control.php ![(?)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_blue_boh.png "2 too long line(s) found!") Len: 201/236)  
[- control_helper](#-class-control_helper-thu-21-mar-2013-001243-0100-- "") (root/.app/control_helper.php, Len: 49/62)  
[Component documentation](#-class-documentation-wed-20-mar-2013-231302-0100-- "") (root/.app/documentation.php ![(?)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_blue_boh.png "1 too long line(s) found!") Len: 50/57)  
[- documentation_helper](#-class-documentation_helper-wed-20-mar-2013-231302-0100-- "") (root/.app/documentation_helper.php, Len: 1/1)  
[Component error](#-class-error-fri-01-mar-2013-224710-0100-- "") (root/.app/error.php, Len: 80/106)  
[- error_helper](#-class-error_helper-wed-20-mar-2013-231302-0100-- "") (root/.app/error_helper.php, Len: 1/1)  
[Component homepage](#-class-homepage-mon-11-mar-2013-224503-0100-- "") (root/app/homepage.php, Len: 10/12)  
[- homepage_helper](#-class-homepage_helper-wed-20-mar-2013-231302-0100-- "") (root/app/homepage_helper.php, Len: 1/1)  
[Component power](#-class-power-mon-11-mar-2013-224503-0100-- "") (root/app/power.php, Len: 4/6)  
[- power_helper](#-class-power_helper-wed-20-mar-2013-231302-0100-- "") (root/app/power_helper.php, Len: 1/1)  
  
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
  
- **fe($path)** &#10140; .main.php on line 271,
  returns boolean if realpath path exists on running server;
  @param string $path
  @return boolean true if realpath exists, false otherwise
  
- **fv($mixed)** &#10140; .lib/toolbox.php on line 36,
  returns a beautiful formatted value, mixed variable-type-dependant;
  @param mixed $mixed
  @return mixed depending on internally defined rules
  
- **le($msg)** &#10140; .main.php on line 301,
  launches a customizable error 500, mit optional backtrace for debug;
  @param string $msg
  @return boolean false after relocate
  
- **rt($url = null)** &#10140; .main.php on line 291,
  relocates to given relative url or to base path on default;
  @param string $url
  @return void
  
- **ru($uri = null)** &#10140; .main.php on line 281,
  returns an absolute uri, based on current server configuration;
  @param string $uri
  @return string absolute http unified resource identifier
  
- **sb()** &#10140; .main.php on line 310,
  show call's backtrace with help of error base handler
  @return void
  
- **tr($component, $marker)** &#10140; .lib/language.php on line 108,
  executes language translation of marker identifier, referring to given component;
  @param string $component
  @param string $marker
  @return mixed callback function returned value(s)
  
- **vd($what)** &#10140; .main.php on line 261,
  returns pre-formatted mixed variables;
  @param mixed $what
  @return void
  
  
**TODOS**  
  
- **? admin bar** &#10140; optional control to measure run time performance (gApis)  
  
  
***  
  
[⇧](# "to the top") Class CODE (Sat, 23 Mar 2013 16:16:12 +0100)  
--------------------------------------------  
  
**CODE REFERENCE:**  
  
- **_add_summary_entry(![(?)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_blue_boh.png "too many parameters used! (+3)") $header, $label, $path, $length_warning, $real_length, $length)** (PriS, Len: 18/19 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_is_codeline_too_long($code_line)** (PriS, Len: 4/5 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_list_method_parameters($method)** (PriS, Len: 7/9 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_get_summary_information()** (PriS, Len: 16/18 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_get_constants_information()** (PriS, Len: 7/9 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_get_functions_information()** (PriS, Len: 25/29 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_get_todos_information()** (PriS, Len: 5/7 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_get_methods_information($method)** (PriS, Len: 32/33 ![(!)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_yellow_ops.png "Method's length could be reduced.."))  
- **_get_classes_information()** (PriS, Len: 30/34 ![(!)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_yellow_ops.png "Method's length could be reduced..") CyC: 6 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_get_component_information($name)** (PriS, Len: 23/26 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 4 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_get_components_information()** (PriS, Len: 22/27 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 4 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **get_constants_list()** (PubS, Len: 4/5 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **get_functions_list()** (PubS, Len: 4/5 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **get_libraries_list($exclude = null)** (PubS, Len: 21/27 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 5 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **get_components_list()** (PubS, Len: 19/24 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 4 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **get_class_dependencies($class)** (PubS, Len: 22/27 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 5 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **get_class_data($class)** (PubS, Len: 42/51 ![(X)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_red_ics.png "Method's length should be reduced!") CyC: 7 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **get_method_status($method)** (PubS, Len: 6 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 6 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **analyse_method($method)** (PubS, Len: 30/36 ![(!)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_yellow_ops.png "Method's length could be reduced..") CyC: 5 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **get_documentation()** (PubS, Len: 18/20 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
  
**DEPENDENCIES:**  
  
Uses: **main**, **md**  
  
**TODOS**  
  
- **summary with links** &#10140; generate automatic index with doc + meta links and warnings..  
- **code analysis** &#10140; load, analyse, printing and more.. use toolbox class?  
- **methods lists** &#10140; add parameter class type information, also for aliases  
- **github wiki documentation** &#10140; generate wiki pages with md syntax and update  
- **add code-testing methods** &#10140; using phpunit to autobuild and execute tests  
- **semantic documentation** &#10140; generate human-friendly doc from methods code..  
- **get_class_dependencies** &#10140; too unaccurate, navigator-controller, only explicit new, etc., and it should count und order dependencies, in order to detect excessive coupling..  
- **available libraries title** &#10140; at the beginning of classes list, same labeling in summary  
- **maximum number of (public?) methods** &#10140; class too complex, should be refactored with helpers and similar structures  
  
  
***  
  
[⇧](# "to the top") Class CONTROLLER (Thu, 21 Mar 2013 00:20:13 +0100)  
--------------------------------------------------  
  
**CLASS CONFIGURATION CONSTANTS:**  
  
- **VISIBLE_IN_NAVIGATION** &#10140; true  
- **RENDER_BREADCRUMB** &#10140; true  
  
**CODE REFERENCE:**  
  
- **__construct($action, $args)** (CPub, Len: 6/8 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **initialize()** (ProA, Len: - )  
- **_set_title($html)** (Pro, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_set_header($html)** (Pro, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_set_nav($html)** (Pro, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_set_section($html)** (Pro, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_set_article($html)** (Pro, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_set_aside($html)** (Pro, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_set_footer($html)** (Pro, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_translate($placeholder)** (Pro, Len: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **get_title()** (Pub, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **get_header()** (Pub, Len: 7/8 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **get_nav()** (Pub, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **get_section()** (Pub, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **get_article()** (Pub, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **get_aside()** (Pub, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **get_footer()** (Pub, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
  
**DEPENDENCIES:**  
  
Uses: **html**, **navigator**  
  
  
***  
  
[⇧](# "to the top") Class DB (Sat, 09 Mar 2013 20:20:51 +0100)  
------------------------------------------  
  
**CODE REFERENCE:**  
  
- **__construct()** (CPub, Len: 15/16 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
  
**TODOS**  
  
- **connection constants** &#10140; they should be in main configuration file as array (to be unserialized before use)  
  
  
***  
  
[⇧](# "to the top") Class ESCORT (Sat, 23 Mar 2013 12:58:45 +0100)  
----------------------------------------------  
  
**TODOS**  
  
- **runtime reg** &#10140; save created objects structure as reference hierarchy  
  
  
***  
  
[⇧](# "to the top") Class HTML (Thu, 21 Mar 2013 23:40:50 +0100)  
--------------------------------------------  
  
**CODE REFERENCE:**  
  
- **__construct($tag, $attributes = null, $content = null)** (CPub, Len: 20/23 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 4 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_is_single()** (Pri, Len: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_is_container()** (Pri, Len: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_validate_tag()** (Pri, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_set_attributes($attributes)** (Pri, Len: 15/20 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_set_content($content = null)** (Pri, Len: 4/5 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **a($href, $content)** (PriS, Len: 8/11 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **br($lines = true, $classes = null)** (PriS, Len: 7/9 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **div($content, $classes = null, $id = null)** (PriS, Len: 11/13 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **h1($content)** (PriS, Len: 4/5 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **h2($content)** (PriS, Len: 4/5 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **h3($content)** (PriS, Len: 4/5 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **h4($content)** (PriS, Len: 4/5 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **h5($content)** (PriS, Len: 4/5 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **h6($content)** (PriS, Len: 4/5 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **h7($content)** (PriS, Len: 4/5 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **img($src, $alt, $title = null)** (PriS, Len: 10/13 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **li($content, $classes = null)** (PriS, Len: 8/10 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **link($href, $rel, $type)** (PriS, Len: 18/22 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **ol($content, $classes = null)** (PriS, Len: 8/10 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **p($content)** (PriS, Len: 4/5 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **pre($content)** (PriS, Len: 4/5 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **script($type, $src = null, $content = null)** (PriS, Len: 25/30 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 4 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **ul($content, $classes = null)** (PriS, Len: 8/10 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **add_favicon($href)** (PubS, Len: 6/7 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **add_stylesheet($href)** (PubS, Len: 3 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **add_js_file($src)** (PubS, Len: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **add_js_script($content)** (PubS, Len: 3 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **array_to_list($tree, $type = "ul")** (PubS, Len: 11/13 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **box($content)** (PubS, Len: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **divisor($content, $classes = null, $id = null)** (PubS, Len: 5 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **highbox($content)** (PubS, Len: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **hyperlink($href, $content = null)** (PubS, Len: 5 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **image($src, $alt, $title = null)** (PubS, Len: 5 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **newline()** (PubS, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **clearfix()** (PubS, Len: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **text($content)** (PubS, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **preform($content)** (PubS, Len: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **title($level, $content)** (PubS, Len: 8 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
  
**TODOS**  
  
- **script online loading** &#10140; if != local, should have a lfb..  
- **private static builder** &#10140; these should have a _ at the beginning, or not?  
  
  
***  
  
[⇧](# "to the top") Class LANGUAGE (Fri, 01 Mar 2013 23:53:23 +0100)  
------------------------------------------------  
  
**CODE REFERENCE:**  
  
- **get_browser_language()** (PubS, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **is_supported($language)** (PubS, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **get_component_translations_array($component)** (PubS, Len: 17/20 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **translate($component, $marker)** (PubS, Len: 24/28 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 8 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
  
**TODOS**  
  
- **automatic translation** &#10140; it could be interessant to use pspell&gettext  
  
  
***  
  
[⇧](# "to the top") Class MAIN (Sat, 23 Mar 2013 09:45:05 +0100)  
--------------------------------------------  
  
**CODE REFERENCE:**  
  
- **__construct($uri)** (CPub, Len: 8/10 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_set_configuration($conf_name)** (Pri, Len: 20/27 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_load_libraries()** (Pri, Len: 4/5 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_set_route_static_traits($components)** (Pri, Len: 7 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_set_home_component()** (Pri, Len: 3/4 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_set_htmls_from_controller()** (Pri, Len: 7/8 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_initialize($route)** (Pri, Len: 24/30 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 5 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **get_call()** (Pub, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **get_path()** (Pub, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **get_fullpath()** (Pub, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **var_dump($what)** (PubS, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **get_version($precision = 2)** (PubS, Len: 5 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **is_webstoraged()** (PubS, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **is_memcached()** (PubS, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **exists_file($path)** (PubS, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **resolve_uri($uri = null)** (PubS, Len: 4 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **relocate_to($url = null)** (PubS, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **launch_error($msg)** (PubS, Len: 7/10 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **launch_error_file_not_found($file)** (PubS, Len: 3 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **set_buffer($buffer)** (PubS, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **get_buffer($delete = true)** (PubS, Len: 4/6 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **show_backtrace()** (PubS, Len: 5/6 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
  
**DEPENDENCIES:**  
  
Uses: **code**, **html**  
  
**TODOS**  
  
- **documentation** &#10140; PHP's highlight_string/file to rapresent code excerpts  
- **escort library** &#10140; session su PHP poi DB se webstore & memcache fail?  
- **memcache support** &#10140; verify in method, if at least one mem-server works  
- **pdf documentation** &#10140; check file creation/modification date -> reminder on old first decimal  
- **css selectors** &#10140; uniform to html-class render-methods (only default style)  
- **css stylesheets autoload** &#10140; automatically load ANY file in .inc/inc / css?  
- **our custom var_dump** &#10140; it should return alla parameters with get_args, not only first  
  
  
***  
  
[⇧](# "to the top") Class MD (Sat, 23 Mar 2013 09:35:16 +0100)  
------------------------------------------  
  
**CODE REFERENCE:**  
  
- **__construct($tag, $content = null, $attributes = null)** (CPub, Len: 9/10 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_validate_tag()** (Pri, Len: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_set_content($content = null)** (Pri, Len: 4/5 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_set_formatting($attributes)** (Pri, Len: 5/7 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **h1($content)** (PriS, Len: 3/4 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **h2($content)** (PriS, Len: 3/4 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **h3($content)** (PriS, Len: 3/4 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **img($src, $alt, $title = null)** (PriS, Len: 16/19 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **link($label, $href, $title)** (PriS, Len: 12/14 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **hr()** (PubS, Len: 2/3 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **hyperlink($label, $href, $title = null)** (PubS, Len: 5 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **to_the_top()** (PubS, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **image($src, $alt = null, $title = null)** (PubS, Len: 5 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **green_ok()** (PubS, Len: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **blue_boh($title)** (PubS, Len: 3 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **yellow_ops($title)** (PubS, Len: 3 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **red_ics($title)** (PubS, Len: 3 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **text($content)** (PubS, Len: 3/4 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **title($level, $content)** (PubS, Len: 8 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
  
**TODOS**  
  
- **private static builder** &#10140; these should have a _ at the beginning, or not?  
  
  
***  
  
[⇧](# "to the top") Class NAVIGATOR (Wed, 20 Mar 2013 23:13:02 +0100)  
-------------------------------------------------  
  
**CODE REFERENCE:**  
  
- **__construct()** (CPub, Len: 19/22 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_initialize_structure()** (Pri, Len: 8 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_add_branch($controller)** (Pri, Len: 25/30 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 3 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_add_handlers($controller, $object, $sub)** (Pri, Len: 24/28 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_add_handler_static_options(![(?)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_blue_boh.png "too many parameters used! (+2)") $static_variables, $sub, $controller, $link, $object)** (Pri, Len: 24/28 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 4 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_print_handler_name($branch, $link, $controller)** (Pri, Len: 8/10 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_print_handler_parameter($branch, $link, $controller)** (Pri, Len: 14/16 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_print_additional_parameters($branch, $link, $controller)** (Pri, Len: 12/14 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_render_breadcrumb($controller)** (Pri, Len: 19/23 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **render_list()** (PubS, Len: 2/3 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **render_breadcrumb()** (PubS, Len: 8/10 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **render_active_breadcrumb()** (PubS, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **render_sitemap()** (PubS, Len: 3/5 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
  
**DEPENDENCIES:**  
  
Uses: **controller**, **html**, **main**  
  
**TODOS**  
  
- **render_breadcrumb** &#10140; should return the html code, not printing it directly  
- **render_list** &#10140; this should be CSS3 and appear on a mouse gesture..  
- **active breadcrumb** &#10140; dynamic same-level-select trunks, or maybe widget?  
  
  
***  
  
[⇧](# "to the top") Class POWERING (Mon, 11 Mar 2013 22:37:03 +0100)  
------------------------------------------------  
  
  
***  
  
[⇧](# "to the top") Class TOOLBOX (Thu, 14 Mar 2013 23:15:32 +0100)  
-----------------------------------------------  
  
**CODE REFERENCE:**  
  
- **format_value($mixed)** (PubS, Len: 19 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 4 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
  
  
***  
  
[⇧](# "to the top") Class WIDGETS (Fri, 23 Nov 2012 21:07:16 +0100)  
-----------------------------------------------  
  
  
***  
  
  
Available components:  
=====================  
  
  
[⇧](# "to the top") Class ADMIN (Mon, 11 Mar 2013 22:45:03 +0100)  
---------------------------------------------  
  
**CLASS CONFIGURATION CONSTANTS:**  
  
- **VISIBLE_IN_NAVIGATION** &#10140; true  
- **RENDER_BREADCRUMB** &#10140; true  
  
**CODE REFERENCE:**  
  
- **initialize()** (Pub, Len: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_handler()** (Pro, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **__construct($action, $args)** (CPub, Len: 6/8 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_set_title($html)** (Pro, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_set_header($html)** (Pro, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_set_nav($html)** (Pro, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_set_section($html)** (Pro, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_set_article($html)** (Pro, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_set_aside($html)** (Pro, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_set_footer($html)** (Pro, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_translate($placeholder)** (Pro, Len: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **get_title()** (Pub, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **get_header()** (Pub, Len: 7/8 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **get_nav()** (Pub, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **get_section()** (Pub, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **get_article()** (Pub, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **get_aside()** (Pub, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **get_footer()** (Pub, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
  
**DEPENDENCIES:**  
  
Uses: **html**, **navigator**  
  
[⇧](# "to the top") Class ADMIN_HELPER (Wed, 20 Mar 2013 23:13:02 +0100)  
----------------------------------------------------  
  
  
***  
  
[⇧](# "to the top") Class CONTROL (Thu, 21 Mar 2013 00:08:40 +0100)  
-----------------------------------------------  
  
**CLASS CONFIGURATION CONSTANTS:**  
  
- **VISIBLE_IN_NAVIGATION** &#10140; true  
- **RENDER_BREADCRUMB** &#10140; true  
  
**CODE REFERENCE:**  
  
- **initialize()** (Pub, Len: 14/16 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_handler()** (Pro, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_handler_core()** (Pri, Len: 3 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_handler_core_db()** (Pri, Len: 3 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_handler_core_controller()** (Pri, Len: 3 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_handler_core_escort()** (Pri, Len: 3 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_handler_core_navigator()** (Pri, Len: 3 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_handler_core_html()** (Pri, Len: 3 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_handler_core_md()** (Pri, Len: 3 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_handler_core_widget()** (Pri, Len: 3 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_handler_core_language()** (Pri, Len: 9/10 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_handler_core_code()** (Pri, Len: 3 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_handler_core_toolbox()** (Pri, Len: 3 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_handler_plugins()** (Pri, Len: 20/24 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_handler_modules()** (Pri, Len: 3 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_handler_modules_admin()** (Pri, Len: 3 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_handler_modules_control()** (Pri, Len: 3 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_handler_modules_documentation()** (Pri, Len: 3 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_handler_modules_error()** (Pri, Len: 3 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_handler_application()** (Pri, Len: 26/30 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_handler_phpinfo()** (Pri, Len: 18/21 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 3 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **__construct($action, $args)** (CPub, Len: 6/8 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_set_title($html)** (Pro, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_set_header($html)** (Pro, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_set_nav($html)** (Pro, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_set_section($html)** (Pro, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_set_article($html)** (Pro, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_set_aside($html)** (Pro, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_set_footer($html)** (Pro, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_translate($placeholder)** (Pro, Len: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **get_title()** (Pub, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **get_header()** (Pub, Len: 7/8 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **get_nav()** (Pub, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **get_section()** (Pub, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **get_article()** (Pub, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **get_aside()** (Pub, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **get_footer()** (Pub, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
  
**DEPENDENCIES:**  
  
Uses: **html**, **language**, **main**  
  
**TODOS**  
  
- **phpinfo server configuration** &#10140; better rappresentation of access details, see php-documentation  
- **plugins libraries** &#10140; find a way to incapsulate needed translations (static array of translations? default if only one level..) and controls (?) in backend   
  
[⇧](# "to the top") Class CONTROL_HELPER (Thu, 21 Mar 2013 00:12:43 +0100)  
------------------------------------------------------  
  
**CODE REFERENCE:**  
  
- **get_general_phpinfos($output = null)** (Pub, Len: 5/7 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **get_configuration_phpinfos($output = null)** (Pub, Len: 11/12 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **get_environment_phpinfos($output = null)** (Pub, Len: 9/12 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **get_phpinfos($arg)** (Pub, Len: 11/14 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 3 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
  
**DEPENDENCIES:**  
  
Uses: **html**  
  
  
***  
  
[⇧](# "to the top") Class DOCUMENTATION (Wed, 20 Mar 2013 23:13:02 +0100)  
-----------------------------------------------------  
  
**CLASS CONFIGURATION CONSTANTS:**  
  
- **VISIBLE_IN_NAVIGATION** &#10140; true  
- **RENDER_BREADCRUMB** &#10140; true  
  
**CODE REFERENCE:**  
  
- **initialize()** (Pub, Len: 27/30 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 4 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_handler()** (Pro, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_handler_list()** (Pri, Len: 3 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_handler_list_files()** (Pri, Len: 3 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **__construct($action, $args)** (CPub, Len: 6/8 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_set_title($html)** (Pro, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_set_header($html)** (Pro, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_set_nav($html)** (Pro, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_set_section($html)** (Pro, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_set_article($html)** (Pro, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_set_aside($html)** (Pro, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_set_footer($html)** (Pro, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_translate($placeholder)** (Pro, Len: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **get_title()** (Pub, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **get_header()** (Pub, Len: 7/8 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **get_nav()** (Pub, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **get_section()** (Pub, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **get_article()** (Pub, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **get_aside()** (Pub, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **get_footer()** (Pub, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
  
**TODOS**  
  
- **method toString** &#10140; to get a rappresentative highlighted code as reference  
  
[⇧](# "to the top") Class DOCUMENTATION_HELPER (Wed, 20 Mar 2013 23:13:02 +0100)  
------------------------------------------------------------  
  
  
***  
  
[⇧](# "to the top") Class ERROR (Fri, 01 Mar 2013 22:47:10 +0100)  
---------------------------------------------  
  
**CLASS CONFIGURATION CONSTANTS:**  
  
- **VISIBLE_IN_NAVIGATION** &#10140; false  
- **RENDER_BREADCRUMB** &#10140; false  
  
**CODE REFERENCE:**  
  
- **initialize()** (Pub, Len: 11/12 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_handler()** (Pro, Len: 7/10 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_handler_400()** (Pri, Len: 6/8 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_handler_401()** (Pri, Len: 6/8 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_handler_403()** (Pri, Len: 6/8 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_handler_404()** (Pri, Len: 7/10 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_handler_500()** (Pri, Len: 13/17 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **__construct($action, $args)** (CPub, Len: 6/8 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_set_title($html)** (Pro, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_set_header($html)** (Pro, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_set_nav($html)** (Pro, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_set_section($html)** (Pro, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_set_article($html)** (Pro, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_set_aside($html)** (Pro, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_set_footer($html)** (Pro, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_translate($placeholder)** (Pro, Len: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **get_title()** (Pub, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **get_header()** (Pub, Len: 7/8 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **get_nav()** (Pub, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **get_section()** (Pub, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **get_article()** (Pub, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **get_aside()** (Pub, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **get_footer()** (Pub, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
  
**DEPENDENCIES:**  
  
Uses: **html**, **main**, **navigator**  
  
[⇧](# "to the top") Class ERROR_HELPER (Wed, 20 Mar 2013 23:13:02 +0100)  
----------------------------------------------------  
  
  
***  
  
[⇧](# "to the top") Class HOMEPAGE (Mon, 11 Mar 2013 22:45:03 +0100)  
------------------------------------------------  
  
**CLASS CONFIGURATION CONSTANTS:**  
  
- **VISIBLE_IN_NAVIGATION** &#10140; true  
- **RENDER_BREADCRUMB** &#10140; true  
  
**CODE REFERENCE:**  
  
- **initialize()** (Pub, Len: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_handler()** (Pro, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **__construct($action, $args)** (CPub, Len: 6/8 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_set_title($html)** (Pro, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_set_header($html)** (Pro, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_set_nav($html)** (Pro, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_set_section($html)** (Pro, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_set_article($html)** (Pro, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_set_aside($html)** (Pro, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_set_footer($html)** (Pro, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_translate($placeholder)** (Pro, Len: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **get_title()** (Pub, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **get_header()** (Pub, Len: 7/8 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **get_nav()** (Pub, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **get_section()** (Pub, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **get_article()** (Pub, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **get_aside()** (Pub, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **get_footer()** (Pub, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
  
**DEPENDENCIES:**  
  
Uses: **html**, **navigator**  
  
[⇧](# "to the top") Class HOMEPAGE_HELPER (Wed, 20 Mar 2013 23:13:02 +0100)  
-------------------------------------------------------  
  
  
***  
  
[⇧](# "to the top") Class POWER (Mon, 11 Mar 2013 22:45:03 +0100)  
---------------------------------------------  
  
**CLASS CONFIGURATION CONSTANTS:**  
  
- **VISIBLE_IN_NAVIGATION** &#10140; true  
- **RENDER_BREADCRUMB** &#10140; true  
  
**CODE REFERENCE:**  
  
- **initialize()** (Pub, Len: 0/1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **__construct($action, $args)** (CPub, Len: 6/8 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_set_title($html)** (Pro, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_set_header($html)** (Pro, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_set_nav($html)** (Pro, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_set_section($html)** (Pro, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_set_article($html)** (Pro, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_set_aside($html)** (Pro, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_set_footer($html)** (Pro, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_translate($placeholder)** (Pro, Len: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **get_title()** (Pub, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **get_header()** (Pub, Len: 7/8 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **get_nav()** (Pub, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **get_section()** (Pub, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **get_article()** (Pub, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **get_aside()** (Pub, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **get_footer()** (Pub, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
  
[⇧](# "to the top") Class POWER_HELPER (Wed, 20 Mar 2013 23:13:02 +0100)  
----------------------------------------------------  
  
  
***  
  
  
  
  
  
  
Copyright © 2011-2013 | Das S.C.H.R.I.M.P. Project  
