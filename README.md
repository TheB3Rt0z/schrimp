![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/schrimp_favicon_md.ico "") Das S.C.H.R.I.M.P.'s Documentation 0.4.2013.02.15  
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
  
- **fe($path)** &#10140; .main.php on line 395,
  returns boolean if realpath path exists on running server;
  @param string $path

- **fv($mixed)** &#10140; .lib/toolbox.php on line 29,
  returns a beautiful formatted value, mixed variable-type-dependant;
  @param mixed $mixed

- **le($msg)** &#10140; .main.php on line 422,
  launches a customizable error 500, mit optional backtrace for debug;
  @param string $msg

- **rt($url = '')** &#10140; .main.php on line 413,
  relocates to given relative url or to base path on default;
  @param string $url

- **ru($uri = '')** &#10140; .main.php on line 404,
  returns an absolute uri, based on current server configuration;
  @param string $uri

- **sb()** &#10140; .main.php on line 430,
  show call's backtrace with help of error base handler

- **tr($component, $marker)** &#10140; .lib/language.php on line 90,
  executes language translation of marker identifier, referring to given component;
  @param string $component
  @param string $marker

- **vd($what)** &#10140; .main.php on line 386,
  returns pre-formatted mixed variables;
  @param mixed $what

  
**TODOS**  
  
- **? admin bar** &#10140; optional control to measure run time performance (gApis)
  
  
***  
  
Class CONTROLLER (Fri, 15 Feb 2013 16:53:58 +0000)  
--------------------------------------------------  
  
**CLASS CONFIGURATION CONSTANTS:**  
  
- **VISIBLE_IN_NAVIGATION** &#10140; true
- **RENDER_BREADCRUMB** &#10140; true

**CODE REFERENCE:**  
  
- **__construct** (CPub, L: 5 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: ?)
- **initialize** (ProA, L: 0 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: ?)
- **_set_title** (Pro, L: 1 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: ?)
- **_set_header** (Pro, L: 1 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: ?)
- **_set_nav** (Pro, L: 1 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: ?)
- **_set_section** (Pro, L: 1 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: ?)
- **_set_article** (Pro, L: 1 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: ?)
- **_set_aside** (Pro, L: 1 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: ?)
- **_set_footer** (Pro, L: 1 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: ?)
- **_translate** (Pro, L: 2 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: ?)
- **get_title** (Pub, L: 1 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: ?)
- **get_header** (Pub, L: 1 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: ?)
- **get_nav** (Pub, L: 1 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: ?)
- **get_section** (Pub, L: 1 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: ?)
- **get_article** (Pub, L: 1 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: ?)
- **get_aside** (Pub, L: 1 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: ?)
- **get_footer** (Pub, L: 1 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: ?)

  
***  
  
Class DB (Tue, 27 Nov 2012 11:40:24 +0000)  
------------------------------------------  
  
**CODE REFERENCE:**  
  
- **__construct** (CPub, L: 19 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: ?)

  
***  
  
Class ESCORT (Fri, 23 Nov 2012 17:54:52 +0000)  
----------------------------------------------  
  
  
***  
  
Class HTML (Wed, 16 Jan 2013 09:23:19 +0000)  
--------------------------------------------  
  
**CODE REFERENCE:**  
  
- **__construct** (CPub, L: 21 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: ?)
- **_is_single** (Pri, L: 2 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: ?)
- **_is_container** (Pri, L: 2 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: ?)
- **_validate_tag** (Pri, L: 1 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: ?)
- **_set_attributes** (Pri, L: 20 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: ?)
- **_set_content** (Pri, L: 5 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: ?)
- **a** (PriS, L: 10 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: ?)
- **br** (PriS, L: 3 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: ?)
- **div** (PriS, L: 11 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: ?)
- **img** (PriS, L: 16 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: ?)
- **h1** (PriS, L: 5 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: ?)
- **h2** (PriS, L: 5 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: ?)
- **h3** (PriS, L: 5 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: ?)
- **h4** (PriS, L: 5 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: ?)
- **h5** (PriS, L: 5 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: ?)
- **h6** (PriS, L: 5 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: ?)
- **h7** (PriS, L: 5 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: ?)
- **li** (PriS, L: 9 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: ?)
- **link** (PriS, L: 26 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: ?)
- **ol** (PriS, L: 9 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: ?)
- **p** (PriS, L: 5 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: ?)
- **pre** (PriS, L: 5 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: ?)
- **script** (PriS, L: 38 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_redics.png "") CyC: ?)
- **ul** (PriS, L: 9 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: ?)
- **add_favicon** (PubS, L: 7 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: ?)
- **add_stylesheet** (PubS, L: 3 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: ?)
- **add_js_file** (PubS, L: 2 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: ?)
- **add_js_script** (PubS, L: 3 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: ?)
- **array_to_list** (PubS, L: 12 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: ?)
- **box** (PubS, L: 2 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: ?)
- **divisor** (PubS, L: 3 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: ?)
- **highbox** (PubS, L: 2 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: ?)
- **hyperlink** (PubS, L: 2 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: ?)
- **image** (PubS, L: 3 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: ?)
- **newline** (PubS, L: 1 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: ?)
- **text** (PubS, L: 1 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: ?)
- **preform** (PubS, L: 1 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: ?)
- **title** (PubS, L: 7 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: ?)

