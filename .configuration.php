<?php

define('DEVELOPMENT_MODE', true);

define('SALT', "System Control Heading_to_a Raw Increase_of Mental Productivity");

define('PROTOCOL', "http" . (getenv('HTTPS') == 'on' ? "s" : '')); // auto

define('PATH', "/schrimp"); // '' if server root is used (worth as base-path)

define('PROJECT', "Das " . implode(array_map(function($value)
                                             {
                                                 return substr($value, 0, 1) . ".";
                                             },
                                             explode(" ", SALT)))); // E-3

define('HOME_COMPONENT', DEVELOPMENT_MODE ? "admin" : "homepage"); // convention

define('CYCLOMATIC_COMPLEXITY', 12); // base complexity index
define('METHODS_COMPLEXITY', CYCLOMATIC_COMPLEXITY * 3); // ATM 36 max code lines
define('BLOCK_COMPLEXITY', CYCLOMATIC_COMPLEXITY * 7); // ATM 84 max code line length

define('OUTPUT_COMPRESSION', true); // set output flatting on html finale rendering

?>