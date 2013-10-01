<?php

define('_SQL_CREATE_INDEX', "CREATE TABLE " . _DB_DATABASE_NAME . " . "
                           . DB_TABLE_PREFIX . _DB_INDEX_TABLE . "
                             (
                                 ID INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
                                 UKEY VARCHAR(32) NOT NULL,
                                 UUID VARCHAR(36) NOT NULL,
                                 date_created TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
                                 date_updated TIMESTAMP NOT NULL,
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

	function __construct($index_or_data = null)
	{
	    if (empty($this->_db)) {
	        $this->_db = new parent;
	        $this->_connection = $this->_db->_connection;
	    }

	    if (!empty($index_or_data)
	        && !is_array($index_or_data))
            $this->_load($index_or_data);
	}

	private function _load($index) // works with integer ID or UKEY/UUID strings
	{
	    if (!$result = $this->_query("SELECT *
                                      FROM " . _DB_INDEX_TABLE . "
                                      WHERE " . (is_numeric($index)
                                                ? "ID = " . $index
                                                : "UKEY LIKE '" . $index
                                                . "' OR UUID LIKE '" . $index
                                                . "'")))
	        switch (mysqli_errno($this->_db->_connection))
            {
                case 1146 : // main table not exists, trying to create it
                {
                    if (!$this->_query(_SQL_CREATE_INDEX))
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

	private function _prepare_object_data($attributes = array())
	{
        $data = array();

	    foreach ($attributes as $key => $value)
        {
            $key = trim($key);

            $data[$key] = $key . " = " . (is_numeric($value)
                                         ? $value
                                         : "'" . addslashes($value) . "'");

            if (!in_array($key,
                          $this->_meta_attributes))
                unset($this->$key);
        }

        foreach (get_object_vars($this) as $key => $value)
            if (substr($key, 0, 1) != '_')
                $data[$key] = $key . " = " . (is_numeric($value)
                                             ? $value
                                             : (($key == "UUID" && empty($value))
                                               ? "UUID()"
                                               : "'" . addslashes($value) . "'"));

        $data['date_updated'] = "date_updated = NOW()"; // needed for any save/update/replace etc. operation

        return $data;
	}

    private function _save($attributes = array())
    {
        $data = $this->_prepare_object_data($attributes);

        if ($this->_query("REPLACE INTO " . _DB_INDEX_TABLE . "
                           SET " . implode($data, ", ")))
        {
            if ($id = mysqli_insert_id($this->_db->_connection))
                $this->_query("UPDATE " . _DB_INDEX_TABLE . "
                               SET UKEY = MD5(CONCAT(ID, UUID, date_created))
                               WHERE ID = " . $id);
            else
                $id = $this->ID;

            if ($this->_load($id))
                return $this;
        }

        return false; // false why? some more precision required here..
    }

    static function load($index) // works with integer ID or UKEY/UUID strings
    {
        $self = new self($index);

        foreach (get_object_vars($self) as $key => $value) // cleaning object for static usage
            if (substr($key, 0, 1) == '_')
                unset($self->$key);

        return $self;
    }

    static function save($attributes = array(),
                         $index = null) // if null a new object will be saved
    {
        $self = new self($index);

        $object = $self->_save($attributes);

        foreach (get_object_vars($object) as $key => $value) // cleaning object for static usage
            if (substr($key, 0, 1) == '_')
                unset($object->$key);

        return $object;
    }
}

?>