**TODOS**  
  
- **script online loading** &#10140; if != local, should have a lfb..

  
***  
  
Class LANGUAGE (Fri, 23 Nov 2012 17:54:52 +0000)  
------------------------------------------------  
  
**CODE REFERENCE:**  
  
- **is_supported** (PubS, L: 1 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: ?)
- **translate** (PubS, L: 39 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_redics.png "") CyC: ?)

**TODOS**  
  
- **automatic translation** &#10140; it could be interessant to use pspell&gettext

  
***  
  
Class MAIN (Fri, 15 Feb 2013 16:52:59 +0000)  
--------------------------------------------  
  
**CODE REFERENCE:**  
  
- **__construct** (CPub, L: 12 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: ?)
- **_set_configuration** (Pri, L: 24 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: ?)
- **_load_libraries** (Pri, L: 5 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: ?)
- **_initialize** (Pri, L: 45 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_redics.png "") CyC: ?)
- **get_call** (Pub, L: 1 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: ?)
- **get_path** (Pub, L: 1 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: ?)
- **get_fullpath** (Pub, L: 1 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: ?)
- **var_dump** (PubS, L: 1 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: ?)
- **get_version** (PubS, L: 5 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: ?)
- **get_components** (PubS, L: 13 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: ?)
- **get_documentation** (PubS, L: 130 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_redics.png "") CyC: ?)
- **is_webstoraged** (PubS, L: 1 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: ?)
- **is_memcached** (PubS, L: 1 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: ?)
- **exists_file** (PubS, L: 1 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: ?)
- **resolve_uri** (PubS, L: 4 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: ?)
- **relocate_to** (PubS, L: 1 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: ?)
- **launch_error** (PubS, L: 8 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: ?)
- **set_buffer** (PubS, L: 1 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: ?)
- **get_buffer** (PubS, L: 6 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: ?)
- **show_backtrace** (PubS, L: 6 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: ?)

**TODOS**  
  
- **documentation** &#10140; PHP's highlight_string/file to rapresent code excerpts
- **escort library** &#10140; session su PHP poi DB se webstore & memcache fail?
- **memcache support** &#10140; verify in method, if at least one mem-server works
- **load_libraries** &#10140; find someway to avoid conflicts between libs/plugins
- **pdf documentation** &#10140; check file creation/modification date -> reminder

  
***  
  
Class MD (Tue, 04 Dec 2012 12:51:51 +0000)  
------------------------------------------  
  
**CODE REFERENCE:**  
  
- **__construct** (CPub, L: 8 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: ?)
- **_validate_tag** (Pri, L: 2 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: ?)
- **_set_content** (Pri, L: 5 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: ?)
- **_set_formatting** (Pri, L: 7 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: ?)
- **h1** (PriS, L: 4 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: ?)
- **h2** (PriS, L: 4 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: ?)
- **h3** (PriS, L: 4 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: ?)
- **img** (PriS, L: 17 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: ?)
- **image** (PubS, L: 2 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: ?)
- **hr** (PubS, L: 3 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: ?)
- **text** (PubS, L: 4 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: ?)
- **title** (PubS, L: 7 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: ?)

  
***  
  
Class NAVIGATOR (Fri, 25 Jan 2013 10:27:19 +0000)  
-------------------------------------------------  
  
**CODE REFERENCE:**  
  
- **__construct** (CPub, L: 92 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_redics.png "") CyC: ?)
- **render_list** (PubS, L: 3 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: ?)
- **render_breadcrumb** (PubS, L: 58 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_redics.png "") CyC: ?)
- **render_active_breadcrumb** (PubS, L: 1 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: ?)
- **render_sitemap** (PubS, L: 3 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: ?)

**TODOS**  
  
- **render_list** &#10140; this should be CSS3 and appear on a mouse gesture..
- **active breadcrumb** &#10140; dynamic same-level-select trunks, or maybe widget?

  
***  
  
Class POWER (Thu, 29 Nov 2012 13:43:24 +0000)  
---------------------------------------------  
  
  
***  
  
Class TOOLBOX (Mon, 03 Dec 2012 10:25:29 +0000)  
-----------------------------------------------  
  
**CODE REFERENCE:**  
  
- **format_value** (PubS, L: 13 ![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_greenok.png "") CyC: ?)

  
***  
  
Class WIDGETS (Fri, 23 Nov 2012 17:54:52 +0000)  
-----------------------------------------------  
  
  
***  
  
Available components:  
---------------------  
  
**ADMIN (FRI, 23 NOV 2012 09:45:30 +0000)**  
  
**CONTROL (TUE, 04 DEC 2012 12:51:51 +0000)**  
  
**DOCUMENTATION (THU, 29 NOV 2012 16:22:52 +0000)**  
  
**ERROR (FRI, 25 JAN 2013 10:27:19 +0000)**  
  
**HOMEPAGE (MON, 03 DEC 2012 14:02:33 +0000)**  
  
**POWER (FRI, 23 NOV 2012 16:39:58 +0000)**  
  
  
***  
  




Copyright © 2011-2013 | Das S.C.H.R.I.M.P. Project  
