![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/schrimp_favicon_md.ico "") Das S.C.H.R.I.M.P.'s Documentation 0.6.2013.05.07  
=========================================================================================================================================  
  
  
Table of contents  
-----------------  
  
[General reference](#general-reference-- "")  
[Library code](#-class-code-fri-03-may-2013-163535-0000-- "") &#10029;&#10029;&#10029;&#10029;&#10029;&#10029;&#10029;  (root/.lib/code.php, Len: 583/694, CIS: 10 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "")) &#10140;  3 ![(!)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_yellow_ops.png "Attention! Some yellow alert(s)!") 1 ![(X)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_red_ics.png "Warning! Warning! Some red alert(s)!")  
[Library controller](#-class-controller-tue-07-may-2013-132134-0000-- "") (root/.lib/controller.php, Len: 90/116, CIS: 9 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))   
[Library db](#-class-db-mon-25-mar-2013-154730-0000-- "") &#10029;  (root/.lib/db.php, Len: 27/30, CIS: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))   
[Library escort](#-class-escort-mon-25-mar-2013-100351-0000-- "") &#10029;  (root/.lib/escort.php, Len: 3/3, CIS: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))   
[Library html](#-class-html-tue-07-may-2013-132450-0000-- "") &#10029;&#10029;&#10029;  (root/.lib/html.php, Len: 449/551, CIS: 18 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))   
[Library html_form](#-class-html_form-fri-03-may-2013-160132-0000-- "") (root/.lib/html_form.php, Len: 19/24, CIS: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))   
[Library language](#-class-language-mon-04-mar-2013-104100-0000-- "") &#10029;  (root/.lib/language.php, Len: 80/93, CIS: 6 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))   
[Library main](#-class-main-wed-24-apr-2013-105720-0000-- "") &#10029;&#10029;&#10029;&#10029;&#10029;&#10029;&#10029;  (root/.main.php, Len: 216/274, CIS: 28 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))   
[Library md](#-class-md-mon-15-apr-2013-082708-0000-- "") (root/.lib/md.php, Len: 176/218, CIS: 12 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))   
[Library navigator](#-class-navigator-tue-07-may-2013-132255-0000-- "") &#10029;&#10029;&#10029;  (root/.lib/navigator.php, Len: 308/379, CIS: 7 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))   
[Library powering](#-class-powering-tue-23-apr-2013-154248-0000-- "") &#10029;  (root/lib/powering.php, Len: 4/4, CIS: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))   
[Library toolbox](#-class-toolbox-fri-03-may-2013-162514-0000-- "") (root/.lib/toolbox.php, Len: 23/24, CIS: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))   
[Library widgets](#-class-widgets-tue-23-apr-2013-154136-0000-- "") &#10029;  (root/.lib/widgets.php, Len: 4/4, CIS: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))   
[Component admin](#-class-admin-tue-12-mar-2013-121930-0000-- "") (root/.app/admin.php, Len: 10/12, CIS: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))   
[- admin_helper](#-class-admin_helper-wed-20-mar-2013-194711-0000-- "") (root/.app/admin_helper.php, Len: 1/1, CIS: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))   
[Component control](#-class-control-wed-17-apr-2013-153359-0000-- "") &#10029;&#10029;&#10029;  (root/.app/control.php, Len: 204/239, CIS: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))   
[- control_helper](#-class-control_helper-thu-21-mar-2013-112255-0000-- "") (root/.app/control_helper.php, Len: 49/62, CIS: 5 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))   
[Component documentation](#-class-documentation-mon-25-mar-2013-154333-0000-- "") &#10029;  (root/.app/documentation.php, Len: 50/57, CIS: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))   
[- documentation_helper](#-class-documentation_helper-wed-20-mar-2013-194711-0000-- "") (root/.app/documentation_helper.php, Len: 1/1, CIS: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))   
[Component error](#-class-error-tue-07-may-2013-132450-0000-- "") (root/.app/error.php, Len: 80/106, CIS: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))   
[- error_helper](#-class-error_helper-wed-20-mar-2013-194711-0000-- "") (root/.app/error_helper.php, Len: 1/1, CIS: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))   
[Component homepage](#-class-homepage-tue-12-mar-2013-121930-0000-- "") (root/app/homepage.php, Len: 10/12, CIS: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))   
[- homepage_helper](#-class-homepage_helper-wed-20-mar-2013-194733-0000-- "") (root/app/homepage_helper.php, Len: 1/1, CIS: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))   
[Component power](#-class-power-tue-12-mar-2013-121930-0000-- "") (root/app/power.php, Len: 4/6, CIS: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))   
[- power_helper](#-class-power_helper-wed-20-mar-2013-194733-0000-- "") (root/app/power_helper.php, Len: 1/1, CIS: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))   
  
General reference  
-----------------  
  
**GLOBAL CONFIGURATION CONSTANTS**  
  
- **DB_TABLE_PREFIX** &#10140; null  
- **HTML_ARROW_LEFT** &#10140; "&laquo;"  
- **HTML_ARROW_RIGHT** &#10140; "&raquo;"  
- **HTML_BREADCRUMB_SEPARATOR** &#10140; " &rsaquo; "  
- **HTML_ICON_LIST** &#10140; "&#9992;"  
- **HTML_ICON_NAVIGATION** &#10140; "&#9784;"  
- **LANGUAGE_FALLBACK_LANG** &#10140; "en"  
- **MAX_BLOCK_COMPLEXITY** &#10140; 84  
- **MAX_CYCLOMATIC_COMPLEXITY** &#10140; 12  
- **MAX_METHODS_COMPLEXITY** &#10140; 36  
- **MAX_PARAMETERS_COMPLEXITY** &#10140; 6  
- **MD_NEWLINE_SEQUENCE** &#10140; "  \n"  
- **SET_COMPLEXITY_INDEX** &#10140; 12  
- **SET_DOCUMENTATION_MD** &#10140; "README"  
- **SET_GITHUB_RAWPATH** &#10140; "https://raw.github.com/TheB3Rt0z/schrimp/master/"  
- **SET_TRANSLATIONS_EXTENSION** &#10140; ".txt"  
  
  
**FUNCTION ALIASES**  
  
- **fe($path)** &#10140; .main.php on line 296,
  returns boolean if realpath path exists on running server;
  @param string $path
  @return boolean true if realpath exists, false otherwise
  
- **fv($mixed)** &#10140; .lib/toolbox.php on line 36,
  returns a beautiful formatted value, mixed variable-type-dependant;
  @param mixed $mixed
  @return mixed depending on internally defined rules
  
- **le($msg)** &#10140; .main.php on line 326,
  launches a customizable error 500, mit optional backtrace for debug;
  @param string $msg
  @return boolean false after relocate
  
- **rt($url = null)** &#10140; .main.php on line 316,
  relocates to given relative url or to base path on default;
  @param string $url
  @return void
  
- **ru($uri = null)** &#10140; .main.php on line 306,
  returns an absolute uri, based on current server configuration;
  @param string $uri
  @return string absolute http unified resource identifier
  
- **sb()** &#10140; .main.php on line 335,
  show call's backtrace with help of error base handler
  @return void
  
- **tr($component, $marker)** &#10140; .lib/language.php on line 108,
  executes language translation of marker identifier, referring to given component;
  @param string $component
  @param string $marker
  @return mixed callback function returned value(s)
  
- **vd($what)** &#10140; .main.php on line 286,
  returns pre-formatted mixed variables;
  @param mixed $what
  @return void
  
  
  
**TODOS**  
  
- **? admin bar** &#10140; optional control to measure run time performance (gApis)  
  
  
  
***  
  
[⇧](# "to the top") Class CODE (Fri, 03 May 2013 16:35:35 +0000)  
--------------------------------------------  
  
**CODE REFERENCE:**  
  
- **_add_paragraph($data, $title)** (PriS, Len: 6 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_add_summary_entry($data)** (PriS, Len: 16/17 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_get_class_constants($class)** (PriS, Len: 6/8 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_get_class_markers($class_name)** (PriS, Len: 17/22 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 4 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_get_class_reference($class)** (PriS, Len: 9/13 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_get_class_todos($class)** (PriS, Len: 5/7 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_get_classes_information($classes = null)** (PriS, Len: 30/33 ![(!)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_yellow_ops.png "Method's length could be reduced..") CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_get_component_information($name)** (PriS, Len: 25/29 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_get_components_information()** (PriS, Len: 22/27 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 4 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_get_constants_information()** (PriS, Len: 7/9 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_get_cyc_marker($cyc)** (PriS, Len: 6 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_get_functions_information()** (PriS, Len: 25/29 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_get_methods_information($method)** (PriS, Len: 27/28 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_get_summary_information()** (PriS, Len: 29/31 ![(!)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_yellow_ops.png "Method's length could be reduced..") CyC: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_get_todos_information()** (PriS, Len: 5/7 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_is_codeline_too_long($code_line)** (PriS, Len: 4/5 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_list_method_parameters($method)** (PriS, Len: 7/9 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_update_class_warnings($class_name, $parameters, $length, $cyc)** (PriS, Len: 26/29 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 6 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **analyse_method($method)** (PubS, Len: 28/35 ![(!)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_yellow_ops.png "Method's length could be reduced..") CyC: 5 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **get_class_data($class)** (PubS, Len: 33/43 ![(X)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_red_ics.png "Method's length should be reduced!") CyC: 7 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **get_class_dependencies($class)** (PubS, Len: 23/28 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 5 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **get_components_list()** (PubS, Len: 19/24 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 4 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **get_constants_list()** (PubS, Len: 4/5 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **get_documentation()** (PubS, Len: 18/20 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **get_functions_list()** (PubS, Len: 4/5 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **get_libraries_list($exclude = null)** (PubS, Len: 21/27 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 5 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **get_method_status($method)** (PubS, Len: 6 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 6 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
  
**DEPENDENCIES:**  
  
Uses: **main**, **md**  
  
**TODOS**  
  
- **code analysis** &#10140; load, analyse, printing and more.. use toolbox class?  
- **methods lists** &#10140; add parameter class information, also for aliases  
- **github wiki docs** &#10140; generate wiki pages with md syntax and update  
- **add code-testing methods** &#10140; usephpunit to autobuild and execute tests  
- **get_class_dependencies** &#10140; too unaccurate, see navigator-controller  
- **get_class_dependencies 2** &#10140; it should count, then order dependencies  
- **inherited methods** &#10140; create another list, just after first one  
  
  
***  
  
[⇧](# "to the top") Class CONTROLLER (Tue, 07 May 2013 13:21:34 +0000)  
--------------------------------------------------  
  
**CLASS CONFIGURATION CONSTANTS:**  
  
- **VISIBLE_IN_NAVIGATION** &#10140; true  
- **RENDER_BREADCRUMB** &#10140; true  
  
**CODE REFERENCE:**  
  
- **__construct($action, $args)** (CPub, Len: 6/8 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_set_article($html)** (Pro, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_set_aside($html)** (Pro, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_set_footer($html)** (Pro, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_set_header($html)** (Pro, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_set_nav($html)** (Pro, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_set_section($html)** (Pro, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_set_title($html)** (Pro, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_translate($placeholder)** (Pro, Len: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **get_article()** (Pub, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **get_aside()** (Pub, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **get_footer()** (Pub, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **get_header()** (Pub, Len: 7/8 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **get_nav()** (Pub, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **get_section()** (Pub, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **get_title()** (Pub, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **initialize()** (ProA, Len: - )  
  
**DEPENDENCIES:**  
  
Uses: **html**, **navigator**  
  
  
***  
  
[⇧](# "to the top") Class DB (Mon, 25 Mar 2013 15:47:30 +0000)  
------------------------------------------  
  
**CODE REFERENCE:**  
  
- **__construct()** (CPub, Len: 15/16 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
  
**TODOS**  
  
- **connection constants** &#10140; they should be an array in main configuration  
  
  
***  
  
[⇧](# "to the top") Class ESCORT (Mon, 25 Mar 2013 10:03:51 +0000)  
----------------------------------------------  
  
**TODOS**  
  
- **runtime reg** &#10140; save created objects structure as reference hierarchy  
  
  
***  
  
[⇧](# "to the top") Class HTML (Tue, 07 May 2013 13:24:50 +0000)  
--------------------------------------------  
  
**CODE REFERENCE:**  
  
- **__construct($tag, $attributes = null, $content = null)** (CPub, Len: 20/23 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 4 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_a($href, $content)** (PriS, Len: 8/11 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_br($lines = true, $classes = null)** (PriS, Len: 8/10 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_div($content, $classes = null, $id = null)** (PriS, Len: 11/13 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_h1($content)** (PriS, Len: 4/5 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_h2($content)** (PriS, Len: 4/5 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_h3($content)** (PriS, Len: 4/5 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_h4($content)** (PriS, Len: 4/5 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_h5($content)** (PriS, Len: 4/5 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_h6($content)** (PriS, Len: 4/5 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_h7($content)** (PriS, Len: 4/5 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_img($src, $alt, $title = null)** (PriS, Len: 10/13 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_is_container()** (Pri, Len: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_is_single()** (Pri, Len: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_li($content, $classes = null)** (PriS, Len: 8/10 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_link($href, $rel, $type)** (PriS, Len: 18/22 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_ol($content, $classes = null)** (PriS, Len: 8/10 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_option($value, $name, $selected = false)** (ProS, Len: 15/18 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_p($content)** (PriS, Len: 4/5 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_pre($content)** (PriS, Len: 4/5 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_script($type, $src = null, $content = null)** (PriS, Len: 25/30 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 4 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_select($content, $attributes = null, $classes = null)** (ProS, Len: 8/10 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_set_attributes($attributes)** (Pri, Len: 15/20 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_set_content($content = null)** (Pri, Len: 4/5 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_span($content, $attributes = null, $classes = null)** (PriS, Len: 8/10 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_ul($content, $classes = null)** (PriS, Len: 8/10 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_validate_tag()** (Pri, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **add_favicon($href)** (PubS, Len: 6/7 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **add_js_file($src)** (PubS, Len: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **add_js_script($content)** (PubS, Len: 3 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **add_stylesheet($href)** (PubS, Len: 3 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **array_to_list($tree, $type = "ul")** (PubS, Len: 12/15 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **box($content)** (PubS, Len: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **clearfix()** (PubS, Len: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **divisor($content, $classes = null, $id = null)** (PubS, Len: 5 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **highbox($content)** (PubS, Len: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **hyperlink($href, $content = null)** (PubS, Len: 5 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **image($src, $alt, $title = null)** (PubS, Len: 5 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **newline()** (PubS, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **preform($content)** (PubS, Len: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **spanner($content, $classes = null)** (PubS, Len: 4 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **text($content)** (PubS, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **title($level, $content)** (PubS, Len: 8 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
  
**TODOS**  
  
- **script online loading** &#10140; if != local, should have a lfb..  
- **classes as string** &#10140; check class for $classes = '', should be array  
- **ordered_list** &#10140; fix numbers, falsed as visible in error 404  
  
  
***  
  
[⇧](# "to the top") Class HTML_FORM (Fri, 03 May 2013 16:01:32 +0000)  
-------------------------------------------------  
  
**CODE REFERENCE:**  
  
- **__construct($tag, $attributes = null, $content = null)** (CPub, Len: 20/23 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 4 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_a($href, $content)** (PriS, Len: 8/11 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_br($lines = true, $classes = null)** (PriS, Len: 8/10 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_div($content, $classes = null, $id = null)** (PriS, Len: 11/13 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_h1($content)** (PriS, Len: 4/5 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_h2($content)** (PriS, Len: 4/5 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_h3($content)** (PriS, Len: 4/5 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_h4($content)** (PriS, Len: 4/5 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_h5($content)** (PriS, Len: 4/5 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_h6($content)** (PriS, Len: 4/5 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_h7($content)** (PriS, Len: 4/5 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_img($src, $alt, $title = null)** (PriS, Len: 10/13 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_is_container()** (Pri, Len: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_is_single()** (Pri, Len: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_li($content, $classes = null)** (PriS, Len: 8/10 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_link($href, $rel, $type)** (PriS, Len: 18/22 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_ol($content, $classes = null)** (PriS, Len: 8/10 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_option($value, $name, $selected = false)** (ProS, Len: 15/18 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_p($content)** (PriS, Len: 4/5 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_pre($content)** (PriS, Len: 4/5 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_script($type, $src = null, $content = null)** (PriS, Len: 25/30 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 4 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_select($content, $attributes = null, $classes = null)** (ProS, Len: 8/10 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_set_attributes($attributes)** (Pri, Len: 15/20 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_set_content($content = null)** (Pri, Len: 4/5 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_span($content, $attributes = null, $classes = null)** (PriS, Len: 8/10 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_ul($content, $classes = null)** (PriS, Len: 8/10 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_validate_tag()** (Pri, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **add_favicon($href)** (PubS, Len: 6/7 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **add_js_file($src)** (PubS, Len: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **add_js_script($content)** (PubS, Len: 3 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **add_stylesheet($href)** (PubS, Len: 3 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **array_to_list($tree, $type = "ul")** (PubS, Len: 12/15 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **box($content)** (PubS, Len: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **clearfix()** (PubS, Len: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **divisor($content, $classes = null, $id = null)** (PubS, Len: 5 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **dropdown($options, $selected = null, $onchange = false)** (PubS, Len: 15/19 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 3 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **highbox($content)** (PubS, Len: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **hyperlink($href, $content = null)** (PubS, Len: 5 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **image($src, $alt, $title = null)** (PubS, Len: 5 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **newline()** (PubS, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **preform($content)** (PubS, Len: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **spanner($content, $classes = null)** (PubS, Len: 4 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **text($content)** (PubS, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **title($level, $content)** (PubS, Len: 8 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
  
  
***  
  
[⇧](# "to the top") Class LANGUAGE (Mon, 04 Mar 2013 10:41:00 +0000)  
------------------------------------------------  
  
**CODE REFERENCE:**  
  
- **get_browser_language()** (PubS, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **get_component_translations_array($component)** (PubS, Len: 17/20 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **is_supported($language)** (PubS, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **translate($component, $marker)** (PubS, Len: 24/28 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 8 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
  
**TODOS**  
  
- **automatic translation** &#10140; it could be interessant to use pspell&gettext  
  
  
***  
  
[⇧](# "to the top") Class MAIN (Wed, 24 Apr 2013 10:57:20 +0000)  
--------------------------------------------  
  
**CODE REFERENCE:**  
  
- **__construct($uri)** (CPub, Len: 8/10 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_initialize($route)** (Pri, Len: 24/30 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 5 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_load_libraries()** (Pri, Len: 4/5 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_set_configuration($conf_name)** (Pri, Len: 20/27 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_set_home_component()** (Pri, Len: 3/4 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_set_htmls_from_controller()** (Pri, Len: 7/8 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_set_route_static_traits($components)** (Pri, Len: 7 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **exists_file($path)** (PubS, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **get_buffer($delete = true)** (PubS, Len: 4/6 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **get_call()** (Pub, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **get_fullpath()** (Pub, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **get_head_links()** (Pub, Len: 15/21 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 4 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **get_path()** (Pub, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **get_version($precision = 2)** (PubS, Len: 5 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **is_memcached()** (PubS, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **is_webstoraged()** (PubS, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **launch_error($msg)** (PubS, Len: 7/10 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **launch_error_file_not_found($file)** (PubS, Len: 3 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **relocate_to($url = null)** (PubS, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **resolve_uri($uri = null)** (PubS, Len: 4 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **set_buffer($buffer)** (PubS, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **show_backtrace()** (PubS, Len: 5/6 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **var_dump($what)** (PubS, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
  
**DEPENDENCIES:**  
  
Uses: **code**, **html**  
  
**TODOS**  
  
- **documentation** &#10140; PHP highlight_string/file to rapresent code excerpts  
- **escort library** &#10140; session su PHP poi DB se webstore & memcache fail?  
- **memcache support** &#10140; verify in method, if at least one mem-server works  
- **pdf documentation** &#10140; check file mod-date -> reminder on first decimal?  
- **css selectors** &#10140; uniform to html-class render-methods (default style)  
- **css autoload** &#10140; automatically load ANY file in .inc/inc / css?  
- **custom var_dump** &#10140; it should return ALL parameters, with get_args use  
  
  
***  
  
[⇧](# "to the top") Class MD (Mon, 15 Apr 2013 08:27:08 +0000)  
------------------------------------------  
  
**CODE REFERENCE:**  
  
- **__construct($tag, $content = null, $attributes = null)** (CPub, Len: 9/10 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_h1($content)** (PriS, Len: 3/4 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_h2($content)** (PriS, Len: 3/4 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_h3($content)** (PriS, Len: 3/4 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_img($src, $alt, $title = null)** (PriS, Len: 16/19 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_link($label, $href, $title)** (PriS, Len: 12/14 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_set_content($content = null)** (Pri, Len: 4/5 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_set_formatting($attributes)** (Pri, Len: 5/7 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_validate_tag()** (Pri, Len: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **blue_boh($title)** (PubS, Len: 3 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **green_ok()** (PubS, Len: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **hr()** (PubS, Len: 2/3 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **hyperlink($label, $href, $title = null)** (PubS, Len: 5 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **image($src, $alt = null, $title = null)** (PubS, Len: 5 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **red_ics($title)** (PubS, Len: 3 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **text($content)** (PubS, Len: 3/4 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **title($level, $content)** (PubS, Len: 8 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **to_the_top()** (PubS, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **yellow_ops($title)** (PubS, Len: 3 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
  
  
***  
  
[⇧](# "to the top") Class NAVIGATOR (Tue, 07 May 2013 13:22:55 +0000)  
-------------------------------------------------  
  
**CODE REFERENCE:**  
  
- **__construct()** (CPub, Len: 19/22 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_add_branch($controller)** (Pri, Len: 25/30 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 3 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_add_handler_static_options($static_variables, $sub, $controller, $link, $object)** (Pri, Len: 24/28 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 4 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_add_handlers($controller, $object, $sub)** (Pri, Len: 24/28 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_get_action_select($structure, $controller, $link)** (Pri, Len: 12/15 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_get_args_select($structure, $controller, $link)** (Pri, Len: 22/28 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 3 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_initialize_options($data)** (Pri, Len: 7/9 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_initialize_structure()** (Pri, Len: 8 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_print_additional_parameters($branch, $link, $controller)** (Pri, Len: 12/14 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_print_handler_name($branch, $link, $controller)** (Pri, Len: 8/10 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_print_handler_parameter($branch, $link, $controller)** (Pri, Len: 14/16 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_render_active_breadcrumb($controller)** (Pri, Len: 25/30 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 3 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_render_breadcrumb($controller)** (Pri, Len: 19/23 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **render_active_breadcrumb()** (PubS, Len: 8/10 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **render_advanced_list()** (PubS, Len: 5/7 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **render_breadcrumb()** (PubS, Len: 8/10 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **render_list()** (PubS, Len: 4/6 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **render_sitemap()** (PubS, Len: 3/5 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
  
**DEPENDENCIES:**  
  
Uses: **controller**, **html**, **main**  
  
**TODOS**  
  
- **render_breadcrumb** &#10140; should return html code, or printing it directly?  
- **render_list** &#10140; this should be CSS3 and appear on a mouse gesture..  
- **escort class functionalities** &#10140; should they be here available?  
  
  
***  
  
[⇧](# "to the top") Class POWERING (Tue, 23 Apr 2013 15:42:48 +0000)  
------------------------------------------------  
  
**TODOS**  
  
- **test added library** &#10140; to be filled with handlers, or something similar  
  
  
***  
  
[⇧](# "to the top") Class TOOLBOX (Fri, 03 May 2013 16:25:14 +0000)  
-----------------------------------------------  
  
**CODE REFERENCE:**  
  
- **format_value($mixed)** (PubS, Len: 19 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 4 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
  
  
***  
  
[⇧](# "to the top") Class WIDGETS (Tue, 23 Apr 2013 15:41:36 +0000)  
-----------------------------------------------  
  
**TODOS**  
  
- **not even used** &#10140; to be removed if not necessary, maybe html extension?  
  
  
***  
  
  
Available components:  
=====================  
  
  
[⇧](# "to the top") Class ADMIN (Tue, 12 Mar 2013 12:19:30 +0000)  
---------------------------------------------  
  
**CLASS CONFIGURATION CONSTANTS:**  
  
- **VISIBLE_IN_NAVIGATION** &#10140; true  
- **RENDER_BREADCRUMB** &#10140; true  
  
**CODE REFERENCE:**  
  
- **__construct($action, $args)** (CPub, Len: 6/8 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_handler()** (Pro, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_set_article($html)** (Pro, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_set_aside($html)** (Pro, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_set_footer($html)** (Pro, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_set_header($html)** (Pro, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_set_nav($html)** (Pro, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_set_section($html)** (Pro, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_set_title($html)** (Pro, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_translate($placeholder)** (Pro, Len: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **get_article()** (Pub, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **get_aside()** (Pub, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **get_footer()** (Pub, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **get_header()** (Pub, Len: 7/8 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **get_nav()** (Pub, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **get_section()** (Pub, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **get_title()** (Pub, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **initialize()** (Pub, Len: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
  
**DEPENDENCIES:**  
  
Uses: **html**, **navigator**  
  
[⇧](# "to the top") Class ADMIN_HELPER (Wed, 20 Mar 2013 19:47:11 +0000)  
----------------------------------------------------  
  
  
***  
  
[⇧](# "to the top") Class CONTROL (Wed, 17 Apr 2013 15:33:59 +0000)  
-----------------------------------------------  
  
**CLASS CONFIGURATION CONSTANTS:**  
  
- **VISIBLE_IN_NAVIGATION** &#10140; true  
- **RENDER_BREADCRUMB** &#10140; true  
  
**CODE REFERENCE:**  
  
- **__construct($action, $args)** (CPub, Len: 6/8 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_handler()** (Pro, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_handler_application()** (Pri, Len: 26/30 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_handler_core()** (Pri, Len: 3 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_handler_core_code()** (Pri, Len: 3 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_handler_core_controller()** (Pri, Len: 3 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_handler_core_db()** (Pri, Len: 3 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_handler_core_escort()** (Pri, Len: 3 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_handler_core_html()** (Pri, Len: 3 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_handler_core_language()** (Pri, Len: 9/10 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_handler_core_md()** (Pri, Len: 3 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_handler_core_navigator()** (Pri, Len: 3 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_handler_core_toolbox()** (Pri, Len: 3 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_handler_core_widget()** (Pri, Len: 3 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_handler_modules()** (Pri, Len: 3 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_handler_modules_admin()** (Pri, Len: 3 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_handler_modules_control()** (Pri, Len: 3 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_handler_modules_documentation()** (Pri, Len: 3 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_handler_modules_error()** (Pri, Len: 3 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_handler_phpinfo()** (Pri, Len: 20/23 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 5 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_handler_plugins()** (Pri, Len: 20/24 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_set_article($html)** (Pro, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_set_aside($html)** (Pro, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_set_footer($html)** (Pro, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_set_header($html)** (Pro, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_set_nav($html)** (Pro, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_set_section($html)** (Pro, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_set_title($html)** (Pro, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_translate($placeholder)** (Pro, Len: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **get_article()** (Pub, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **get_aside()** (Pub, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **get_footer()** (Pub, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **get_header()** (Pub, Len: 7/8 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **get_nav()** (Pub, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **get_section()** (Pub, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **get_title()** (Pub, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **initialize()** (Pub, Len: 14/16 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
  
**DEPENDENCIES:**  
  
Uses: **html**, **language**, **main**  
  
**TODOS**  
  
- **phpinfo server conf** &#10140; better rappresentation of access details  
- **plugins libraries** &#10140; find a way to incapsulate needed translations  
- **handler_core_language** &#10140; this should be te next to be written..  
  
[⇧](# "to the top") Class CONTROL_HELPER (Thu, 21 Mar 2013 11:22:55 +0000)  
------------------------------------------------------  
  
**CODE REFERENCE:**  
  
- **get_configuration_phpinfos($output = null)** (Pub, Len: 11/12 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **get_environment_phpinfos($output = null)** (Pub, Len: 9/12 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **get_general_phpinfos($output = null)** (Pub, Len: 5/7 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **get_phpinfos($arg)** (Pub, Len: 11/14 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 3 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
  
**DEPENDENCIES:**  
  
Uses: **html**  
  
  
***  
  
[⇧](# "to the top") Class DOCUMENTATION (Mon, 25 Mar 2013 15:43:33 +0000)  
-----------------------------------------------------  
  
**CLASS CONFIGURATION CONSTANTS:**  
  
- **VISIBLE_IN_NAVIGATION** &#10140; true  
- **RENDER_BREADCRUMB** &#10140; true  
  
**CODE REFERENCE:**  
  
- **__construct($action, $args)** (CPub, Len: 6/8 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_handler()** (Pro, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_handler_list()** (Pri, Len: 3 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_handler_list_files()** (Pri, Len: 3 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_set_article($html)** (Pro, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_set_aside($html)** (Pro, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_set_footer($html)** (Pro, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_set_header($html)** (Pro, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_set_nav($html)** (Pro, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_set_section($html)** (Pro, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_set_title($html)** (Pro, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_translate($placeholder)** (Pro, Len: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **get_article()** (Pub, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **get_aside()** (Pub, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **get_footer()** (Pub, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **get_header()** (Pub, Len: 7/8 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **get_nav()** (Pub, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **get_section()** (Pub, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **get_title()** (Pub, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **initialize()** (Pub, Len: 27/30 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 4 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
  
**TODOS**  
  
- **method toString** &#10140; to get a informative highlighted code as reference  
  
[⇧](# "to the top") Class DOCUMENTATION_HELPER (Wed, 20 Mar 2013 19:47:11 +0000)  
------------------------------------------------------------  
  
  
***  
  
[⇧](# "to the top") Class ERROR (Tue, 07 May 2013 13:24:50 +0000)  
---------------------------------------------  
  
**CLASS CONFIGURATION CONSTANTS:**  
  
- **VISIBLE_IN_NAVIGATION** &#10140; false  
- **RENDER_BREADCRUMB** &#10140; false  
  
**CODE REFERENCE:**  
  
- **__construct($action, $args)** (CPub, Len: 6/8 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_handler()** (Pro, Len: 7/10 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_handler_400()** (Pri, Len: 6/8 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_handler_401()** (Pri, Len: 6/8 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_handler_403()** (Pri, Len: 6/8 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_handler_404()** (Pri, Len: 7/10 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_handler_500()** (Pri, Len: 13/17 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_set_article($html)** (Pro, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_set_aside($html)** (Pro, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_set_footer($html)** (Pro, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_set_header($html)** (Pro, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_set_nav($html)** (Pro, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_set_section($html)** (Pro, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_set_title($html)** (Pro, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_translate($placeholder)** (Pro, Len: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **get_article()** (Pub, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **get_aside()** (Pub, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **get_footer()** (Pub, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **get_header()** (Pub, Len: 7/8 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **get_nav()** (Pub, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **get_section()** (Pub, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **get_title()** (Pub, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **initialize()** (Pub, Len: 11/12 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
  
**DEPENDENCIES:**  
  
Uses: **html**, **main**, **navigator**  
  
[⇧](# "to the top") Class ERROR_HELPER (Wed, 20 Mar 2013 19:47:11 +0000)  
----------------------------------------------------  
  
  
***  
  
[⇧](# "to the top") Class HOMEPAGE (Tue, 12 Mar 2013 12:19:30 +0000)  
------------------------------------------------  
  
**CLASS CONFIGURATION CONSTANTS:**  
  
- **VISIBLE_IN_NAVIGATION** &#10140; true  
- **RENDER_BREADCRUMB** &#10140; true  
  
**CODE REFERENCE:**  
  
- **__construct($action, $args)** (CPub, Len: 6/8 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_handler()** (Pro, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_set_article($html)** (Pro, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_set_aside($html)** (Pro, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_set_footer($html)** (Pro, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_set_header($html)** (Pro, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_set_nav($html)** (Pro, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_set_section($html)** (Pro, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_set_title($html)** (Pro, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_translate($placeholder)** (Pro, Len: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **get_article()** (Pub, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **get_aside()** (Pub, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **get_footer()** (Pub, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **get_header()** (Pub, Len: 7/8 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **get_nav()** (Pub, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **get_section()** (Pub, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **get_title()** (Pub, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **initialize()** (Pub, Len: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
  
**DEPENDENCIES:**  
  
Uses: **html**, **navigator**  
  
[⇧](# "to the top") Class HOMEPAGE_HELPER (Wed, 20 Mar 2013 19:47:33 +0000)  
-------------------------------------------------------  
  
  
***  
  
[⇧](# "to the top") Class POWER (Tue, 12 Mar 2013 12:19:30 +0000)  
---------------------------------------------  
  
**CLASS CONFIGURATION CONSTANTS:**  
  
- **VISIBLE_IN_NAVIGATION** &#10140; true  
- **RENDER_BREADCRUMB** &#10140; true  
  
**CODE REFERENCE:**  
  
- **__construct($action, $args)** (CPub, Len: 6/8 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_set_article($html)** (Pro, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_set_aside($html)** (Pro, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_set_footer($html)** (Pro, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_set_header($html)** (Pro, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_set_nav($html)** (Pro, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_set_section($html)** (Pro, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_set_title($html)** (Pro, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **_translate($placeholder)** (Pro, Len: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **get_article()** (Pub, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **get_aside()** (Pub, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **get_footer()** (Pub, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **get_header()** (Pub, Len: 7/8 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **get_nav()** (Pub, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **get_section()** (Pub, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **get_title()** (Pub, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **initialize()** (Pub, Len: 0/1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
  
[⇧](# "to the top") Class POWER_HELPER (Wed, 20 Mar 2013 19:47:33 +0000)  
----------------------------------------------------  
  
  
***  
  
  
  
  
  
  
Copyright © 2011-2013 | Das S.C.H.R.I.M.P. Project  
