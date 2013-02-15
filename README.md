![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/schrimp_favicon_md.ico "") Das S.C.H.R.I.M.P.'s Documentation 0.4.2013.02.16  
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
- **MD_NEWLINE_SEQUENCE** &#10140; "  
"
- **SET_COMPLEXITY_INDEX** &#10140; 12
- **SET_GITHUB_RAWPATH** &#10140; "https://raw.github.com/TheB3Rt0z/schrimp/master/"
  
**FUNCTION ALIASES**  
  
- **fe($path)** &#10140; .main.php on line 463,
  returns boolean if realpath path exists on running server;
  @param string $path

- **fv($mixed)** &#10140; .lib/toolbox.php on line 29,
  returns a beautiful formatted value, mixed variable-type-dependant;
  @param mixed $mixed

- **le($msg)** &#10140; .main.php on line 490,
  launches a customizable error 500, mit optional backtrace for debug;
  @param string $msg

- **rt($url = '')** &#10140; .main.php on line 481,
  relocates to given relative url or to base path on default;
  @param string $url

- **ru($uri = '')** &#10140; .main.php on line 472,
  returns an absolute uri, based on current server configuration;
  @param string $uri

- **sb()** &#10140; .main.php on line 498,
  show call's backtrace with help of error base handler

- **tr($component, $marker)** &#10140; .lib/language.php on line 90,
  executes language translation of marker identifier, referring to given component;
  @param string $component
  @param string $marker

- **vd($what)** &#10140; .main.php on line 454,
  returns pre-formatted mixed variables;
  @param mixed $what

  
**TODOS**  
  
- **? admin bar** &#10140; optional control to measure run time performance (gApis)
  
  
***  
  
Class CONTROLLER (Fri, 15 Feb 2013 23:57:48 +0100)  
--------------------------------------------------  
  
**CLASS CONFIGURATION CONSTANTS:**  
  
- **VISIBLE_IN_NAVIGATION** &#10140; true
- **RENDER_BREADCRUMB** &#10140; true

**CODE REFERENCE:**  
  
