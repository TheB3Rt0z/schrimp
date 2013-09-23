<?php

define('DB_TABLE_PREFIX', '');

$_db_connection_settings = unserialize(_DB_CONNECTION_SETTINGS); // data from configuration

define('_DB_DATABASE_TYPE', $_db_connection_settings['database_type']);
define('_DB_SERVER_HOST', $_db_connection_settings['server_host']);
define('_DB_ACCOUNT_USER', $_db_connection_settings['account_user']);
define('_DB_ACCOUNT_PASSWORD', $_db_connection_settings['account_password']);
define('_DB_DATABASE_NAME', $_db_connection_settings['database_name']);

define('_DB_INDEX_TABLE', "_index");
define('_DB_TABLE_ENGINE', "MYISAM");

class db
{
	public static $todos = array
	(
	    'check table engines' => "fix engine standard for (all?) database tables",
	);

    public static $tests = array();

    protected $_connection = null;

	function __construct()
	{
		switch (_DB_DATABASE_TYPE)
		{
			case 'mysql' :
			{
				if (!$this->_connection = @mysqli_connect(_DB_SERVER_HOST,
				                                          _DB_ACCOUNT_USER,
				                                          _DB_ACCOUNT_PASSWORD,
				                                          _DB_DATABASE_NAME))
				{
				    switch (mysqli_connect_errno())
			        {
			            case 1049 : // database unknown, trying to create it..
			            {
			                if ($this->_connection = @mysqli_connect(_DB_SERVER_HOST,
				                                                     _DB_ACCOUNT_USER,
				                                                     _DB_ACCOUNT_PASSWORD))
			                {
			                    if ($this->_query("CREATE DATABASE " . _DB_DATABASE_NAME))
			                        $this->_query("USE " . _DB_DATABASE_NAME);
			                    else
                                    return le(tr('error',
                                                 "unable to create database %s",
                                                 _DB_DATABASE_NAME));
			                }
			                else
                                return le(tr('error',
                                             "database server not available"));

			                break;
			            }

			            default :
			                return le(tr('error',
                                         "connection to database not possible"));
			        }
				}

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

	private function _process_mysql_result(mysqli_result $result)
	{
	    if (empty($result->num_rows))
            return false;
        elseif ($result->num_rows == 1)
            return $result->fetch_object('db_object'); // normally stdClass type object
        else
        {
            $results = array();

            while ($row = $result-fetch_object('db_object'))
                $results[] = $row;

            return $results; // numeric array of stdClass objects (if no class specified)
        }
	}

	protected function _query($query,
	                          $type = '') // default is SQL language (native)
	{
	    switch ($type)
	    {
	        default :
	            switch (_DB_DATABASE_TYPE)
        		{
        			case 'mysql' :
        			{
        			    $result = mysqli_query($this->_connection,
        			                           $query);

        		        if (is_object($result))
                            return $this->_process_mysql_result($result);
                		else
                		    return $result; // true on success without output, false on any other error

                		break; // added only for completion, ATM never reached
        			}

        			default :
        				return le(tr('error',
                                     "unknown %s database type",
        				             _DB_DATABASE_TYPE));
        		}
	    }
	}
}

?>