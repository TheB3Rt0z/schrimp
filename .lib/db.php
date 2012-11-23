<?php

define('DB_TABLE_PREFIX', '');

class db
{
	public static $todos = array();

	const DATABASE_TYPE = "mysql";
	const SERVER_HOST = "127.0.0.1";
	const ACCOUNT_USER = "root";
	const ACCOUNT_PASSWORD = '';
	const DATABASE_NAME = "schrimp";

	function __construct()
	{
		switch (DB_DATABASE_TYPE)
		{
			case 'mysql' :
			{
				mysql_connect(SERVER_HOST,
				              ACCOUNT_USER,
				              ACCOUNT_PASSWORD);
    			mysql_select_db(DATABASE_NAME);
				break;
			}

			default :
			{
				$msg = tr('error',
                          "unknown %s database type",
				          DATABASE_TYPE);
				le($msg);
			}
		}
	}
}

?>