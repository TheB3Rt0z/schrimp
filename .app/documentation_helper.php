<?php

class documentation_helper
{
    static $todos = array();

    function get_method_code(reflectionMethod $method)
    {
        return html::codeblock(code::get_method_code($method,
                                                     true));
    }
}

?>