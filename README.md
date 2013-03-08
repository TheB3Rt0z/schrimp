![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/schrimp_favicon_md.ico "") Das S.C.H.R.I.M.P.'s Documentation 0.5.2013.03.08  
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
- **MD_NEWLINE_SEQUENCE** &#10140; "  \n"
- **SET_COMPLEXITY_INDEX** &#10140; 12
- **SET_DOCUMENTATION_MD** &#10140; "README"
- **SET_GITHUB_RAWPATH** &#10140; "https://raw.github.com/TheB3Rt0z/schrimp/master/"
- **SET_TRANSLATIONS_EXTENSION** &#10140; ".txt"
  
**FUNCTION ALIASES**  
  
- **fe($path)** &#10140; .main.php on line 263,
  returns boolean if realpath path exists on running server;
  @param string $path
  @return boolean true if realpath exists, false otherwise

- **fv($mixed)** &#10140; .lib/toolbox.php on line 30,
  returns a beautiful formatted value, mixed variable-type-dependant;
  @param mixed $mixed
  @return mixed depending on internally defined rules

- **le($msg)** &#10140; .main.php on line 293,
  launches a customizable error 500, mit optional backtrace for debug;
  @param string $msg
  @return boolean false after relocate

- **rt($url = '')** &#10140; .main.php on line 283,
  relocates to given relative url or to base path on default;
  @param string $url
  @return void

- **ru($uri = '')** &#10140; .main.php on line 273,
  returns an absolute uri, based on current server configuration;
  @param string $uri
  @return string absolute http unified resource identifier

- **sb()** &#10140; .main.php on line 302,
  show call's backtrace with help of error base handler
  @return void

- **tr($component, $marker)** &#10140; .lib/language.php on line 108,
  executes language translation of marker identifier, referring to given component;
  @param string $component
  @param string $marker
  @return mixed callback function returned value(s)

- **vd($what)** &#10140; .main.php on line 253,
  returns pre-formatted mixed variables;
  @param mixed $what
  @return void

  
**TODOS**  
  
- **? admin bar** &#10140; optional control to measure run time performance (gApis)
  
  
***  
  
Class CODE (Fri, 08 Mar 2013 11:10:01 +0000)  
--------------------------------------------  
  
**CODE REFERENCE:**  
  
