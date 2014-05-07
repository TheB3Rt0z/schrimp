<?php namespace schrimp;

if (!session_id())
    session_start(); // requires write rights on server's tmp (sub-)directory..

class escort
{
    static $todos = array();

    static $tests = array
    (
        'empty_get_object' => array
        (
            'method' => 'get_object',
            'parameters' => array
            (
                'class' => '',
                'identifier' => '',
                'pos' => '',
            ),
            'error' => "no error should be returned, only null",
        ),
    );

    private static $_register = array();

    private static function get_objects($class = null,
                                        $identifier = null)
    {
        $objects = self::$_register; // fallback

        if (!empty($class))
            if (!empty($objects[$class]))
            {
                $objects = $objects[$class];
                if (!empty($identifier)
                    && !empty($objects[$identifier]))
                    $objects = $objects[$identifier];
            }

        array_walk_recursive($objects, function(&$value)
        {
            $value = unserialize($value);
        });

        return $objects;
    }

    static function register_object($object,
                                    $identifier)
    {
        self::$_register[get_class($object)][$identifier][] = serialize($object);
    }

    static function get_object($class,
                               $identifier,
                               $pos)
    {
        if (!empty(self::$_register[$class][$identifier][$pos]))
            return unserialize(self::$_register[$class][$identifier][$pos]);
        elseif (!empty(self::$_register[$class][$identifier]))
            return unserialize(self::$_register[$class][$identifier]);
        elseif (!empty(self::$_register[$class]))
            return unserialize(self::$_register[$class]);
        else
            return null;
    }
}