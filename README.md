![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/schrimp_favicon_md.ico "") Das S.C.H.R.I.M.P.'s Doku v1.0.2013.09.24  
---------------------------------------------------------------------------------------------------------------------------------  
  
Table of contents  
-----------------  
  
[General reference](#general-reference-- "")  
[Library code](#-class-code-24092013-- "") &#10029;&#10029;  (root/.lib/code.php, Len: 668/794, CIS: 15 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "")) &#10140;  3 ![(!)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_yellow_ops.png "Attention! Some yellow alert(s)!")  
[Library controller](#-class-controller-24092013-- "") (root/.lib/controller.php, Len: 93/121, CIS: 10 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))   
[Library db](#-class-db-24092013-- "") &#10029;  (root/.lib/db.php, Len: 93/109, CIS: 3 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))   
[- db_object](#-class-db_object-24092013-- "") (root/.lib/db_object.php ![(?)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_blue_boh.png "1 too long line(s) found!") Len: 36/43, CIS: 5 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))   
[Library escort](#-class-escort-24092013-- "") (root/.lib/escort.php, Len: 32/40, CIS: 5 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))   
[Library html](#-class-html-24092013-- "") &#10029;&#10029;  (root/.lib/html.php, Len: 467/575, CIS: 21 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))   
[- html_form](#-class-html_form-24092013-- "") &#10029;  (root/.lib/html_form.php, Len: 65/71, CIS: 3 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))   
[Library language](#-class-language-24092013-- "") &#10029;&#10029;  (root/.lib/language.php, Len: 88/103, CIS: 8 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))   
[Library main](#-class-main-24092013-- "") &#10029;&#10029;&#10029;&#10029;&#10029;&#10029;  (root/.main.php, Len: 244/308, CIS: 30 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))   
[Library md](#-class-md-24092013-- "") (root/.lib/md.php, Len: 185/231, CIS: 14 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))   
[Library navigator](#-class-navigator-24092013-- "") &#10029;  (root/.lib/navigator.php, Len: 307/379, CIS: 8 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))   
[Library powering](#-class-powering-24092013-- "") &#10029;  (root/lib/powering.php, Len: 5/6, CIS: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))   
[Library toolbox](#-class-toolbox-24092013-- "") &#10029;&#10029;&#10029;&#10029;&#10029;  (root/.lib/toolbox.php, Len: 73/82, CIS: 6 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))   
[Component admin](#-class-admin-24092013-- "") (root/.app/admin.php, Len: 10/12, CIS: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))   
[- admin_helper](#-class-admin_helper-24092013-- "") (root/.app/admin_helper.php, Len: 1/1, CIS: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))   
[Component control](#-class-control-24092013-- "") &#10029;&#10029;  (root/.app/control.php, Len: 198/233, CIS: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))   
[- control_helper](#-class-control_helper-24092013-- "") (root/.app/control_helper.php, Len: 64/79, CIS: 5 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))   
[Component documentation](#-class-documentation-24092013-- "") (root/.app/documentation.php, Len: 35/42, CIS: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))   
[- documentation_helper](#-class-documentation_helper-24092013-- "") (root/.app/documentation_helper.php, Len: 6/7, CIS: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))   
[Component error](#-class-error-24092013-- "") (root/.app/error.php, Len: 80/106, CIS: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))   
[- error_helper](#-class-error_helper-24092013-- "") (root/.app/error_helper.php, Len: 1/1, CIS: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))   
[Component homepage](#-class-homepage-24092013-- "") (root/app/homepage.php, Len: 10/12, CIS: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))   
[- homepage_helper](#-class-homepage_helper-24092013-- "") (root/app/homepage_helper.php, Len: 1/1, CIS: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))   
[Component power](#-class-power-24092013-- "") &#10029;&#10029;  (root/app/power.php, Len: 8/10, CIS: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))   
[- power_helper](#-class-power_helper-24092013-- "") (root/app/power_helper.php, Len: 1/1, CIS: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))   
  
General reference  
-----------------  
  
**GLOBAL CONFIGURATION CONSTANTS:**  
  
- **CODE_DATE_FORMAT** &#10140; "d.m.Y"  
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
- **SET_GITHUB_WIKIPATH** &#10140; "https://github.com/TheB3Rt0z/schrimp/wiki/"  
- **SET_TRANSLATIONS_EXTENSION** &#10140; ".txt"  
  
  
**FUNCTION ALIASES:**  
  
- **fe($path)** &#10140; .main.php on line 330,
  returns boolean if realpath path exists on running server;
  @param string $path
  @return boolean true if realpath exists, false otherwise
  
- **fm($mixed)** &#10140; .lib/toolbox.php on line 94,
  returns a beautiful formatted value, mixed variable-type-dependant;
  @param mixed $mixed
  @return mixed depending on internally defined rules
  
- **le($msg)** &#10140; .main.php on line 360,
  launches a customizable error 500, mit optional backtrace for debug;
  @param string $msg
  @return boolean false after relocate
  
- **pr($source)** &#10140; .lib/toolbox.php on line 104,
  returns a parsed output, source-type dependant;
  @param string $source
  @return mixed depending on source origin
  
- **rt($url = null)** &#10140; .main.php on line 350,
  relocates to given relative url or to base path on default;
  @param string $url
  @return void
  
- **ru($uri = null)** &#10140; .main.php on line 340,
  returns an absolute uri, based on current server configuration;
  @param string $uri
  @return string absolute http unified resource identifier
  
- **sb()** &#10140; .main.php on line 369,
  show call's backtrace with help of error base handler
  @return void
  
- **tr($component, $marker)** &#10140; .lib/language.php on line 118,
  executes language translation of marker identifier, referring to given component;
  @param string $component
  @param string $marker
  @return mixed callback function returned value(s)
  
- **vd($what)** &#10140; .main.php on line 320,
  returns pre-formatted mixed variables;
  @param multi $what
  @return void
  
  
  
**TODOS:**  
  
- **? admin bar** &#10140; optional control to measure run time performance (gApis)  
- **configuration.tmp settings order** &#10140; use comments and find a beautiful order  
  
  
  
***  
  
[⇧](# "to the top") Class CODE (24.09.2013)  
-----------------------  
  
**CODE REFERENCE:**  
  
- **[_add_paragraph](https://github.com/TheB3Rt0z/schrimp/wiki/code-_add_paragraph "")($data, $title)** (PriS, Len: 5 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[_add_summary_entry](https://github.com/TheB3Rt0z/schrimp/wiki/code-_add_summary_entry "")($data)** (PriS, Len: 23/24 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[_get_cis_marker](https://github.com/TheB3Rt0z/schrimp/wiki/code-_get_cis_marker "")($cis)** (PriS, Len: 10 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 3 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[_get_class_constants](https://github.com/TheB3Rt0z/schrimp/wiki/code-_get_class_constants "")(ReflectionClass $class)** (PriS, Len: 6/8 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[_get_class_markers](https://github.com/TheB3Rt0z/schrimp/wiki/code-_get_class_markers "")($class_name)** (PriS, Len: 17/22 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 4 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[_get_class_reference](https://github.com/TheB3Rt0z/schrimp/wiki/code-_get_class_reference "")(ReflectionClass $class)** (PriS, Len: 21/26 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 5 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[_get_class_todos](https://github.com/TheB3Rt0z/schrimp/wiki/code-_get_class_todos "")(ReflectionClass $class)** (PriS, Len: 5/7 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[_get_classes_information](https://github.com/TheB3Rt0z/schrimp/wiki/code-_get_classes_information "")($classes = null)** (PriS, Len: 32/35 ![(!)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_yellow_ops.png "Method's length could be reduced..") CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[_get_component_information](https://github.com/TheB3Rt0z/schrimp/wiki/code-_get_component_information "")($name)** (PriS, Len: 25/29 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[_get_components_information](https://github.com/TheB3Rt0z/schrimp/wiki/code-_get_components_information "")()** (PriS, Len: 22/27 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 4 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[_get_constants_information](https://github.com/TheB3Rt0z/schrimp/wiki/code-_get_constants_information "")()** (PriS, Len: 7/9 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[_get_cyc_marker](https://github.com/TheB3Rt0z/schrimp/wiki/code-_get_cyc_marker "")($cyc)** (PriS, Len: 6 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[_get_functions_information](https://github.com/TheB3Rt0z/schrimp/wiki/code-_get_functions_information "")()** (PriS, Len: 20/24 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[_get_len_marker](https://github.com/TheB3Rt0z/schrimp/wiki/code-_get_len_marker "")($length)** (PriS, Len: 10 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 3 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[_get_methods_information](https://github.com/TheB3Rt0z/schrimp/wiki/code-_get_methods_information "")(ReflectionMethod $method)** (PriS, Len: 27/30 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[_get_summary_information](https://github.com/TheB3Rt0z/schrimp/wiki/code-_get_summary_information "")()** (PriS, Len: 23/25 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[_get_todos_information](https://github.com/TheB3Rt0z/schrimp/wiki/code-_get_todos_information "")()** (PriS, Len: 5/7 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[_is_codeline_too_long](https://github.com/TheB3Rt0z/schrimp/wiki/code-_is_codeline_too_long "")($code_line)** (PriS, Len: 4/5 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[_list_method_parameters](https://github.com/TheB3Rt0z/schrimp/wiki/code-_list_method_parameters "")($functional_code)** (PriS, Len: 10/12 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[_update_class_warnings](https://github.com/TheB3Rt0z/schrimp/wiki/code-_update_class_warnings "")($class_name, $parameters, $length, $cyc)** (PriS, Len: 23/26 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 6 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[_update_wiki_file](https://github.com/TheB3Rt0z/schrimp/wiki/code-_update_wiki_file "")($class, $method, $infos, $code)** (PriS, Len: 4/6 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[analyse_method](https://github.com/TheB3Rt0z/schrimp/wiki/code-analyse_method "")(ReflectionMethod $method)** (PubS, Len: 25/31 ![(!)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_yellow_ops.png "Method's length could be reduced..") CyC: 4 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[get_class_cis](https://github.com/TheB3Rt0z/schrimp/wiki/code-get_class_cis "")(ReflectionClass $class)** (PubS, Len: 9/11 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 4 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[get_class_data](https://github.com/TheB3Rt0z/schrimp/wiki/code-get_class_data "")(ReflectionClass $class)** (PubS, Len: 26/34 ![(!)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_yellow_ops.png "Method's length could be reduced..") CyC: 3 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[get_class_dependencies](https://github.com/TheB3Rt0z/schrimp/wiki/code-get_class_dependencies "")(ReflectionClass $class)** (PubS, Len: 25/30 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 6 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[get_components_list](https://github.com/TheB3Rt0z/schrimp/wiki/code-get_components_list "")()** (PubS, Len: 19/24 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 4 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[get_constants_list](https://github.com/TheB3Rt0z/schrimp/wiki/code-get_constants_list "")()** (PubS, Len: 4/5 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[get_documentation](https://github.com/TheB3Rt0z/schrimp/wiki/code-get_documentation "")()** (PubS, Len: 15/16 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[get_documentation_footer](https://github.com/TheB3Rt0z/schrimp/wiki/code-get_documentation_footer "")()** (PubS, Len: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[get_documentation_title](https://github.com/TheB3Rt0z/schrimp/wiki/code-get_documentation_title "")()** (PubS, Len: 4/5 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[get_functions_list](https://github.com/TheB3Rt0z/schrimp/wiki/code-get_functions_list "")()** (PubS, Len: 4/5 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[get_libraries_list](https://github.com/TheB3Rt0z/schrimp/wiki/code-get_libraries_list "")($exclude = null)** (PubS, Len: 21/27 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 5 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[get_method_code](https://github.com/TheB3Rt0z/schrimp/wiki/code-get_method_code "")(ReflectionMethod $method, $highlighting = false)** (PubS, Len: 22/25 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[get_method_status](https://github.com/TheB3Rt0z/schrimp/wiki/code-get_method_status "")(ReflectionMethod $method)** (PubS, Len: 7 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 7 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
  
**DEPENDENCIES:**  
  
Uses: **main**, **md**, **toolbox**  
  
**TODOS:**  
  
- **get_class_dependencies** &#10140; too unaccurate, see navigator-controller  
- **wrong parentheses** &#10140; add checks on ) { et similia cases (f.e. array( )  
  
  
***  
  
[⇧](# "to the top") Class CONTROLLER (24.09.2013)  
-----------------------------  
  
**CLASS CONFIGURATION CONSTANTS:**  
  
- **VISIBLE_IN_NAVIGATION** &#10140; true  
- **RENDER_BREADCRUMB** &#10140; true  
  
**CODE REFERENCE:**  
  
- **[__construct](https://github.com/TheB3Rt0z/schrimp/wiki/controller-__construct "")($action, $args)** (CPub, Len: 7/10 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[_set_article](https://github.com/TheB3Rt0z/schrimp/wiki/controller-_set_article "")($html)** (Pro, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[_set_aside](https://github.com/TheB3Rt0z/schrimp/wiki/controller-_set_aside "")($html)** (Pro, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[_set_footer](https://github.com/TheB3Rt0z/schrimp/wiki/controller-_set_footer "")($html)** (Pro, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[_set_header](https://github.com/TheB3Rt0z/schrimp/wiki/controller-_set_header "")($html)** (Pro, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[_set_nav](https://github.com/TheB3Rt0z/schrimp/wiki/controller-_set_nav "")($html)** (Pro, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[_set_section](https://github.com/TheB3Rt0z/schrimp/wiki/controller-_set_section "")($html)** (Pro, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[_set_title](https://github.com/TheB3Rt0z/schrimp/wiki/controller-_set_title "")($html)** (Pro, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[_translate](https://github.com/TheB3Rt0z/schrimp/wiki/controller-_translate "")($placeholder)** (Pro, Len: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[get_article](https://github.com/TheB3Rt0z/schrimp/wiki/controller-get_article "")()** (Pub, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[get_aside](https://github.com/TheB3Rt0z/schrimp/wiki/controller-get_aside "")()** (Pub, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[get_footer](https://github.com/TheB3Rt0z/schrimp/wiki/controller-get_footer "")()** (Pub, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[get_header](https://github.com/TheB3Rt0z/schrimp/wiki/controller-get_header "")()** (Pub, Len: 7/8 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[get_nav](https://github.com/TheB3Rt0z/schrimp/wiki/controller-get_nav "")()** (Pub, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[get_section](https://github.com/TheB3Rt0z/schrimp/wiki/controller-get_section "")()** (Pub, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[get_title](https://github.com/TheB3Rt0z/schrimp/wiki/controller-get_title "")()** (Pub, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[initialize](https://github.com/TheB3Rt0z/schrimp/wiki/controller-initialize "")()** (ProA, Len: - )  
  
**DEPENDENCIES:**  
  
Uses: **escort**, **html**, **navigator**  
  
  
***  
  
[⇧](# "to the top") Class DB (24.09.2013)  
---------------------  
  
**CODE REFERENCE:**  
  
- **[__construct](https://github.com/TheB3Rt0z/schrimp/wiki/db-__construct "")()** (CPub, Len: 18/21 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[_process_mysql_result](https://github.com/TheB3Rt0z/schrimp/wiki/db-_process_mysql_result "")(mysqli_result $result)** (Pri, Len: 11/13 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 3 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[_query](https://github.com/TheB3Rt0z/schrimp/wiki/db-_query "")($query, $type = null)** (Pro, Len: 21/24 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[_rescue_mysql_connection](https://github.com/TheB3Rt0z/schrimp/wiki/db-_rescue_mysql_connection "")()** (Pri, Len: 24/26 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 3 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
  
**DEPENDENCIES:**  
  
Uses: **escort**  
  
**TODOS:**  
  
- **check table engines** &#10140; fix engine standard for (all?) database tables  
  
  
***  
  
[⇧](# "to the top") Class DB_OBJECT (24.09.2013)  
----------------------------  
  
**CODE REFERENCE:**  
  
- **[__construct](https://github.com/TheB3Rt0z/schrimp/wiki/db_object-__construct "")($identifier = false)** (CPub ![(?)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_blue_boh.png "1 too long line(s) found!") Len: 26/29 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 6 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[load](https://github.com/TheB3Rt0z/schrimp/wiki/db_object-load "")($identifier)** (PubS, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[save](https://github.com/TheB3Rt0z/schrimp/wiki/db_object-save "")()** (Pub, Len: - )  
  
**INHERITED METHODS:**  
  
- **[_query](https://github.com/TheB3Rt0z/schrimp/wiki/db-_query "")($query, $type = null)** (Pro, Len: 21/24 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
  
**DEPENDENCIES:**  
  
Uses: **db**  
  
  
***  
  
[⇧](# "to the top") Class ESCORT (24.09.2013)  
-------------------------  
  
**CODE REFERENCE:**  
  
- **[get_object](https://github.com/TheB3Rt0z/schrimp/wiki/escort-get_object "")($class, $identifier, $pos)** (PubS, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[get_objects](https://github.com/TheB3Rt0z/schrimp/wiki/escort-get_objects "")($class = null, $identifier = null)** (PubS, Len: 14/17 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 3 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[register_object](https://github.com/TheB3Rt0z/schrimp/wiki/escort-register_object "")($object, $identifier)** (PubS, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
  
  
***  
  
[⇧](# "to the top") Class HTML (24.09.2013)  
-----------------------  
  
**CODE REFERENCE:**  
  
- **[__construct](https://github.com/TheB3Rt0z/schrimp/wiki/html-__construct "")($tag, $attributes = null, $content = null)** (CPub, Len: 20/24 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 4 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[_a](https://github.com/TheB3Rt0z/schrimp/wiki/html-_a "")($href, $content)** (PriS, Len: 7/10 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[_br](https://github.com/TheB3Rt0z/schrimp/wiki/html-_br "")($lines = true, $classes = null)** (PriS, Len: 7/9 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[_code](https://github.com/TheB3Rt0z/schrimp/wiki/html-_code "")($content)** (PriS, Len: 4/5 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[_div](https://github.com/TheB3Rt0z/schrimp/wiki/html-_div "")($content, $classes = null, $id = null)** (PriS, Len: 9/11 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[_h1](https://github.com/TheB3Rt0z/schrimp/wiki/html-_h1 "")($content)** (PriS, Len: 4/5 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[_h2](https://github.com/TheB3Rt0z/schrimp/wiki/html-_h2 "")($content)** (PriS, Len: 4/5 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[_h3](https://github.com/TheB3Rt0z/schrimp/wiki/html-_h3 "")($content)** (PriS, Len: 4/5 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[_h4](https://github.com/TheB3Rt0z/schrimp/wiki/html-_h4 "")($content)** (PriS, Len: 4/5 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[_h5](https://github.com/TheB3Rt0z/schrimp/wiki/html-_h5 "")($content)** (PriS, Len: 4/5 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[_h6](https://github.com/TheB3Rt0z/schrimp/wiki/html-_h6 "")($content)** (PriS, Len: 4/5 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[_h7](https://github.com/TheB3Rt0z/schrimp/wiki/html-_h7 "")($content)** (PriS, Len: 4/5 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[_img](https://github.com/TheB3Rt0z/schrimp/wiki/html-_img "")($src, $alt, $title = null)** (PriS, Len: 8/11 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[_is_container](https://github.com/TheB3Rt0z/schrimp/wiki/html-_is_container "")()** (Pri, Len: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[_is_single](https://github.com/TheB3Rt0z/schrimp/wiki/html-_is_single "")()** (Pri, Len: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[_li](https://github.com/TheB3Rt0z/schrimp/wiki/html-_li "")($content, $classes = null)** (PriS, Len: 7/9 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[_link](https://github.com/TheB3Rt0z/schrimp/wiki/html-_link "")($href, $rel, $type)** (PriS, Len: 16/20 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[_ol](https://github.com/TheB3Rt0z/schrimp/wiki/html-_ol "")($content, $classes = null)** (PriS, Len: 7/9 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[_option](https://github.com/TheB3Rt0z/schrimp/wiki/html-_option "")($value, $name, $selected = false)** (ProS, Len: 13/16 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[_p](https://github.com/TheB3Rt0z/schrimp/wiki/html-_p "")($content)** (PriS, Len: 4/5 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[_pre](https://github.com/TheB3Rt0z/schrimp/wiki/html-_pre "")($content)** (PriS, Len: 4/5 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[_script](https://github.com/TheB3Rt0z/schrimp/wiki/html-_script "")($type, $src = null, $content = null)** (PriS, Len: 23/28 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 4 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[_select](https://github.com/TheB3Rt0z/schrimp/wiki/html-_select "")($content, $attributes = null, $classes = null)** (ProS, Len: 6/8 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[_set_attributes](https://github.com/TheB3Rt0z/schrimp/wiki/html-_set_attributes "")($attributes)** (Pri, Len: 15/20 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[_set_content](https://github.com/TheB3Rt0z/schrimp/wiki/html-_set_content "")($content = null)** (Pri, Len: 4/5 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[_span](https://github.com/TheB3Rt0z/schrimp/wiki/html-_span "")($content, $attributes = null, $classes = null)** (PriS, Len: 6/8 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[_ul](https://github.com/TheB3Rt0z/schrimp/wiki/html-_ul "")($content, $classes = null)** (PriS, Len: 7/9 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[_validate_tag](https://github.com/TheB3Rt0z/schrimp/wiki/html-_validate_tag "")()** (Pri, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[add_favicon](https://github.com/TheB3Rt0z/schrimp/wiki/html-add_favicon "")($href)** (PubS, Len: 6/7 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[add_js_file](https://github.com/TheB3Rt0z/schrimp/wiki/html-add_js_file "")($src)** (PubS, Len: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[add_js_script](https://github.com/TheB3Rt0z/schrimp/wiki/html-add_js_script "")($content)** (PubS, Len: 3 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[add_stylesheet](https://github.com/TheB3Rt0z/schrimp/wiki/html-add_stylesheet "")($href)** (PubS, Len: 3 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[array_to_list](https://github.com/TheB3Rt0z/schrimp/wiki/html-array_to_list "")($tree, $type = "ul")** (PubS, Len: 11/14 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[box](https://github.com/TheB3Rt0z/schrimp/wiki/html-box "")($content)** (PubS, Len: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[clearfix](https://github.com/TheB3Rt0z/schrimp/wiki/html-clearfix "")()** (PubS, Len: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[codeblock](https://github.com/TheB3Rt0z/schrimp/wiki/html-codeblock "")($content)** (PubS, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[divisor](https://github.com/TheB3Rt0z/schrimp/wiki/html-divisor "")($content, $classes = null, $id = null)** (PubS, Len: 3 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[get_content](https://github.com/TheB3Rt0z/schrimp/wiki/html-get_content "")()** (Pub, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[highbox](https://github.com/TheB3Rt0z/schrimp/wiki/html-highbox "")($content)** (PubS, Len: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[hyperlink](https://github.com/TheB3Rt0z/schrimp/wiki/html-hyperlink "")($href, $content = null)** (PubS, Len: 4 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[image](https://github.com/TheB3Rt0z/schrimp/wiki/html-image "")($src, $alt, $title = null)** (PubS, Len: 3 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[newline](https://github.com/TheB3Rt0z/schrimp/wiki/html-newline "")()** (PubS, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[preform](https://github.com/TheB3Rt0z/schrimp/wiki/html-preform "")($content)** (PubS, Len: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[spanner](https://github.com/TheB3Rt0z/schrimp/wiki/html-spanner "")($content, $classes = null)** (PubS, Len: 3 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[text](https://github.com/TheB3Rt0z/schrimp/wiki/html-text "")($content)** (PubS, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[title](https://github.com/TheB3Rt0z/schrimp/wiki/html-title "")($level, $content)** (PubS, Len: 7 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
  
**DEPENDENCIES:**  
  
Uses: **escort**, **main**  
  
**TODOS:**  
  
- **script online loading** &#10140; if != local, should have a lfb..  
- **ordered_list** &#10140; fix numbers, falsed as visible in error 404  
  
  
***  
  
[⇧](# "to the top") Class HTML_FORM (24.09.2013)  
----------------------------  
  
**CODE REFERENCE:**  
  
- **[dropdown](https://github.com/TheB3Rt0z/schrimp/wiki/html_form-dropdown "")($options, $selected = null, $onchange = false)** (PubS, Len: 13/17 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 3 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
  
**INHERITED METHODS:**  
  
- **[__construct](https://github.com/TheB3Rt0z/schrimp/wiki/html-__construct "")($tag, $attributes = null, $content = null)** (CPub, Len: 20/24 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 4 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[_option](https://github.com/TheB3Rt0z/schrimp/wiki/html-_option "")($value, $name, $selected = false)** (ProS, Len: 13/16 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[_select](https://github.com/TheB3Rt0z/schrimp/wiki/html-_select "")($content, $attributes = null, $classes = null)** (ProS, Len: 6/8 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[add_favicon](https://github.com/TheB3Rt0z/schrimp/wiki/html-add_favicon "")($href)** (PubS, Len: 6/7 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[add_js_file](https://github.com/TheB3Rt0z/schrimp/wiki/html-add_js_file "")($src)** (PubS, Len: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[add_js_script](https://github.com/TheB3Rt0z/schrimp/wiki/html-add_js_script "")($content)** (PubS, Len: 3 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[add_stylesheet](https://github.com/TheB3Rt0z/schrimp/wiki/html-add_stylesheet "")($href)** (PubS, Len: 3 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[array_to_list](https://github.com/TheB3Rt0z/schrimp/wiki/html-array_to_list "")($tree, $type = "ul")** (PubS, Len: 11/14 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[box](https://github.com/TheB3Rt0z/schrimp/wiki/html-box "")($content)** (PubS, Len: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[clearfix](https://github.com/TheB3Rt0z/schrimp/wiki/html-clearfix "")()** (PubS, Len: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[codeblock](https://github.com/TheB3Rt0z/schrimp/wiki/html-codeblock "")($content)** (PubS, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[divisor](https://github.com/TheB3Rt0z/schrimp/wiki/html-divisor "")($content, $classes = null, $id = null)** (PubS, Len: 3 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[get_content](https://github.com/TheB3Rt0z/schrimp/wiki/html-get_content "")()** (Pub, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[highbox](https://github.com/TheB3Rt0z/schrimp/wiki/html-highbox "")($content)** (PubS, Len: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[hyperlink](https://github.com/TheB3Rt0z/schrimp/wiki/html-hyperlink "")($href, $content = null)** (PubS, Len: 4 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[image](https://github.com/TheB3Rt0z/schrimp/wiki/html-image "")($src, $alt, $title = null)** (PubS, Len: 3 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[newline](https://github.com/TheB3Rt0z/schrimp/wiki/html-newline "")()** (PubS, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[preform](https://github.com/TheB3Rt0z/schrimp/wiki/html-preform "")($content)** (PubS, Len: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[spanner](https://github.com/TheB3Rt0z/schrimp/wiki/html-spanner "")($content, $classes = null)** (PubS, Len: 3 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[text](https://github.com/TheB3Rt0z/schrimp/wiki/html-text "")($content)** (PubS, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[title](https://github.com/TheB3Rt0z/schrimp/wiki/html-title "")($level, $content)** (PubS, Len: 7 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
  
**DEPENDENCIES:**  
  
Uses: **html**  
  
**TODOS:**  
  
- **test array result** &#10140; should be saved anywhere and loaded by executor..  
  
  
***  
  
[⇧](# "to the top") Class LANGUAGE (24.09.2013)  
---------------------------  
  
**CODE REFERENCE:**  
  
- **[get_browser_language](https://github.com/TheB3Rt0z/schrimp/wiki/language-get_browser_language "")()** (PubS, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[get_component_translations_array](https://github.com/TheB3Rt0z/schrimp/wiki/language-get_component_translations_array "")($component)** (PubS, Len: 17/20 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[interpret](https://github.com/TheB3Rt0z/schrimp/wiki/language-interpret "")($string, $from_lang, $to_lang)** (PubS, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[is_supported](https://github.com/TheB3Rt0z/schrimp/wiki/language-is_supported "")($language)** (PubS, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[translate](https://github.com/TheB3Rt0z/schrimp/wiki/language-translate "")($component, $marker)** (PubS, Len: 23/27 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 8 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
  
**TODOS:**  
  
- **automatic translation** &#10140; it could be interessant to use pspell&gettext  
- **implement euristic interpret** &#10140; integrate it in translate as fallback!  
  
  
***  
  
[⇧](# "to the top") Class MAIN (24.09.2013)  
-----------------------  
  
**CODE REFERENCE:**  
  
- **[__construct](https://github.com/TheB3Rt0z/schrimp/wiki/main-__construct "")($uri = false)** (CPub, Len: 18/23 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 4 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[_initialize](https://github.com/TheB3Rt0z/schrimp/wiki/main-_initialize "")($route)** (Pri, Len: 24/30 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 5 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[_load_libraries](https://github.com/TheB3Rt0z/schrimp/wiki/main-_load_libraries "")()** (Pri, Len: 4/5 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[_set_configuration](https://github.com/TheB3Rt0z/schrimp/wiki/main-_set_configuration "")($conf_name)** (Pri, Len: 20/27 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[_set_home_component](https://github.com/TheB3Rt0z/schrimp/wiki/main-_set_home_component "")()** (Pri, Len: 3/4 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[_set_htmls_from_controller](https://github.com/TheB3Rt0z/schrimp/wiki/main-_set_htmls_from_controller "")()** (Pri, Len: 7/8 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[_set_route_static_traits](https://github.com/TheB3Rt0z/schrimp/wiki/main-_set_route_static_traits "")($components)** (Pri, Len: 7 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[exists_file](https://github.com/TheB3Rt0z/schrimp/wiki/main-exists_file "")($path)** (PubS, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[get_buffer](https://github.com/TheB3Rt0z/schrimp/wiki/main-get_buffer "")($delete = true)** (PubS, Len: 4/6 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[get_call](https://github.com/TheB3Rt0z/schrimp/wiki/main-get_call "")()** (Pub, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[get_fullpath](https://github.com/TheB3Rt0z/schrimp/wiki/main-get_fullpath "")()** (Pub, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[get_head_links](https://github.com/TheB3Rt0z/schrimp/wiki/main-get_head_links "")()** (Pub, Len: 15/21 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 4 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[get_path](https://github.com/TheB3Rt0z/schrimp/wiki/main-get_path "")()** (Pub, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[get_version](https://github.com/TheB3Rt0z/schrimp/wiki/main-get_version "")($precision = 2)** (PubS, Len: 5 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[is_apced](https://github.com/TheB3Rt0z/schrimp/wiki/main-is_apced "")()** (PubS, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[is_memcached](https://github.com/TheB3Rt0z/schrimp/wiki/main-is_memcached "")()** (PubS, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[is_webstoraged](https://github.com/TheB3Rt0z/schrimp/wiki/main-is_webstoraged "")()** (PubS, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[launch_error](https://github.com/TheB3Rt0z/schrimp/wiki/main-launch_error "")($msg)** (PubS, Len: 7/10 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[launch_error_file_not_found](https://github.com/TheB3Rt0z/schrimp/wiki/main-launch_error_file_not_found "")($file)** (PubS, Len: 3 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[relocate_to](https://github.com/TheB3Rt0z/schrimp/wiki/main-relocate_to "")($url = null)** (PubS, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[resolve_uri](https://github.com/TheB3Rt0z/schrimp/wiki/main-resolve_uri "")($uri = null)** (PubS, Len: 4 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[set_buffer](https://github.com/TheB3Rt0z/schrimp/wiki/main-set_buffer "")($buffer)** (PubS, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[show_backtrace](https://github.com/TheB3Rt0z/schrimp/wiki/main-show_backtrace "")()** (PubS, Len: 5/6 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[var_dump](https://github.com/TheB3Rt0z/schrimp/wiki/main-var_dump "")($what)** (PubS, Len: 15/16 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 4 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
  
**DEPENDENCIES:**  
  
Uses: **code**, **html**, **md**, **toolbox**  
  
**TODOS:**  
  
- **documentation** &#10140; PHP highlight_string/file to rapresent code excerpts  
- **escort library** &#10140; session by PHP and DB if webstore & memcache fail?  
- **memcache support** &#10140; verify in method, if at least one mem-server works  
- **css selectors** &#10140; uniform to html-class render-methods (default style)  
- **css autoload** &#10140; automatically load ANY file in .inc/inc / css? nnouu..  
- **error launchers** &#10140; should be moved to a library (navigator, toolbox)?  
  
  
***  
  
[⇧](# "to the top") Class MD (24.09.2013)  
---------------------  
  
**CODE REFERENCE:**  
  
- **[__construct](https://github.com/TheB3Rt0z/schrimp/wiki/md-__construct "")($tag, $content = null, $attributes = null)** (CPub, Len: 9/11 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[_h1](https://github.com/TheB3Rt0z/schrimp/wiki/md-_h1 "")($content)** (PriS, Len: 3/4 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[_h2](https://github.com/TheB3Rt0z/schrimp/wiki/md-_h2 "")($content)** (PriS, Len: 3/4 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[_h3](https://github.com/TheB3Rt0z/schrimp/wiki/md-_h3 "")($content)** (PriS, Len: 3/4 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[_img](https://github.com/TheB3Rt0z/schrimp/wiki/md-_img "")($src, $alt, $title = null)** (PriS, Len: 14/17 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[_link](https://github.com/TheB3Rt0z/schrimp/wiki/md-_link "")($label, $href, $title)** (PriS, Len: 10/12 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[_set_content](https://github.com/TheB3Rt0z/schrimp/wiki/md-_set_content "")($content = null)** (Pri, Len: 4/5 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[_set_formatting](https://github.com/TheB3Rt0z/schrimp/wiki/md-_set_formatting "")($attributes)** (Pri, Len: 5/7 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[_validate_tag](https://github.com/TheB3Rt0z/schrimp/wiki/md-_validate_tag "")()** (Pri, Len: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[blue_boh](https://github.com/TheB3Rt0z/schrimp/wiki/md-blue_boh "")($title)** (PubS, Len: 3 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[code](https://github.com/TheB3Rt0z/schrimp/wiki/md-code "")($content)** (PubS, Len: 3/4 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[green_ok](https://github.com/TheB3Rt0z/schrimp/wiki/md-green_ok "")()** (PubS, Len: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[hr](https://github.com/TheB3Rt0z/schrimp/wiki/md-hr "")()** (PubS, Len: 2/3 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[hyperlink](https://github.com/TheB3Rt0z/schrimp/wiki/md-hyperlink "")($label, $href, $title = null)** (PubS, Len: 3 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[image](https://github.com/TheB3Rt0z/schrimp/wiki/md-image "")($src, $alt = null, $title = null)** (PubS, Len: 3 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[red_ics](https://github.com/TheB3Rt0z/schrimp/wiki/md-red_ics "")($title)** (PubS, Len: 3 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[text](https://github.com/TheB3Rt0z/schrimp/wiki/md-text "")($content)** (PubS, Len: 3/4 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[title](https://github.com/TheB3Rt0z/schrimp/wiki/md-title "")($level, $content)** (PubS, Len: 7 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[to_the_top](https://github.com/TheB3Rt0z/schrimp/wiki/md-to_the_top "")()** (PubS, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[yellow_ops](https://github.com/TheB3Rt0z/schrimp/wiki/md-yellow_ops "")($title)** (PubS, Len: 3 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
  
**DEPENDENCIES:**  
  
Uses: **escort**  
  
  
***  
  
[⇧](# "to the top") Class NAVIGATOR (24.09.2013)  
----------------------------  
  
**CODE REFERENCE:**  
  
- **[__construct](https://github.com/TheB3Rt0z/schrimp/wiki/navigator-__construct "")()** (CPub, Len: 19/22 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[_add_branch](https://github.com/TheB3Rt0z/schrimp/wiki/navigator-_add_branch "")($ctrl_name)** (Pri, Len: 25/30 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 3 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[_add_handler_static_options](https://github.com/TheB3Rt0z/schrimp/wiki/navigator-_add_handler_static_options "")($static_variables, $sub, $ctrl_name, $link, $object)** (Pri, Len: 20/24 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 4 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[_add_handlers](https://github.com/TheB3Rt0z/schrimp/wiki/navigator-_add_handlers "")($ctrl_name, $object, $sub)** (Pri, Len: 22/26 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[_get_action_select](https://github.com/TheB3Rt0z/schrimp/wiki/navigator-_get_action_select "")($structure, $ctrl_name, $link)** (Pri, Len: 10/13 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[_get_args_select](https://github.com/TheB3Rt0z/schrimp/wiki/navigator-_get_args_select "")($structure, $ctrl_name, $link)** (Pri, Len: 20/26 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 3 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[_initialize_options](https://github.com/TheB3Rt0z/schrimp/wiki/navigator-_initialize_options "")($data)** (Pri, Len: 7/9 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[_initialize_structure](https://github.com/TheB3Rt0z/schrimp/wiki/navigator-_initialize_structure "")()** (Pri, Len: 8 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[_print_active_breadcrumb](https://github.com/TheB3Rt0z/schrimp/wiki/navigator-_print_active_breadcrumb "")($ctrl_name)** (Pri, Len: 25/30 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 3 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[_print_additional_parameters](https://github.com/TheB3Rt0z/schrimp/wiki/navigator-_print_additional_parameters "")($branch, $link, $ctrl_name)** (Pri, Len: 10/12 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[_print_breadcrumb](https://github.com/TheB3Rt0z/schrimp/wiki/navigator-_print_breadcrumb "")($ctrl_name)** (Pri, Len: 19/23 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[_print_handler_name](https://github.com/TheB3Rt0z/schrimp/wiki/navigator-_print_handler_name "")($branch, $link, $ctrl_name)** (Pri, Len: 6/8 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[_print_handler_parameter](https://github.com/TheB3Rt0z/schrimp/wiki/navigator-_print_handler_parameter "")($branch, $link, $ctrl_name)** (Pri, Len: 12/14 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[get_advanced_list](https://github.com/TheB3Rt0z/schrimp/wiki/navigator-get_advanced_list "")()** (PubS, Len: 5/7 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[get_list](https://github.com/TheB3Rt0z/schrimp/wiki/navigator-get_list "")()** (PubS, Len: 4/6 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[get_sitemap](https://github.com/TheB3Rt0z/schrimp/wiki/navigator-get_sitemap "")()** (PubS, Len: 3/5 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[render_active_breadcrumb](https://github.com/TheB3Rt0z/schrimp/wiki/navigator-render_active_breadcrumb "")()** (PubS, Len: 8/10 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[render_breadcrumb](https://github.com/TheB3Rt0z/schrimp/wiki/navigator-render_breadcrumb "")()** (PubS, Len: 8/10 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
  
**DEPENDENCIES:**  
  
Uses: **html**, **html_form**, **main**  
  
**TODOS:**  
  
- **render_list** &#10140; this should be CSS3 and appear on a mouse gesture..  
  
  
***  
  
[⇧](# "to the top") Class POWERING (24.09.2013)  
---------------------------  
  
**TODOS:**  
  
- **test added library** &#10140; to be filled with handlers, or something similar  
  
  
***  
  
[⇧](# "to the top") Class TOOLBOX (24.09.2013)  
--------------------------  
  
**CODE REFERENCE:**  
  
- **[format](https://github.com/TheB3Rt0z/schrimp/wiki/toolbox-format "")($mixed)** (PubS, Len: 19 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 4 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[fulltest](https://github.com/TheB3Rt0z/schrimp/wiki/toolbox-fulltest "")()** (PubS, Len: 20/23 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 3 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[highlight](https://github.com/TheB3Rt0z/schrimp/wiki/toolbox-highlight "")($string, $type = null)** (PubS, Len: 5 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[parse](https://github.com/TheB3Rt0z/schrimp/wiki/toolbox-parse "")($source)** (PubS, Len: 7/8 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
  
**DEPENDENCIES:**  
  
Uses: **code**  
  
**TODOS:**  
  
- **unit testing** &#10140; ..and what about a little code coverage measuring?  
- **error message** &#10140; difference should be evidenced and a message showed  
- **fulltest procedure** &#10140; add more tests and implement more testtypes..  
- **virus total** &#10140; https://www.virustotal.com/it/documentation/public-api/  
- **wide-range tests** &#10140; include controller-derived + helpers etc. classes?  
  
  
***  
  
  
Available components:  
=====================  
  
  
[⇧](# "to the top") Class ADMIN (24.09.2013)  
------------------------  
  
**CLASS CONFIGURATION CONSTANTS:**  
  
- **VISIBLE_IN_NAVIGATION** &#10140; true  
- **RENDER_BREADCRUMB** &#10140; true  
  
**CODE REFERENCE:**  
  
- **[_handler](https://github.com/TheB3Rt0z/schrimp/wiki/admin-_handler "")()** (Pro, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[initialize](https://github.com/TheB3Rt0z/schrimp/wiki/admin-initialize "")()** (Pub, Len: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
  
**INHERITED METHODS:**  
  
- **[__construct](https://github.com/TheB3Rt0z/schrimp/wiki/controller-__construct "")($action, $args)** (CPub, Len: 7/10 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[_set_article](https://github.com/TheB3Rt0z/schrimp/wiki/controller-_set_article "")($html)** (Pro, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[_set_aside](https://github.com/TheB3Rt0z/schrimp/wiki/controller-_set_aside "")($html)** (Pro, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[_set_footer](https://github.com/TheB3Rt0z/schrimp/wiki/controller-_set_footer "")($html)** (Pro, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[_set_header](https://github.com/TheB3Rt0z/schrimp/wiki/controller-_set_header "")($html)** (Pro, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[_set_nav](https://github.com/TheB3Rt0z/schrimp/wiki/controller-_set_nav "")($html)** (Pro, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[_set_section](https://github.com/TheB3Rt0z/schrimp/wiki/controller-_set_section "")($html)** (Pro, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[_set_title](https://github.com/TheB3Rt0z/schrimp/wiki/controller-_set_title "")($html)** (Pro, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[_translate](https://github.com/TheB3Rt0z/schrimp/wiki/controller-_translate "")($placeholder)** (Pro, Len: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[get_article](https://github.com/TheB3Rt0z/schrimp/wiki/controller-get_article "")()** (Pub, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[get_aside](https://github.com/TheB3Rt0z/schrimp/wiki/controller-get_aside "")()** (Pub, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[get_footer](https://github.com/TheB3Rt0z/schrimp/wiki/controller-get_footer "")()** (Pub, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[get_header](https://github.com/TheB3Rt0z/schrimp/wiki/controller-get_header "")()** (Pub, Len: 7/8 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[get_nav](https://github.com/TheB3Rt0z/schrimp/wiki/controller-get_nav "")()** (Pub, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[get_section](https://github.com/TheB3Rt0z/schrimp/wiki/controller-get_section "")()** (Pub, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[get_title](https://github.com/TheB3Rt0z/schrimp/wiki/controller-get_title "")()** (Pub, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
  
**DEPENDENCIES:**  
  
Uses: **controller**, **html**, **navigator**  
  
[⇧](# "to the top") Class ADMIN_HELPER (24.09.2013)  
-------------------------------  
  
  
***  
  
[⇧](# "to the top") Class CONTROL (24.09.2013)  
--------------------------  
  
**CLASS CONFIGURATION CONSTANTS:**  
  
- **VISIBLE_IN_NAVIGATION** &#10140; true  
- **RENDER_BREADCRUMB** &#10140; true  
  
**CODE REFERENCE:**  
  
- **[_handler](https://github.com/TheB3Rt0z/schrimp/wiki/control-_handler "")()** (Pro, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[_handler_application](https://github.com/TheB3Rt0z/schrimp/wiki/control-_handler_application "")()** (Pri, Len: 26/30 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[_handler_core](https://github.com/TheB3Rt0z/schrimp/wiki/control-_handler_core "")()** (Pri, Len: 3 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[_handler_core_code](https://github.com/TheB3Rt0z/schrimp/wiki/control-_handler_core_code "")()** (Pri, Len: 3 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[_handler_core_controller](https://github.com/TheB3Rt0z/schrimp/wiki/control-_handler_core_controller "")()** (Pri, Len: 3 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[_handler_core_db](https://github.com/TheB3Rt0z/schrimp/wiki/control-_handler_core_db "")()** (Pri, Len: 3 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[_handler_core_escort](https://github.com/TheB3Rt0z/schrimp/wiki/control-_handler_core_escort "")()** (Pri, Len: 3 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[_handler_core_html](https://github.com/TheB3Rt0z/schrimp/wiki/control-_handler_core_html "")()** (Pri, Len: 3 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[_handler_core_language](https://github.com/TheB3Rt0z/schrimp/wiki/control-_handler_core_language "")()** (Pri, Len: 9/10 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[_handler_core_md](https://github.com/TheB3Rt0z/schrimp/wiki/control-_handler_core_md "")()** (Pri, Len: 3 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[_handler_core_navigator](https://github.com/TheB3Rt0z/schrimp/wiki/control-_handler_core_navigator "")()** (Pri, Len: 3 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[_handler_core_toolbox](https://github.com/TheB3Rt0z/schrimp/wiki/control-_handler_core_toolbox "")()** (Pri, Len: 3 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[_handler_modules](https://github.com/TheB3Rt0z/schrimp/wiki/control-_handler_modules "")()** (Pri, Len: 3 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[_handler_modules_admin](https://github.com/TheB3Rt0z/schrimp/wiki/control-_handler_modules_admin "")()** (Pri, Len: 3 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[_handler_modules_control](https://github.com/TheB3Rt0z/schrimp/wiki/control-_handler_modules_control "")()** (Pri, Len: 3 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[_handler_modules_documentation](https://github.com/TheB3Rt0z/schrimp/wiki/control-_handler_modules_documentation "")()** (Pri, Len: 3 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[_handler_modules_error](https://github.com/TheB3Rt0z/schrimp/wiki/control-_handler_modules_error "")()** (Pri, Len: 3 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[_handler_phpinfo](https://github.com/TheB3Rt0z/schrimp/wiki/control-_handler_phpinfo "")()** (Pri, Len: 20/23 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 5 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[_handler_plugins](https://github.com/TheB3Rt0z/schrimp/wiki/control-_handler_plugins "")()** (Pri, Len: 20/24 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[initialize](https://github.com/TheB3Rt0z/schrimp/wiki/control-initialize "")()** (Pub, Len: 15/18 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
  
**INHERITED METHODS:**  
  
- **[__construct](https://github.com/TheB3Rt0z/schrimp/wiki/controller-__construct "")($action, $args)** (CPub, Len: 7/10 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[_set_article](https://github.com/TheB3Rt0z/schrimp/wiki/controller-_set_article "")($html)** (Pro, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[_set_aside](https://github.com/TheB3Rt0z/schrimp/wiki/controller-_set_aside "")($html)** (Pro, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[_set_footer](https://github.com/TheB3Rt0z/schrimp/wiki/controller-_set_footer "")($html)** (Pro, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[_set_header](https://github.com/TheB3Rt0z/schrimp/wiki/controller-_set_header "")($html)** (Pro, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[_set_nav](https://github.com/TheB3Rt0z/schrimp/wiki/controller-_set_nav "")($html)** (Pro, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[_set_section](https://github.com/TheB3Rt0z/schrimp/wiki/controller-_set_section "")($html)** (Pro, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[_set_title](https://github.com/TheB3Rt0z/schrimp/wiki/controller-_set_title "")($html)** (Pro, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[_translate](https://github.com/TheB3Rt0z/schrimp/wiki/controller-_translate "")($placeholder)** (Pro, Len: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[get_article](https://github.com/TheB3Rt0z/schrimp/wiki/controller-get_article "")()** (Pub, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[get_aside](https://github.com/TheB3Rt0z/schrimp/wiki/controller-get_aside "")()** (Pub, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[get_footer](https://github.com/TheB3Rt0z/schrimp/wiki/controller-get_footer "")()** (Pub, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[get_header](https://github.com/TheB3Rt0z/schrimp/wiki/controller-get_header "")()** (Pub, Len: 7/8 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[get_nav](https://github.com/TheB3Rt0z/schrimp/wiki/controller-get_nav "")()** (Pub, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[get_section](https://github.com/TheB3Rt0z/schrimp/wiki/controller-get_section "")()** (Pub, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[get_title](https://github.com/TheB3Rt0z/schrimp/wiki/controller-get_title "")()** (Pub, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
  
**DEPENDENCIES:**  
  
Uses: **controller**, **html**, **language**, **main**, **navigator**  
  
**TODOS:**  
  
- **plugins libraries** &#10140; find a way to incapsulate needed translations  
- **handler_core_language** &#10140; this should be te next to be written..  
  
[⇧](# "to the top") Class CONTROL_HELPER (24.09.2013)  
---------------------------------  
  
**CODE REFERENCE:**  
  
- **[get_configuration_phpinfos](https://github.com/TheB3Rt0z/schrimp/wiki/control_helper-get_configuration_phpinfos "")($output = null)** (Pub, Len: 20/22 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 3 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[get_environment_phpinfos](https://github.com/TheB3Rt0z/schrimp/wiki/control_helper-get_environment_phpinfos "")($output = null)** (Pub, Len: 9/12 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[get_general_phpinfos](https://github.com/TheB3Rt0z/schrimp/wiki/control_helper-get_general_phpinfos "")($output = null)** (Pub, Len: 5/7 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[get_phpinfos](https://github.com/TheB3Rt0z/schrimp/wiki/control_helper-get_phpinfos "")($arg)** (Pub, Len: 11/14 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 3 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
  
**DEPENDENCIES:**  
  
Uses: **html**  
  
  
***  
  
[⇧](# "to the top") Class DOCUMENTATION (24.09.2013)  
--------------------------------  
  
**CLASS CONFIGURATION CONSTANTS:**  
  
- **VISIBLE_IN_NAVIGATION** &#10140; true  
- **RENDER_BREADCRUMB** &#10140; true  
  
**CODE REFERENCE:**  
  
- **[_handler](https://github.com/TheB3Rt0z/schrimp/wiki/documentation-_handler "")()** (Pro, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[_handler_list](https://github.com/TheB3Rt0z/schrimp/wiki/documentation-_handler_list "")()** (Pri, Len: 3 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[_handler_list_files](https://github.com/TheB3Rt0z/schrimp/wiki/documentation-_handler_list_files "")()** (Pri, Len: 3 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[initialize](https://github.com/TheB3Rt0z/schrimp/wiki/documentation-initialize "")()** (Pub, Len: 15/18 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
  
**INHERITED METHODS:**  
  
- **[__construct](https://github.com/TheB3Rt0z/schrimp/wiki/controller-__construct "")($action, $args)** (CPub, Len: 7/10 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[_set_article](https://github.com/TheB3Rt0z/schrimp/wiki/controller-_set_article "")($html)** (Pro, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[_set_aside](https://github.com/TheB3Rt0z/schrimp/wiki/controller-_set_aside "")($html)** (Pro, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[_set_footer](https://github.com/TheB3Rt0z/schrimp/wiki/controller-_set_footer "")($html)** (Pro, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[_set_header](https://github.com/TheB3Rt0z/schrimp/wiki/controller-_set_header "")($html)** (Pro, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[_set_nav](https://github.com/TheB3Rt0z/schrimp/wiki/controller-_set_nav "")($html)** (Pro, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[_set_section](https://github.com/TheB3Rt0z/schrimp/wiki/controller-_set_section "")($html)** (Pro, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[_set_title](https://github.com/TheB3Rt0z/schrimp/wiki/controller-_set_title "")($html)** (Pro, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[_translate](https://github.com/TheB3Rt0z/schrimp/wiki/controller-_translate "")($placeholder)** (Pro, Len: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[get_article](https://github.com/TheB3Rt0z/schrimp/wiki/controller-get_article "")()** (Pub, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[get_aside](https://github.com/TheB3Rt0z/schrimp/wiki/controller-get_aside "")()** (Pub, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[get_footer](https://github.com/TheB3Rt0z/schrimp/wiki/controller-get_footer "")()** (Pub, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[get_header](https://github.com/TheB3Rt0z/schrimp/wiki/controller-get_header "")()** (Pub, Len: 7/8 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[get_nav](https://github.com/TheB3Rt0z/schrimp/wiki/controller-get_nav "")()** (Pub, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[get_section](https://github.com/TheB3Rt0z/schrimp/wiki/controller-get_section "")()** (Pub, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[get_title](https://github.com/TheB3Rt0z/schrimp/wiki/controller-get_title "")()** (Pub, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
  
**DEPENDENCIES:**  
  
Uses: **controller**, **html**, **main**, **navigator**  
  
[⇧](# "to the top") Class DOCUMENTATION_HELPER (24.09.2013)  
---------------------------------------  
  
**CODE REFERENCE:**  
  
- **[get_method_code](https://github.com/TheB3Rt0z/schrimp/wiki/documentation_helper-get_method_code "")(ReflectionMethod $method)** (Pub, Len: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
  
**DEPENDENCIES:**  
  
Uses: **code**, **html**  
  
  
***  
  
[⇧](# "to the top") Class ERROR (24.09.2013)  
------------------------  
  
**CLASS CONFIGURATION CONSTANTS:**  
  
- **VISIBLE_IN_NAVIGATION** &#10140; false  
- **RENDER_BREADCRUMB** &#10140; false  
  
**CODE REFERENCE:**  
  
- **[_handler](https://github.com/TheB3Rt0z/schrimp/wiki/error-_handler "")()** (Pro, Len: 7/10 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[_handler_400](https://github.com/TheB3Rt0z/schrimp/wiki/error-_handler_400 "")()** (Pri, Len: 6/8 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[_handler_401](https://github.com/TheB3Rt0z/schrimp/wiki/error-_handler_401 "")()** (Pri, Len: 6/8 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[_handler_403](https://github.com/TheB3Rt0z/schrimp/wiki/error-_handler_403 "")()** (Pri, Len: 6/8 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[_handler_404](https://github.com/TheB3Rt0z/schrimp/wiki/error-_handler_404 "")()** (Pri, Len: 7/10 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[_handler_500](https://github.com/TheB3Rt0z/schrimp/wiki/error-_handler_500 "")()** (Pri, Len: 13/17 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[initialize](https://github.com/TheB3Rt0z/schrimp/wiki/error-initialize "")()** (Pub, Len: 11/12 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
  
**INHERITED METHODS:**  
  
- **[__construct](https://github.com/TheB3Rt0z/schrimp/wiki/controller-__construct "")($action, $args)** (CPub, Len: 7/10 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[_set_article](https://github.com/TheB3Rt0z/schrimp/wiki/controller-_set_article "")($html)** (Pro, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[_set_aside](https://github.com/TheB3Rt0z/schrimp/wiki/controller-_set_aside "")($html)** (Pro, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[_set_footer](https://github.com/TheB3Rt0z/schrimp/wiki/controller-_set_footer "")($html)** (Pro, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[_set_header](https://github.com/TheB3Rt0z/schrimp/wiki/controller-_set_header "")($html)** (Pro, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[_set_nav](https://github.com/TheB3Rt0z/schrimp/wiki/controller-_set_nav "")($html)** (Pro, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[_set_section](https://github.com/TheB3Rt0z/schrimp/wiki/controller-_set_section "")($html)** (Pro, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[_set_title](https://github.com/TheB3Rt0z/schrimp/wiki/controller-_set_title "")($html)** (Pro, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[_translate](https://github.com/TheB3Rt0z/schrimp/wiki/controller-_translate "")($placeholder)** (Pro, Len: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[get_article](https://github.com/TheB3Rt0z/schrimp/wiki/controller-get_article "")()** (Pub, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[get_aside](https://github.com/TheB3Rt0z/schrimp/wiki/controller-get_aside "")()** (Pub, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[get_footer](https://github.com/TheB3Rt0z/schrimp/wiki/controller-get_footer "")()** (Pub, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[get_header](https://github.com/TheB3Rt0z/schrimp/wiki/controller-get_header "")()** (Pub, Len: 7/8 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[get_nav](https://github.com/TheB3Rt0z/schrimp/wiki/controller-get_nav "")()** (Pub, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[get_section](https://github.com/TheB3Rt0z/schrimp/wiki/controller-get_section "")()** (Pub, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[get_title](https://github.com/TheB3Rt0z/schrimp/wiki/controller-get_title "")()** (Pub, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
  
**DEPENDENCIES:**  
  
Uses: **controller**, **html**, **main**, **navigator**  
  
[⇧](# "to the top") Class ERROR_HELPER (24.09.2013)  
-------------------------------  
  
  
***  
  
[⇧](# "to the top") Class HOMEPAGE (24.09.2013)  
---------------------------  
  
**CLASS CONFIGURATION CONSTANTS:**  
  
- **VISIBLE_IN_NAVIGATION** &#10140; true  
- **RENDER_BREADCRUMB** &#10140; true  
  
**CODE REFERENCE:**  
  
- **[_handler](https://github.com/TheB3Rt0z/schrimp/wiki/homepage-_handler "")()** (Pro, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[initialize](https://github.com/TheB3Rt0z/schrimp/wiki/homepage-initialize "")()** (Pub, Len: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
  
**INHERITED METHODS:**  
  
- **[__construct](https://github.com/TheB3Rt0z/schrimp/wiki/controller-__construct "")($action, $args)** (CPub, Len: 7/10 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[_set_article](https://github.com/TheB3Rt0z/schrimp/wiki/controller-_set_article "")($html)** (Pro, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[_set_aside](https://github.com/TheB3Rt0z/schrimp/wiki/controller-_set_aside "")($html)** (Pro, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[_set_footer](https://github.com/TheB3Rt0z/schrimp/wiki/controller-_set_footer "")($html)** (Pro, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[_set_header](https://github.com/TheB3Rt0z/schrimp/wiki/controller-_set_header "")($html)** (Pro, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[_set_nav](https://github.com/TheB3Rt0z/schrimp/wiki/controller-_set_nav "")($html)** (Pro, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[_set_section](https://github.com/TheB3Rt0z/schrimp/wiki/controller-_set_section "")($html)** (Pro, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[_set_title](https://github.com/TheB3Rt0z/schrimp/wiki/controller-_set_title "")($html)** (Pro, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[_translate](https://github.com/TheB3Rt0z/schrimp/wiki/controller-_translate "")($placeholder)** (Pro, Len: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[get_article](https://github.com/TheB3Rt0z/schrimp/wiki/controller-get_article "")()** (Pub, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[get_aside](https://github.com/TheB3Rt0z/schrimp/wiki/controller-get_aside "")()** (Pub, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[get_footer](https://github.com/TheB3Rt0z/schrimp/wiki/controller-get_footer "")()** (Pub, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[get_header](https://github.com/TheB3Rt0z/schrimp/wiki/controller-get_header "")()** (Pub, Len: 7/8 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[get_nav](https://github.com/TheB3Rt0z/schrimp/wiki/controller-get_nav "")()** (Pub, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[get_section](https://github.com/TheB3Rt0z/schrimp/wiki/controller-get_section "")()** (Pub, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[get_title](https://github.com/TheB3Rt0z/schrimp/wiki/controller-get_title "")()** (Pub, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
  
**DEPENDENCIES:**  
  
Uses: **controller**, **html**, **navigator**  
  
[⇧](# "to the top") Class HOMEPAGE_HELPER (24.09.2013)  
----------------------------------  
  
  
***  
  
[⇧](# "to the top") Class POWER (24.09.2013)  
------------------------  
  
**CLASS CONFIGURATION CONSTANTS:**  
  
- **VISIBLE_IN_NAVIGATION** &#10140; true  
- **RENDER_BREADCRUMB** &#10140; true  
  
**CODE REFERENCE:**  
  
- **[initialize](https://github.com/TheB3Rt0z/schrimp/wiki/power-initialize "")()** (Pub, Len: 0/1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
  
**INHERITED METHODS:**  
  
- **[__construct](https://github.com/TheB3Rt0z/schrimp/wiki/controller-__construct "")($action, $args)** (CPub, Len: 7/10 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[_set_article](https://github.com/TheB3Rt0z/schrimp/wiki/controller-_set_article "")($html)** (Pro, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[_set_aside](https://github.com/TheB3Rt0z/schrimp/wiki/controller-_set_aside "")($html)** (Pro, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[_set_footer](https://github.com/TheB3Rt0z/schrimp/wiki/controller-_set_footer "")($html)** (Pro, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[_set_header](https://github.com/TheB3Rt0z/schrimp/wiki/controller-_set_header "")($html)** (Pro, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[_set_nav](https://github.com/TheB3Rt0z/schrimp/wiki/controller-_set_nav "")($html)** (Pro, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[_set_section](https://github.com/TheB3Rt0z/schrimp/wiki/controller-_set_section "")($html)** (Pro, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[_set_title](https://github.com/TheB3Rt0z/schrimp/wiki/controller-_set_title "")($html)** (Pro, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[_translate](https://github.com/TheB3Rt0z/schrimp/wiki/controller-_translate "")($placeholder)** (Pro, Len: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[get_article](https://github.com/TheB3Rt0z/schrimp/wiki/controller-get_article "")()** (Pub, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[get_aside](https://github.com/TheB3Rt0z/schrimp/wiki/controller-get_aside "")()** (Pub, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[get_footer](https://github.com/TheB3Rt0z/schrimp/wiki/controller-get_footer "")()** (Pub, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[get_header](https://github.com/TheB3Rt0z/schrimp/wiki/controller-get_header "")()** (Pub, Len: 7/8 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 2 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[get_nav](https://github.com/TheB3Rt0z/schrimp/wiki/controller-get_nav "")()** (Pub, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[get_section](https://github.com/TheB3Rt0z/schrimp/wiki/controller-get_section "")()** (Pub, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
- **[get_title](https://github.com/TheB3Rt0z/schrimp/wiki/controller-get_title "")()** (Pub, Len: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
  
**DEPENDENCIES:**  
  
Uses: **controller**  
  
**TODOS:**  
  
- **anamnesys module** &#10140; registration, evolution, calculations, analysis..  
- **store personal information** &#10140; uses helper+db libraries as bridge tools  
  
[⇧](# "to the top") Class POWER_HELPER (24.09.2013)  
-------------------------------  
  
  
***  
  
  
  
  
  
  
Copyright © 2011-2013 | Das S.C.H.R.I.M.P. Project  
