![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/schrimp_favicon_md.ico "") Das S.C.H.R.I.M.P.'s Documentation 0.2.2012.12.03  
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
- **SET_DEVELOPMENT_MODE** &#10140; true
- **SET_GITHUB_RAWPATH** &#10140; "https://raw.github.com/TheB3Rt0z/schrimp/master/"
- **SET_HOME_COMPONENT** &#10140; "admin"
- **SET_LOCAL_PATH** &#10140; "/schrimp"
- **SET_TRANSPORT_PROTOCOL** &#10140; "http"
- **STR_COPYRIGHT_SIGNATURE** &#10140; "Copyright © 2011-2012 | Das S.C.H.R.I.M.P. Project"
- **STR_KERNEL_SALT** &#10140; "Sstm Cntrl Hdng_t_ Rw Incrs_f Mntl Prdctvt"
- **STR_PROJECT_NAME** &#10140; "Das S.C.H.R.I.M.P."
  
**FUNCTION ALIASES**  
  
- **fe($path)** &#10140; .main.php on line 358,
  returns boolean if realpath path exists on running server;
  @param string $path

- **fv($mixed)** &#10140; .lib/toolbox.php on line 29,
  returns a beautiful formatted value, mixed variable-type-dependant;
  @param mixed $mixed

- **le($msg)** &#10140; .main.php on line 385,
  launches a customizable error 500, mit optional backtrace for debug;
  @param string $msg

- **rt($url = '')** &#10140; .main.php on line 376,
  relocates to given relative url or to base path on default;
  @param string $url

- **ru($uri = '')** &#10140; .main.php on line 367,
  returns an absolute uri, based on current server configuration;
  @param string $uri

- **sb()** &#10140; .main.php on line 393,
  show call's backtrace with help of error base handler

- **tr($component, $marker)** &#10140; .lib/language.php on line 90,
  executes language translation of marker identifier, referring to given component;
  @param string $component
  @param string $marker

- **vd($what)** &#10140; .main.php on line 349,
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
  
Class MAIN (Mon, 03 Dec 2012 22:45:57 +0100)  
--------------------------------------------  
  
**TODOS**  
  
- **documentation** &#10140; PHP's highlight_string/file to rapresent code excerpts
- **escort library** &#10140; session su PHP poi DB se webstore & memcache fail?
- **memcache support** &#10140; verify in method, if at least one mem-server works
- **load_libraries** &#10140; find someway to avoid conflicts between libs/plugins
  
***  
  
Class MD (Mon, 03 Dec 2012 22:49:42 +0100)  
------------------------------------------  
  
  
***  
  
Class NAVIGATOR (Mon, 03 Dec 2012 22:36:35 +0100)  
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
  
**ERROR (THU, 29 NOV 2012 22:53:26 +0100)**  
  
**HOMEPAGE (MON, 03 DEC 2012 21:19:41 +0100)**  
  
**POWER (FRI, 23 NOV 2012 21:07:16 +0100)**  
  
  
***  
  




Copyright © 2011-2012 | Das S.C.H.R.I.M.P. Project  
