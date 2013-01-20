![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/schrimp_favicon_md.ico "") Das S.C.H.R.I.M.P.'s Documentation 0.3.2013.01.21  
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
  
- **fe($path)** &#10140; .main.php on line 388,
  returns boolean if realpath path exists on running server;
  @param string $path

- **fv($mixed)** &#10140; .lib/toolbox.php on line 29,
  returns a beautiful formatted value, mixed variable-type-dependant;
  @param mixed $mixed

- **le($msg)** &#10140; .main.php on line 415,
  launches a customizable error 500, mit optional backtrace for debug;
  @param string $msg

- **rt($url = '')** &#10140; .main.php on line 406,
  relocates to given relative url or to base path on default;
  @param string $url

- **ru($uri = '')** &#10140; .main.php on line 397,
  returns an absolute uri, based on current server configuration;
  @param string $uri

- **sb()** &#10140; .main.php on line 423,
  show call's backtrace with help of error base handler

- **tr($component, $marker)** &#10140; .lib/language.php on line 90,
  executes language translation of marker identifier, referring to given component;
  @param string $component
  @param string $marker

- **vd($what)** &#10140; .main.php on line 379,
  returns pre-formatted mixed variables;
  @param mixed $what

  
**TODOS**  
  
- **? admin bar** &#10140; optional control to measure run time performance (gApis)
  
  
***  
  
Class CONTROLLER (Sun, 20 Jan 2013 23:57:24 +0100)  
--------------------------------------------------  
  
**CLASS CONFIGURATION CONSTANTS:**  
  
- **VISIBLE_IN_NAVIGATION** &#10140; true
- **RENDER_BREADCRUMB** &#10140; true

**CODE REFERENCE:**  
  
- **__construct** (CPub, L: 5, CyC: ?)
- **initialize** (Pub, L: -2, CyC: ?)
- **_set_title** (Pro, L: 1, CyC: ?)
- **_set_header** (Pro, L: 1, CyC: ?)
- **_set_nav** (Pro, L: 1, CyC: ?)
- **_set_section** (Pro, L: 1, CyC: ?)
- **_set_article** (Pro, L: 1, CyC: ?)
- **_set_aside** (Pro, L: 1, CyC: ?)
- **_set_footer** (Pro, L: 1, CyC: ?)
- **_translate** (Pro, L: 2, CyC: ?)
- **get_title** (Pub, L: 1, CyC: ?)
- **get_header** (Pub, L: 1, CyC: ?)
- **get_nav** (Pub, L: 1, CyC: ?)
- **get_section** (Pub, L: 1, CyC: ?)
- **get_article** (Pub, L: 1, CyC: ?)
- **get_aside** (Pub, L: 1, CyC: ?)
- **get_footer** (Pub, L: 1, CyC: ?)

  
***  
  
Class DB (Mon, 26 Nov 2012 22:36:54 +0100)  
------------------------------------------  
  
**CODE REFERENCE:**  
  
- **__construct** (CPub, L: 19, CyC: ?)

  
***  
  
Class ESCORT (Fri, 23 Nov 2012 21:07:16 +0100)  
----------------------------------------------  
  
  
***  
  
Class HTML (Wed, 16 Jan 2013 21:39:05 +0100)  
--------------------------------------------  
  
**CODE REFERENCE:**  
  
