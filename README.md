![](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/schrimp_favicon_md.ico "") Das S.C.H.R.I.M.P.'s Documentation 0.2  
==============================================================================================================================  
  
  
  
General reference  
-----------------  
  
  
**GLOBAL CONFIGURATION CONSTANTS**  
  
- **DB_TABLE_PREFIX** &#10140; null
- **HTML_BREADCRUMB_SEPARATOR** &#10140; " &raquo; "
- **LANGUAGE_FALLBACK_LANG** &#10140; "en"
- **MAX_BLOCK_COMPLEXITY** &#10140; 84
- **MAX_CYCLOMATIC_COMPLEXITY** &#10140; 12
- **MAX_METHODS_COMPLEXITY** &#10140; 36
- **MD_NEWLINE** &#10140; "  
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
  
***  
  
**FUNCTION ALIASES**  
  
- **fe($path)** &#10140; .main.php on line 280,
  returns boolean if realpath path exists on running server;
  @param string $path

- **le($msg)** &#10140; .main.php on line 298,
  launches a customizable error 500;
  @param string $msg

- **rt($url = '')** &#10140; .main.php on line 289,
  relocates to given relative url or to base path on default;
  @param string $url

- **tr($component, $marker)** &#10140; .lib/language.php on line 90,
  executes language translation of marker identifier, referring to given component;
  @param string $component
  @param string $marker

- **vd($what)** &#10140; .main.php on line 271,
  returns pre-formatted mixed variables;
  @param mixed $what

  
***  
  
**TODOS**  
  
- **? admin bar** &#10140; optional control to measure run time performance (gApis)
  
***  
  
Class MAIN  
----------  
  
  
**TODOS**  
  
- **documentation** &#10140; PHP's highlight_string/file to rapresent code excerpts
- **escort library** &#10140; session su PHP poi DB se webstore & memcache fail?
- **memcache support** &#10140; verify in method, if at least one mem-server works
- **load_libraries** &#10140; find someway to avoid conflicts between libs/plugins
  
***  
  
Class CONTROLLER  
----------------  
  
  
**CLASS CONFIGURATION CONSTANTS:**  
  
- **VISIBLE_IN_NAVIGATION** &#10140; 1
- **RENDER_BREADCRUMB** &#10140; 1
  
***  
  
Class DB  
--------  
  
  
  
***  
  
Class ESCORT  
------------  
  
  
  
***  
  
Class HTML  
----------  
  
  
  
***  
  
Class LANGUAGE  
--------------  
  
  
**TODOS**  
  
- **automatic translation** &#10140; it could be interessant to use pspell&gettext
  
***  
  
Class MD  
--------  
  
  
  
***  
  
Class NAVIGATOR  
---------------  
  
  
**TODOS**  
  
- **render_list** &#10140; this should be CSS3 and appear on a mouse gesture..
- **active breadcrumb** &#10140; dynamic same-level-select trunks, or maybe widget?
  
***  
  
Class WIDGETS  
-------------  
  
  
  
***  
  




Copyright © 2011-2012 | Das S.C.H.R.I.M.P. Project  
