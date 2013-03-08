<?php

define('DB_TABLE_PREFIX', '');

class db
{
	public static $todos = array
	(
	    'configurations constants' => "maybe they should be in main configuration",
	);

	const _DATABASE_TYPE = "mysql";
	const _SERVER_HOST = "127.0.0.1";
	const _ACCOUNT_USER = "root";
	const _ACCOUNT_PASSWORD = '';
	const _DATABASE_NAME = "schrimp";

	function __construct()
	{
		switch (_DB_DATABASE_TYPE)
		{
			case 'mysql' :
			{
				mysql_connect(_SERVER_HOST,
				              _ACCOUNT_USER,
				              _ACCOUNT_PASSWORD);
    			mysql_select_db(_DATABASE_NAME);
				break;
			}

			default :
				return le(tr('error',
                             "unknown %s database type",
				             _DATABASE_TYPE));
		}
	}
}

?>