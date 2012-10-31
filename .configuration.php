<?php

define('PROTOCOL', "http" . (getenv('HTTPS') == 'on' ? "s" : ''));

$kern_idea = array
(
    'System',
    'Control',
    'Heading_to_a',
    'Raw',
    'Increase_of',
    'Mental',
    'Productivity',
);

define('PATH', "/" . strtolower(implode(array_map(function($value)
                                                  {
                                                      return substr($value, 0, 1);
                                                  },
                                                  $kern_idea))));

define('PROJECT', "Das " . implode(array_map(function($value)
                                             {
                                                 return substr($value, 0, 1) . ".";
                                             },
                                             $kern_idea)));

define('HOME_COMPONENT', "homepage");

define('COMPLEXITY_INDEX', 12);

define('OUTPUT_COMPRESSION', true);

?>