- **_get_constants_information** (PriS, Len: 8 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: 2 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **_get_functions_information** (PriS, Len: 29 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: 2 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **_get_todos_information** (PriS, Len: 6 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: 1 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **_get_classes_information** (PriS ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_blueboh.png "") Len: 104 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_redics.png "") CyC: 9 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **_get_components_information** (PriS, Len: 6 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: 1 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **get_constants_list** (PubS, Len: 5 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **get_functions_list** (PubS, Len: 5 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **get_components_list** (PubS, Len: 30 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: 4 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **get_documentation** (PubS, Len: 17 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))

**TODOS**  
  
- **code analysis** &#10140; load, analyse, printing and more.. with toolbox class?

  
***  
  
Class CONTROLLER (Fri, 15 Feb 2013 16:53:58 +0000)  
--------------------------------------------------  
  
**CODE REFERENCE:**  
  
- **__construct** (CPub, Len: 5 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **initialize** (ProA, Len: - )
- **_set_title** (Pro, Len: 1 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **_set_header** (Pro, Len: 1 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **_set_nav** (Pro, Len: 1 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **_set_section** (Pro, Len: 1 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **_set_article** (Pro, Len: 1 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **_set_aside** (Pro, Len: 1 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **_set_footer** (Pro, Len: 1 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **_translate** (Pro, Len: 2 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **get_title** (Pub, Len: 1 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **get_header** (Pub, Len: 1 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **get_nav** (Pub, Len: 1 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **get_section** (Pub, Len: 1 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **get_article** (Pub, Len: 1 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **get_aside** (Pub, Len: 1 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **get_footer** (Pub, Len: 1 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))

  
***  
  
Class DB (Fri, 08 Mar 2013 11:14:16 +0000)  
------------------------------------------  
  
**CODE REFERENCE:**  
  
- **__construct** (CPub, Len: 16 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: 1 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))

**TODOS**  
  
- **configurations constants** &#10140; maybe they should be in main configuration

  
***  
  
Class ESCORT (Fri, 23 Nov 2012 17:54:52 +0000)  
----------------------------------------------  
  
  
***  
  
Class HTML (Fri, 08 Mar 2013 11:14:55 +0000)  
--------------------------------------------  
  
**CODE REFERENCE:**  
  
- **__construct** (CPub, Len: 21 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: 4 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **_is_single** (Pri, Len: 2 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **_is_container** (Pri, Len: 2 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **_validate_tag** (Pri, Len: 1 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: 1 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **_set_attributes** (Pri, Len: 20 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: 2 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **_set_content** (Pri, Len: 5 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **a** (PriS, Len: 10 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: 1 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **br** (PriS, Len: 3 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **div** (PriS, Len: 11 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: 2 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **h1** (PriS, Len: 5 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **h2** (PriS, Len: 5 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **h3** (PriS, Len: 5 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **h4** (PriS, Len: 5 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **h5** (PriS, Len: 5 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **h6** (PriS, Len: 5 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **h7** (PriS, Len: 5 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **img** (PriS, Len: 13 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: 1 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **li** (PriS, Len: 9 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: 1 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **link** (PriS, Len: 22 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: 3 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **ol** (PriS, Len: 9 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: 1 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **p** (PriS, Len: 5 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **pre** (PriS, Len: 5 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **script** (PriS, Len: 30 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: 6 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **ul** (PriS, Len: 9 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: 1 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **add_favicon** (PubS, Len: 7 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **add_stylesheet** (PubS, Len: 3 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **add_js_file** (PubS, Len: 2 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **add_js_script** (PubS, Len: 3 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **array_to_list** (PubS, Len: 12 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: 2 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **box** (PubS, Len: 2 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **divisor** (PubS, Len: 3 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **highbox** (PubS, Len: 2 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **hyperlink** (PubS, Len: 2 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **image** (PubS, Len: 3 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **newline** (PubS, Len: 1 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **text** (PubS, Len: 1 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **preform** (PubS, Len: 1 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **title** (PubS, Len: 7 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: 3 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))

**TODOS**  
  
- **script online loading** &#10140; if != local, should have a lfb..

  
***  
  
Class LANGUAGE (Mon, 04 Mar 2013 10:41:00 +0000)  
------------------------------------------------  
  
**CODE REFERENCE:**  
  
- **get_browser_language** (PubS, Len: 1 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **is_supported** (PubS, Len: 1 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **get_component_translations_array** (PubS, Len: 20 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: 2 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **translate** (PubS, Len: 27 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: 10 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))

**TODOS**  
  
- **automatic translation** &#10140; it could be interessant to use pspell&gettext

  
***  
  
Class MAIN (Fri, 08 Mar 2013 09:50:14 +0000)  
--------------------------------------------  
  
**CODE REFERENCE:**  
  
- **__construct** (CPub, Len: 10 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: 1 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **_set_configuration** (Pri, Len: 27 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: 1 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **_load_libraries** (Pri, Len: 5 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: 2 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **_set_route_static_traits** (Pri, Len: 7 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: 2 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **_set_home_component** (Pri, Len: 4 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: 1 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **_set_htmls_from_controller** (Pri, Len: 8 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **_initialize** (Pri, Len: 30 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: 5 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **get_call** (Pub, Len: 1 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **get_path** (Pub, Len: 1 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **get_fullpath** (Pub, Len: 1 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **var_dump** (PubS, Len: 1 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **get_version** (PubS, Len: 5 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **is_webstoraged** (PubS, Len: 1 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **is_memcached** (PubS, Len: 1 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **exists_file** (PubS, Len: 1 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **resolve_uri** (PubS, Len: 4 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **relocate_to** (PubS, Len: 1 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **launch_error** (PubS, Len: 10 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: 1 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **set_buffer** (PubS, Len: 1 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **get_buffer** (PubS, Len: 6 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: 1 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **show_backtrace** (PubS, Len: 6 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: 1 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))

**TODOS**  
  
- **documentation** &#10140; PHP's highlight_string/file to rapresent code excerpts
- **escort library** &#10140; session su PHP poi DB se webstore & memcache fail?
- **memcache support** &#10140; verify in method, if at least one mem-server works
- **load_libraries** &#10140; find someway to avoid conflicts between libs/plugins
- **pdf documentation** &#10140; check file creation/modification date -> reminder
- **cyc & documentation** &#10140; render per line & move to another library class

  
***  
  
Class MD (Fri, 08 Mar 2013 11:10:24 +0000)  
------------------------------------------  
  
**CODE REFERENCE:**  
  
- **__construct** (CPub, Len: 8 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: 1 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **_validate_tag** (Pri, Len: 2 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **_set_content** (Pri, Len: 5 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **_set_formatting** (Pri, Len: 7 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **h1** (PriS, Len: 4 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **h2** (PriS, Len: 4 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **h3** (PriS, Len: 4 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **img** (PriS, Len: 14 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: 1 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **image** (PubS, Len: 2 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **hr** (PubS, Len: 3 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **text** (PubS, Len: 4 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **title** (PubS, Len: 7 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: 3 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))

  
***  
  
Class NAVIGATOR (Thu, 07 Mar 2013 12:28:05 +0000)  
-------------------------------------------------  
  
**CODE REFERENCE:**  
  
- **__construct** (CPub, Len: 22 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: 3 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **_initialize_structure** (Pri, Len: 8 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **_add_branch** (Pri, Len: 30 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: 4 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **_add_handlers** (Pri, Len: 25 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: 2 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **_add_handler_static_options** (Pri, Len: 28 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: 4 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **_print_handler_name** (Pri, Len: 8 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **_print_handler_parameter** (Pri, Len: 14 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: 1 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **_print_additional_parameters** (Pri, Len: 12 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: 1 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **_render_breadcrumb** (Pri, Len: 23 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: 2 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **render_list** (PubS, Len: 3 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **render_breadcrumb** (PubS, Len: 10 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: 2 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **render_active_breadcrumb** (PubS, Len: 1 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **render_sitemap** (PubS, Len: 5 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))

**TODOS**  
  
- **render_list** &#10140; this should be CSS3 and appear on a mouse gesture..
- **active breadcrumb** &#10140; dynamic same-level-select trunks, or maybe widget?

  
***  
  
Class POWER (Thu, 29 Nov 2012 13:43:24 +0000)  
---------------------------------------------  
  
  
***  
  
Class TOOLBOX (Mon, 04 Mar 2013 10:41:00 +0000)  
-----------------------------------------------  
  
**CODE REFERENCE:**  
  
- **format_value** (PubS, Len: 13 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: 5 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))

  
***  
  
Class WIDGETS (Fri, 23 Nov 2012 17:54:52 +0000)  
-----------------------------------------------  
  
  
***  
  
  
Available components:  
---------------------  
  
**ADMIN (FRI, 23 NOV 2012 09:45:30 +0000)**  
  
**CONTROL (THU, 07 MAR 2013 12:37:45 +0000)**  
  
**DOCUMENTATION (FRI, 08 MAR 2013 11:11:01 +0000)**  
  
**ERROR (FRI, 01 MAR 2013 16:01:13 +0000)**  
  
**HOMEPAGE (MON, 03 DEC 2012 14:02:33 +0000)**  
  
**POWER (FRI, 23 NOV 2012 16:39:58 +0000)**  
  
  
  
***  
  




Copyright © 2011-2013 | Das S.C.H.R.I.M.P. Project  
