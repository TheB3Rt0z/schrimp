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
  
Available components:  
---------------------  
  
**ADMIN (FRI, 23 NOV 2012 09:45:30 +0000)**  
  
**CONTROL (THU, 07 MAR 2013 12:37:45 +0000)**  
  
**DOCUMENTATION (THU, 29 NOV 2012 16:22:52 +0000)**  
  
**ERROR (FRI, 01 MAR 2013 16:01:13 +0000)**  
  
**HOMEPAGE (MON, 03 DEC 2012 14:02:33 +0000)**  
  
**POWER (FRI, 23 NOV 2012 16:39:58 +0000)**  
  
  
  
***  
  




Copyright © 2011-2013 | Das S.C.H.R.I.M.P. Project  
