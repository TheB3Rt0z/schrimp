![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/schrimp_favicon_md.ico "") Das S.C.H.R.I.M.P.'s Documentation 0.3.2013.01.09  
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
  
- **fe($path)** &#10140; .main.php on line 359,
  returns boolean if realpath path exists on running server;
  @param string $path

- **fv($mixed)** &#10140; .lib/toolbox.php on line 29,
  returns a beautiful formatted value, mixed variable-type-dependant;
  @param mixed $mixed

- **le($msg)** &#10140; .main.php on line 386,
  launches a customizable error 500, mit optional backtrace for debug;
  @param string $msg

- **rt($url = '')** &#10140; .main.php on line 377,
  relocates to given relative url or to base path on default;
  @param string $url

- **ru($uri = '')** &#10140; .main.php on line 368,
  returns an absolute uri, based on current server configuration;
  @param string $uri

- **sb()** &#10140; .main.php on line 394,
  show call's backtrace with help of error base handler

- **tr($component, $marker)** &#10140; .lib/language.php on line 90,
  executes language translation of marker identifier, referring to given component;
  @param string $component
  @param string $marker

- **vd($what)** &#10140; .main.php on line 350,
  returns pre-formatted mixed variables;
  @param mixed $what

  
**TODOS**  
  
- **? admin bar** &#10140; optional control to measure run time performance (gApis)
  
  
***  
  
Class CONTROLLER (Thu, 29 Nov 2012 20:34:43 +0100)  
--------------------------------------------------  
  
**CLASS CONFIGURATION CONSTANTS:**  
  
- **VISIBLE_IN_NAVIGATION** &#10140; true
- **RENDER_BREADCRUMB** &#10140; true
  
***  
  
Class DB (Mon, 26 Nov 2012 22:36:54 +0100)  
------------------------------------------  
  
  
***  
  
Class ESCORT (Fri, 23 Nov 2012 21:07:16 +0100)  
----------------------------------------------  
  
  
***  
  
Class HTML (Thu, 29 Nov 2012 22:10:43 +0100)  
--------------------------------------------  
  
  
***  
  
Class LANGUAGE (Fri, 23 Nov 2012 21:07:16 +0100)  
------------------------------------------------  
  
**TODOS**  
  
- **automatic translation** &#10140; it could be interessant to use pspell&gettext
  
***  
  
Class MAIN (Wed, 09 Jan 2013 21:15:16 +0100)  
--------------------------------------------  
  
**TODOS**  
  
- **documentation** &#10140; PHP's highlight_string/file to rapresent code excerpts
- **escort library** &#10140; session su PHP poi DB se webstore & memcache fail?
- **memcache support** &#10140; verify in method, if at least one mem-server works
- **load_libraries** &#10140; find someway to avoid conflicts between libs/plugins
- **buffer usage** &#10140; implement main CRUD methods with auto delete-after-use
- **pdf documentation** &#10140; check file creation/modification date -> reminder
  
***  
  
Class MD (Mon, 03 Dec 2012 22:49:42 +0100)  
------------------------------------------  
  
  
***  
  
Class NAVIGATOR (Sun, 06 Jan 2013 15:59:12 +0100)  
-------------------------------------------------  
  
**TODOS**  
  
- **render_list** &#10140; this should be CSS3 and appear on a mouse gesture..
- **active breadcrumb** &#10140; dynamic same-level-select trunks, or maybe widget?
  
***  
  
Class POWER (Thu, 29 Nov 2012 20:34:43 +0100)  
---------------------------------------------  
  
  
***  
  
Class TOOLBOX (Fri, 30 Nov 2012 23:50:38 +0100)  
-----------------------------------------------  
  
  
***  
  
Class WIDGETS (Fri, 23 Nov 2012 21:07:16 +0100)  
-----------------------------------------------  
  
  
***  
  
Available components:  
---------------------  
  
**ADMIN (THU, 22 NOV 2012 22:36:38 +0100)**  
  
**CONTROL (MON, 03 DEC 2012 22:14:38 +0100)**  
  
**DOCUMENTATION (THU, 29 NOV 2012 20:34:43 +0100)**  
  
**ERROR (WED, 09 JAN 2013 21:15:16 +0100)**  
  
**HOMEPAGE (MON, 03 DEC 2012 21:19:41 +0100)**  
  
**POWER (FRI, 23 NOV 2012 21:07:16 +0100)**  
  
  
***  
  




Copyright © 2011-2013 | Das S.C.H.R.I.M.P. Project  
