![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/schrimp_favicon_md.ico "") Das S.C.H.R.I.M.P.'s Documentation 0.2  
==============================================================================================================================  
  
  
  
General reference  
-----------------  
  
  
**GLOBAL CONFIGURATION CONSTANTS**  
  
- **DB_TABLE_PREFIX** &#10140; null
- **HTML_BREADCRUMB_SEPARATOR** &#10140; " &raquo; "
- **LANGUAGE_FALLBACK_LANG** &#10140; "en"
- **MAX_BLOCK_COMPLEXITY** &#10140; 
- **MAX_CYCLOMATIC_COMPLEXITY** &#10140; 
- **MAX_METHODS_COMPLEXITY** &#10140; 
- **MD_NEWLINE_SEQUENCE** &#10140; "  
"
- **SET_DEVELOPMENT_MODE** &#10140; true
- **SET_GITHUB_RAWPATH** &#10140; "https://raw.github.com/TheB3Rt0z/schrimp/master/"
- **SET_HOME_COMPONENT** &#10140; "admin"
- **SET_LOCAL_PATH** &#10140; "/schrimp"
- **SET_OUTPUT_COMPRESSION** &#10140; false
- **SET_TRANSPORT_PROTOCOL** &#10140; "http"
- **STR_COPYRIGHT_SIGNATURE** &#10140; "Copyright © 2011-2012 | Das S.C.H.R.I.M.P. Project"
- **STR_KERNEL_SALT** &#10140; "Sstm Cntrl Hdng_t_ Rw Incrs_f Mntl Prdctvt"
- **STR_PROJECT_NAME** &#10140; "Das S.C.H.R.I.M.P."
  
**FUNCTION ALIASES**  
  
- **fe($path)** &#10140; .main.php on line 324,
  returns boolean if realpath path exists on running server;
  @param string $path

- **fv($mixed)** &#10140; .lib/toolbox.php on line 27,
  returns a beautiful formatted value, mixed variable-type-dependant;
  @param mixed $mixed

- **le($msg)** &#10140; .main.php on line 351,
  launches a customizable error 500, mit optional backtrace for debug;
  @param string $msg

- **rt($url = '')** &#10140; .main.php on line 342,
  relocates to given relative url or to base path on default;
  @param string $url

- **ru($uri = '')** &#10140; .main.php on line 333,
  returns an absolute uri, based on current server configuration;
  @param string $uri

- **sb()** &#10140; .main.php on line 359,
  show call's backtrace with help of error base handler

- **tr($component, $marker)** &#10140; .lib/language.php on line 90,
  executes language translation of marker identifier, referring to given component;
  @param string $component
  @param string $marker

- **vd($what)** &#10140; .main.php on line 315,
  returns pre-formatted mixed variables;
  @param mixed $what

  
**TODOS**  
  
- **? admin bar** &#10140; optional control to measure run time performance (gApis)
  
  
***  
  
Class CONTROLLER (Thu, 29 Nov 2012 16:14:21 +0000)  
--------------------------------------------------  
  
  
**CLASS CONFIGURATION CONSTANTS:**  
  
- **VISIBLE_IN_NAVIGATION** &#10140; true
- **RENDER_BREADCRUMB** &#10140; true
  
***  
  
Class DB (Tue, 27 Nov 2012 11:40:24 +0000)  
------------------------------------------  
  
  
  
***  
  
Class ESCORT (Fri, 23 Nov 2012 17:54:52 +0000)  
----------------------------------------------  
  
  
  
***  
  
Class HTML (Thu, 29 Nov 2012 16:31:08 +0000)  
--------------------------------------------  
  
  
  
***  
  
Class LANGUAGE (Fri, 23 Nov 2012 17:54:52 +0000)  
------------------------------------------------  
  
  
**TODOS**  
  
- **automatic translation** &#10140; it could be interessant to use pspell&gettext
  
***  
  
Class MAIN (Thu, 29 Nov 2012 17:31:12 +0000)  
--------------------------------------------  
  
  
**TODOS**  
  
- **documentation** &#10140; PHP's highlight_string/file to rapresent code excerpts
- **escort library** &#10140; session su PHP poi DB se webstore & memcache fail?
- **memcache support** &#10140; verify in method, if at least one mem-server works
- **load_libraries** &#10140; find someway to avoid conflicts between libs/plugins
- **var_dump** &#10140; add backtracking output, based on debug_(print_)backtrace..
- **show_debug** &#10140; transport backtracing to hander as string-output + alias
  
***  
  
Class MD (Thu, 29 Nov 2012 16:14:21 +0000)  
------------------------------------------  
  
  
  
***  
  
Class NAVIGATOR (Thu, 29 Nov 2012 17:18:51 +0000)  
-------------------------------------------------  
  
  
**TODOS**  
  
- **render_list** &#10140; this should be CSS3 and appear on a mouse gesture..
- **active breadcrumb** &#10140; dynamic same-level-select trunks, or maybe widget?
  
***  
  
Class POWER (Thu, 29 Nov 2012 13:43:24 +0000)  
---------------------------------------------  
  
  
  
***  
  
Class TOOLBOX (Thu, 29 Nov 2012 16:31:08 +0000)  
-----------------------------------------------  
  
  
  
***  
  
Class WIDGETS (Fri, 23 Nov 2012 17:54:52 +0000)  
-----------------------------------------------  
  
  
  
***  
  




Copyright © 2011-2012 | Das S.C.H.R.I.M.P. Project  
