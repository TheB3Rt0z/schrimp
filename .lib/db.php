<?php

define('DB_DATABASE_TYPE', "mysql");
define('DB_SERVER_HOST', "127.0.0.1");
define('DB_ACCOUNT_USER', "root");
define('DB_ACCOUNT_PASSWORD', '');
define('DB_DATABASE_NAME', "schrimp");
define('DB_TABLE_PREFIX', '');

class db
{
	function __construct()
	{
		switch (DB_DATABASE_TYPE)
		{
			case 'mysql' :
			{
				mysql_connect(DB_SERVER_HOST,
				              DB_ACCOUNT_USER,
				              DB_ACCOUNT_PASSWORD);
    			mysql_select_db(DB_DATABASE_NAME);
				break;
			}

			default :
			{
				$msg = tr('error',
                          "unknown %s database type",
				          DB_DATABASE_TYPE);
				main::launch_error($msg);
			}
		}
	}
}

?>