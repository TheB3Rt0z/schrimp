<?php

define('SET_DEVELOPMENT_MODE', true);
define('SET_GITHUB_RAWPATH', "https://raw.github.com/TheB3Rt0z/schrimp/master/");
define('SET_HOME_COMPONENT', SET_DEVELOPMENT_MODE ? "admin" : "homepage");
define('SET_LOCAL_PATH', "/schrimp");
define('SET_OUTPUT_COMPRESSION', !SET_DEVELOPMENT_MODE);
define('SET_TRANSPORT_PROTOCOL', "http" . (getenv('HTTPS') == 'on' ? "s" : ''));

define('MAX_CYCLOMATIC_COMPLEXITY', 12);
define('MAX_METHODS_COMPLEXITY', MAX_CYCLOMATIC_COMPLEXITY * 3);
define('MAX_BLOCK_COMPLEXITY', MAX_CYCLOMATIC_COMPLEXITY * 7);

define('STR_KERNEL_SALT', "Sstm Cntrl Hdng_t_ Rw Incrs_f Mntl Prdctvt");

define('STR_PROJECT_NAME', "Das "
		                 . implode(array_map(function($value)
                                             {
                                                 return substr($value, 0, 1) . ".";
                                             },
                                             explode(" ", STR_KERNEL_SALT))));

define('STR_COPYRIGHT_SIGNATURE', "Copyright © 2011-" . date('Y') . " | "
		                        . STR_PROJECT_NAME . " Project");

?>