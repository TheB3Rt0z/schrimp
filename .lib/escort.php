<?php

class escort
{
	public static $todos = array();

	private static $_register = array();

	static function register_object($object,
	                                $identifier)
	{
        self::$_register[get_class($object)][$identifier][] = serialize($object);
	}

	static function get_object($class,
	                           $identifier,
	                           $pos)
	{
	    return unserialize(self::$_register[$class][$identifier][$pos]);
	}

	static function get_objects($class = null,
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
}

?>