- **__construct** (CPub, L: 21, CyC: ?)
- **_is_single** (Pri, L: 2, CyC: ?)
- **_is_container** (Pri, L: 2, CyC: ?)
- **_validate_tag** (Pri, L: 1, CyC: ?)
- **_set_attributes** (Pri, L: 20, CyC: ?)
- **_set_content** (Pri, L: 5, CyC: ?)
- **a** (PriS, L: 10, CyC: ?)
- **br** (PriS, L: 3, CyC: ?)
- **div** (PriS, L: 11, CyC: ?)
- **img** (PriS, L: 16, CyC: ?)
- **h1** (PriS, L: 5, CyC: ?)
- **h2** (PriS, L: 5, CyC: ?)
- **h3** (PriS, L: 5, CyC: ?)
- **h4** (PriS, L: 5, CyC: ?)
- **h5** (PriS, L: 5, CyC: ?)
- **h6** (PriS, L: 5, CyC: ?)
- **h7** (PriS, L: 5, CyC: ?)
- **li** (PriS, L: 9, CyC: ?)
- **link** (PriS, L: 26, CyC: ?)
- **ol** (PriS, L: 9, CyC: ?)
- **p** (PriS, L: 5, CyC: ?)
- **pre** (PriS, L: 5, CyC: ?)
- **script** (PriS, L: 38, CyC: ?)
- **ul** (PriS, L: 9, CyC: ?)
- **add_favicon** (PubS, L: 7, CyC: ?)
- **add_stylesheet** (PubS, L: 3, CyC: ?)
- **add_js_file** (PubS, L: 2, CyC: ?)
- **add_js_script** (PubS, L: 3, CyC: ?)
- **array_to_list** (PubS, L: 12, CyC: ?)
- **box** (PubS, L: 2, CyC: ?)
- **divisor** (PubS, L: 3, CyC: ?)
- **highbox** (PubS, L: 2, CyC: ?)
- **hyperlink** (PubS, L: 2, CyC: ?)
- **image** (PubS, L: 3, CyC: ?)
- **newline** (PubS, L: 1, CyC: ?)
- **text** (PubS, L: 1, CyC: ?)
- **preform** (PubS, L: 1, CyC: ?)
- **title** (PubS, L: 7, CyC: ?)

**TODOS**  
  
- **script online loading** &#10140; if != local, should have a lfb..

  
***  
  
Class LANGUAGE (Fri, 23 Nov 2012 21:07:16 +0100)  
------------------------------------------------  
  
**CODE REFERENCE:**  
  
- **is_supported** (PubS, L: 1, CyC: ?)
- **translate** (PubS, L: 39, CyC: ?)

**TODOS**  
  
- **automatic translation** &#10140; it could be interessant to use pspell&gettext

  
***  
  
Class MAIN (Mon, 21 Jan 2013 00:32:08 +0100)  
--------------------------------------------  
  
**CODE REFERENCE:**  
  
- **__construct** (CPub, L: 12, CyC: ?)
- **_set_configuration** (Pri, L: 24, CyC: ?)
- **_load_libraries** (Pri, L: 5, CyC: ?)
- **_initialize** (Pri, L: 45, CyC: ?)
- **get_call** (Pub, L: 1, CyC: ?)
- **get_path** (Pub, L: 1, CyC: ?)
- **get_fullpath** (Pub, L: 1, CyC: ?)
- **var_dump** (PubS, L: 1, CyC: ?)
- **get_version** (PubS, L: 5, CyC: ?)
- **get_components** (PubS, L: 13, CyC: ?)
- **get_documentation** (PubS, L: 123, CyC: ?)
- **is_webstoraged** (PubS, L: 1, CyC: ?)
- **is_memcached** (PubS, L: 1, CyC: ?)
- **exists_file** (PubS, L: 1, CyC: ?)
- **resolve_uri** (PubS, L: 4, CyC: ?)
- **relocate_to** (PubS, L: 1, CyC: ?)
- **launch_error** (PubS, L: 8, CyC: ?)
- **set_buffer** (PubS, L: 1, CyC: ?)
- **get_buffer** (PubS, L: 6, CyC: ?)
- **show_backtrace** (PubS, L: 6, CyC: ?)

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
  
- **__construct** (CPub, L: 8, CyC: ?)
- **_validate_tag** (Pri, L: 2, CyC: ?)
- **_set_content** (Pri, L: 5, CyC: ?)
- **_set_formatting** (Pri, L: 7, CyC: ?)
- **h1** (PriS, L: 4, CyC: ?)
- **h2** (PriS, L: 4, CyC: ?)
- **h3** (PriS, L: 4, CyC: ?)
- **img** (PriS, L: 17, CyC: ?)
- **image** (PubS, L: 2, CyC: ?)
- **hr** (PubS, L: 3, CyC: ?)
- **text** (PubS, L: 4, CyC: ?)
- **title** (PubS, L: 7, CyC: ?)

  
***  
  
Class NAVIGATOR (Thu, 17 Jan 2013 23:38:48 +0100)  
-------------------------------------------------  
  
**CODE REFERENCE:**  
  
- **__construct** (CPub, L: 92, CyC: ?)
- **render_list** (PubS, L: 3, CyC: ?)
- **render_breadcrumb** (PubS, L: 58, CyC: ?)
- **render_active_breadcrumb** (PubS, L: 1, CyC: ?)
- **render_sitemap** (PubS, L: 3, CyC: ?)

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
  
- **format_value** (PubS, L: 13, CyC: ?)

  
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
