<?php

define('_SQL_CREATE_INDEX', "CREATE TABLE " . _DB_DATABASE_NAME . " . "
                           . DB_TABLE_PREFIX . _DB_INDEX_TABLE . "
                             (
                                 ID INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
                                 UKEY VARCHAR(32) NOT NULL,
                                 UUID VARCHAR(36) NOT NULL,
                                 date_created TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
                                 UNIQUE
                                 (
                                     UKEY,
                                     UUID
                                 )
                             )
                             ENGINE = " . _DB_TABLE_ENGINE);

class db_object extends db
{
	static $todos = array
	(
	    'set attributes on construct event' => "if given data is a values array..",
	    '_load output testing' => "is really boolean return working or not?",
	    '_save event performance' => "please avoid reloading 'same' object again!",
	);

    static $tests = array();

    private $_db;

    protected $_meta_attributes = array
    (
        'ID',
        'UKEY',
        'UUID',
        'date_created',
    );

    public $UUID = null;

	function __construct($identifier_or_data = false)
	{
	    $this->_db = new parent;

	    if (!empty($identifier_or_data)
	        && !is_array($identifier_or_data))
            $this->_load($identifier_or_data);
	}

	private function _load($identifier) // works with integer ID or UKEY/UUID strings
	{
	    if (empty($this->_db))
	        $this->_db = new parent;

	    if (!$result = $this->_db->_query("SELECT *
                                   FROM " . _DB_INDEX_TABLE . "
                                   WHERE " . (is_int($identifier)
                                             ? "ID = " . $identifier
                                             : "UKEY LIKE '" . $identifier
                                             . "' OR UUID LIKE '" . $identifier
                                             . "'")))
	        switch (mysqli_errno($this->_db->_connection))
            {
                case 1146 : // main table not exists, trying to create it
                {
                    if (!$this->_db->_query(_SQL_CREATE_INDEX))
                        return le(tr('error',
                                     "unable to create main table"));

                    break;
                }
            }
        else
        {
            foreach (get_object_vars($result) as $key => $value)
                if (substr($key, 0, 1) != '_')
                    $this->$key = $value;

            return true; // to be tested..
        }

        return false; // is this needed, check with break here up..
	}

    private function _save($attributes = array())
    {
        if (!empty($attributes))
            foreach ($attributes as $key => $value)
            {
                $data[] = trim($key) . " = " . (is_numeric($value)
                                               ? $value
                                               : "'" . addslashes($value) . "'");

                if (!in_array($key,
                              $this->_meta_attributes))
                    unset($this->$key);
            }

        foreach (get_object_vars($this) as $key => $value)
            if (substr($key, 0, 1) != '_')
                $data[] = $key . " = " . (is_numeric($value)
                                         ? $value
                                         : (($key == "UUID" && empty($value))
                                           ? "UUID()"
                                           : "'" . addslashes($value) . "'"));

        $this->_db->_query("REPLACE INTO " . _DB_INDEX_TABLE . "
                            SET " . implode($data, ", "));

        if ($id = mysqli_insert_id($this->_db->_connection))
            $this->_db->_query("UPDATE " . _DB_INDEX_TABLE . "
                                SET UKEY = MD5(CONCAT(ID, UUID, date_created))
                                WHERE ID = " . $id);
        else
            $id = $this->ID;

        if ($this->_load($id))
            return $id;
        else
            return false; // false why? some more precision required here..
    }

    static function load($identifier) // works with integer ID or UKEY/UUID strings
    {
        return new self($identifier);
    }

    static function save($attributes = array())
    {
        $self = new self;

        return $self->_save($attributes);
    }
}

?>