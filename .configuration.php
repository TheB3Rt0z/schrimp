<?php

define('SET_DEVELOPMENT_MODE', true);
define('SET_GITHUB_RAWPATH', "https://raw.github.com/TheB3Rt0z/schrimp/master/"); // prefix valid for static contents on github
define('SET_HOME_COMPONENT', SET_DEVELOPMENT_MODE ? "admin" : "homepage"); // convention
define('SET_LOCAL_PATH', "/schrimp"); // '' if server root is used (worth as base-path)
define('SET_OUTPUT_COMPRESSION', !SET_DEVELOPMENT_MODE); // set output flatting on html final rendering
define('SET_TRANSPORT_PROTOCOL', "http" . (getenv('HTTPS') == 'on' ? "s" : '')); // auto

define('MAX_CYCLOMATIC_COMPLEXITY', 12); // base complexity index
define('MAX_METHODS_COMPLEXITY', MAX_CYCLOMATIC_COMPLEXITY * 3); // ATM 36 max code lines
define('MAX_BLOCK_COMPLEXITY', MAX_CYCLOMATIC_COMPLEXITY * 7); // ATM 84 max code line length

define('STR_KERNEL_SALT', "Sstm Cntrl Hdng_t_ Rw Incrs_f Mntl Prdctvt");

define('STR_PROJECT_NAME', "Das "
		                 . implode(array_map(function($value)
                                             {
                                                 return substr($value, 0, 1) . ".";
                                             },
                                             explode(" ", STR_KERNEL_SALT)))); // 8-3 Aurelian

define('STR_COPYRIGHT_SIGNATURE', "Copyright © 2011-" . date('Y') . " | "
		                        . STR_PROJECT_NAME . " Project");

?>