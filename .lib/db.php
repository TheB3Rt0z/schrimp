<?php

define('DB_TYPE', "mysql");
define('DB_HOST', "127.0.0.1");
define('DB_USER', "root");
define('DB_PASSWORD', '');
define('DB_DATABASE', "schrimp");
define('DB_PREFIX', '');

class db
{
	function __construct()
	{
		switch (DB_TYPE)
		{
			case 'mysql' :
			{
				mysql_connect(DB_HOST,
				              DB_USER,
				              DB_PASSWORD);
    			mysql_select_db(DB_DATABASE);
				break;
			}

			default :
			{
				$msg = language::translate('error',
                                           "unknown %s database type",
				                           DB_TYPE);
				main::relocate_to("error/500/" . urlencode($msg));
			}
		}
	}
}

?>