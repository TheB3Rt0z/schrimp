<?php

class db_object extends db
{
	static $todos = array();

    static $tests = array();

	function __construct($identifier = false) // works with ID or UKEY
	{
	    if (!empty($identifier))
        {
            $db = new parent;

            if (!$result = $db->_query("SELECT *
                                        FROM " . DB_TABLE_PREFIX . _DB_INDEX_TABLE . "
                                        WHERE " . (is_int($identifier)
                                                  ? "ID = " . $identifier
                                                  : 'UKEY' . " LIKE '" . $identifier . "'")))
                switch (mysqli_errno($db->_connection))
                {
                    case 1146 : // main table not exists, trying to create it
                    {
                        if (!$db->_query("CREATE TABLE " . _DB_DATABASE_NAME . " . " . DB_TABLE_PREFIX . _DB_INDEX_TABLE . "
                                          (
                                              ID INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
                                              UKEY VARCHAR(32) NOT NULL,
                                              UUID VARCHAR(36) NOT NULL DEFAULT 'UUID()',
                                              date_created TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
                                              UNIQUE
                                              (
                                                  UKEY,
                                                  UUID
                                              )
                                          )
                                          ENGINE = " . _DB_TABLE_ENGINE))
                            return le(tr('error',
                                         "unable to create main table"));

                        break;
                    }
                }
            else
                foreach (get_object_vars($result) as $key => $value)
                    if (substr($key, 0, 1) != '_')
                        $this->$key = $value;

            $this->_connection = $db->_connection;
        }
	}

	static function load($identifier)
	{
	    return new self($identifier);
	}

    function save() {} // automatic insert/replace thing
}

?>