<?php namespace schrimp;

class documentation_helper
{
    static $todos = array();

    static $tests = array();

    function get_method_code(\ReflectionMethod $method)
    {
        return html::codeblock(code::get_method_code($method,
                                                     true));
    }
}