- **__construct** (CPub, L: 5 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: 0 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **initialize** (ProA, L: 0 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: 0 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **_set_title** (Pro, L: 1 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: 0 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **_set_header** (Pro, L: 1 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: 0 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **_set_nav** (Pro, L: 1 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: 0 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **_set_section** (Pro, L: 1 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: 0 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **_set_article** (Pro, L: 1 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: 0 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **_set_aside** (Pro, L: 1 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: 0 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **_set_footer** (Pro, L: 1 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: 0 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **_translate** (Pro, L: 2 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: 0 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **get_title** (Pub, L: 1 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: 0 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **get_header** (Pub, L: 1 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: 0 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **get_nav** (Pub, L: 1 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: 0 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **get_section** (Pub, L: 1 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: 0 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **get_article** (Pub, L: 1 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: 0 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **get_aside** (Pub, L: 1 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: 0 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **get_footer** (Pub, L: 1 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: 0 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))

  
***  
  
Class DB (Mon, 26 Nov 2012 22:36:54 +0100)  
------------------------------------------  
  
**CODE REFERENCE:**  
  
- **__construct** (CPub, L: 19 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: 1 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))

  
***  
  
Class ESCORT (Fri, 23 Nov 2012 21:07:16 +0100)  
----------------------------------------------  
  
  
***  
  
Class HTML (Wed, 16 Jan 2013 21:39:05 +0100)  
--------------------------------------------  
  
**CODE REFERENCE:**  
  
- **__construct** (CPub, L: 21 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: 4 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **_is_single** (Pri, L: 2 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: 0 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **_is_container** (Pri, L: 2 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: 0 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **_validate_tag** (Pri, L: 1 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: 1 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **_set_attributes** (Pri, L: 20 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: 2 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **_set_content** (Pri, L: 5 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: 0 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **a** (PriS, L: 10 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: 1 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **br** (PriS, L: 3 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: 0 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **div** (PriS, L: 11 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: 2 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **img** (PriS, L: 16 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: 1 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **h1** (PriS, L: 5 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: 0 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **h2** (PriS, L: 5 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: 0 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **h3** (PriS, L: 5 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: 0 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **h4** (PriS, L: 5 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: 0 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **h5** (PriS, L: 5 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: 0 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **h6** (PriS, L: 5 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: 0 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **h7** (PriS, L: 5 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: 0 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **li** (PriS, L: 9 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: 1 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **link** (PriS, L: 26 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: 3 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **ol** (PriS, L: 9 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: 1 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **p** (PriS, L: 5 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: 0 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **pre** (PriS, L: 5 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: 0 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **script** (PriS, L: 38 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_redics.png "") CyC: 6 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **ul** (PriS, L: 9 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: 1 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **add_favicon** (PubS, L: 7 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: 0 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **add_stylesheet** (PubS, L: 3 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: 0 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **add_js_file** (PubS, L: 2 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: 0 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **add_js_script** (PubS, L: 3 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: 0 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **array_to_list** (PubS, L: 12 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: 2 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **box** (PubS, L: 2 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: 0 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **divisor** (PubS, L: 3 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: 0 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **highbox** (PubS, L: 2 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: 0 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **hyperlink** (PubS, L: 2 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: 0 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **image** (PubS, L: 3 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: 0 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **newline** (PubS, L: 1 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: 0 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **text** (PubS, L: 1 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: 0 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **preform** (PubS, L: 1 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: 0 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **title** (PubS, L: 7 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: 3 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))

**TODOS**  
  
- **script online loading** &#10140; if != local, should have a lfb..

  
***  
  
Class LANGUAGE (Fri, 23 Nov 2012 21:07:16 +0100)  
------------------------------------------------  
  
**CODE REFERENCE:**  
  
- **is_supported** (PubS, L: 1 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: 0 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **translate** (PubS, L: 39 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_redics.png "") CyC: 11 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_yellowops.png ""))

**TODOS**  
  
- **automatic translation** &#10140; it could be interessant to use pspell&gettext

  
***  
  
Class MAIN (Sat, 16 Feb 2013 00:17:27 +0100)  
--------------------------------------------  
  
**CODE REFERENCE:**  
  
- **__construct** (CPub, L: 12 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: 1 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **_set_configuration** (Pri, L: 24 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: 1 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **_load_libraries** (Pri, L: 5 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: 2 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **_initialize** (Pri, L: 45 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_redics.png "") CyC: 8 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **get_call** (Pub, L: 1 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: 0 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **get_path** (Pub, L: 1 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: 0 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **get_fullpath** (Pub, L: 1 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: 0 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **var_dump** (PubS, L: 1 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: 0 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **get_version** (PubS, L: 5 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: 0 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **get_components** (PubS, L: 13 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: 4 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **get_documentation** (PubS, L: 148 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_redics.png "") CyC: 14 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_redics.png ""))
- **is_webstoraged** (PubS, L: 1 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: 0 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **is_memcached** (PubS, L: 1 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: 0 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **exists_file** (PubS, L: 1 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: 0 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **resolve_uri** (PubS, L: 4 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: 0 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **relocate_to** (PubS, L: 1 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: 0 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **launch_error** (PubS, L: 8 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: 1 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **set_buffer** (PubS, L: 1 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: 0 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **get_buffer** (PubS, L: 6 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: 1 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **show_backtrace** (PubS, L: 6 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: 1 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))

**TODOS**  
  
- **documentation** &#10140; PHP's highlight_string/file to rapresent code excerpts
- **escort library** &#10140; session su PHP poi DB se webstore & memcache fail?
- **memcache support** &#10140; verify in method, if at least one mem-server works
- **load_libraries** &#10140; find someway to avoid conflicts between libs/plugins
- **pdf documentation** &#10140; check file creation/modification date -> reminder

  
***  
  
Class MD (Mon, 03 Dec 2012 22:49:42 +0100)  
------------------------------------------  
  
**CODE REFERENCE:**  
  
- **__construct** (CPub, L: 8 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: 1 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **_validate_tag** (Pri, L: 2 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: 0 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **_set_content** (Pri, L: 5 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: 0 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **_set_formatting** (Pri, L: 7 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: 0 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **h1** (PriS, L: 4 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: 0 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **h2** (PriS, L: 4 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: 0 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **h3** (PriS, L: 4 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: 0 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **img** (PriS, L: 17 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: 1 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **image** (PubS, L: 2 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: 0 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **hr** (PubS, L: 3 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: 0 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **text** (PubS, L: 4 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: 0 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **title** (PubS, L: 7 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: 3 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))

  
***  
  
Class NAVIGATOR (Thu, 17 Jan 2013 23:38:48 +0100)  
-------------------------------------------------  
  
**CODE REFERENCE:**  
  
- **__construct** (CPub, L: 92 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_redics.png "") CyC: 12 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_yellowops.png ""))
- **render_list** (PubS, L: 3 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: 0 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **render_breadcrumb** (PubS, L: 58 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_redics.png "") CyC: 6 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **render_active_breadcrumb** (PubS, L: 1 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: 0 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))
- **render_sitemap** (PubS, L: 3 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: 0 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))

**TODOS**  
  
- **render_list** &#10140; this should be CSS3 and appear on a mouse gesture..
- **active breadcrumb** &#10140; dynamic same-level-select trunks, or maybe widget?

  
***  
  
Class POWER (Thu, 29 Nov 2012 20:34:43 +0100)  
---------------------------------------------  
  
  
***  
  
Class TOOLBOX (Fri, 30 Nov 2012 23:50:38 +0100)  
-----------------------------------------------  
  
**CODE REFERENCE:**  
  
- **format_value** (PubS, L: 13 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: 6 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png ""))

  
***  
  
Class WIDGETS (Fri, 23 Nov 2012 21:07:16 +0100)  
-----------------------------------------------  
  
  
***  
  
Available components:  
---------------------  
  
**ADMIN (FRI, 18 JAN 2013 00:38:07 +0100)**  
  
**CONTROL (MON, 03 DEC 2012 22:14:38 +0100)**  
  
**DOCUMENTATION (THU, 29 NOV 2012 20:34:43 +0100)**  
  
**ERROR (FRI, 18 JAN 2013 00:37:50 +0100)**  
  
**HOMEPAGE (MON, 03 DEC 2012 21:19:41 +0100)**  
  
**POWER (FRI, 23 NOV 2012 21:07:16 +0100)**  
  
  
***  
  




Copyright © 2011-2013 | Das S.C.H.R.I.M.P. Project  
