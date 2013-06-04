<?php

define('DB_TABLE_PREFIX', '');

class db
{
	public static $todos = array
	(
	    'connection constants' => "they should be an array in main configuration" // to be unserialized before use?
	);

    public static $tests = array();

	const _DATABASE_TYPE = "mysql";
	const _SERVER_HOST = "127.0.0.1";
	const _ACCOUNT_USER = "root";
	const _ACCOUNT_PASSWORD = '';
	const _DATABASE_NAME = "schrimp";

	function __construct()
	{
		switch (self::_DB_DATABASE_TYPE)
		{
			case 'mysql' :
			{
				mysql_connect(self::_SERVER_HOST,
				              self::_ACCOUNT_USER,
				              self::_ACCOUNT_PASSWORD);
    			mysql_select_db(self::_DATABASE_NAME);
				break;
			}

			default :
				return le(tr('error',
                             "unknown %s database type",
				             self::_DATABASE_TYPE));
		}

		escort::register_object($this,
		                        self::_DB_DATABASE_TYPE);
	}
}

?>