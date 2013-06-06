<?php

define('DB_TABLE_PREFIX', '');

$_db_connection_settings = unserialize(_DB_CONNECTION_SETTINGS); // data from configuration

define('_DB_DATABASE_TYPE', $_db_connection_settings['database_type']);
define('_DB_SERVER_HOST', $_db_connection_settings['server_host']);
define('_DB_ACCOUNT_USER', $_db_connection_settings['account_user']);
define('_DB_ACCOUNT_PASSWORD', $_db_connection_settings['account_password']);
define('_DB_DATABASE_NAME', $_db_connection_settings['database_name']);

class db
{
	public static $todos = array();

    public static $tests = array();

    private $_db = null;

	function __construct()
	{
		switch (_DB_DATABASE_TYPE)
		{
			case 'mysql' :
			{
				$this->_db = mysqli_connect(_DB_SERVER_HOST,
				                            _DB_ACCOUNT_USER,
				                            _DB_ACCOUNT_PASSWORD,
				                            _DB_DATABASE_NAME);
				break;
			}

			default :
				return le(tr('error',
                             "unknown %s database type",
				             _DB_DATABASE_TYPE));
		}

		escort::register_object($this,
		                        _DB_DATABASE_TYPE);
	}
}

?>