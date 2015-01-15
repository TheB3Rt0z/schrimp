<?php namespace schrimp;

require_once '.main.php'; // loading main application

$main = new main(); // loading in framework mode

file_put_contents(SET_DOCUMENTATION_MD . ".md",
                  code::get_documentation());

?>