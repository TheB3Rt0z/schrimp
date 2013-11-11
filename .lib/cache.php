<?php namespace schrimp;

class cache
{
	static $todos = array
	(
	    'memcache support' => "verify in method, if at least one mem-server works",
	);

    static $tests = array();

    static function is_webstoraged() {} // local and/or session storage are available? only with js..

    static function is_apced()
    {
        return extension_loaded('apc'); // http://linuxaria.com/howto/everything-you-need-to-know-about-apc-alternate-php-cache?lang=it & http://uk.php.net/manual/en/apc.configuration.php
    }

    static function is_memcached()
    {
        return extension_loaded('memcache'); // ok, but check it please..
    }

    static function is_varnished() {}// just a placeholder..
}