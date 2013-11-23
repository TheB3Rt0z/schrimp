<?php namespace schrimp;

define('_SQL_METAS_DEFINITION', "ID INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
                                 UKEY VARCHAR(32) NOT NULL,
                                 UUID VARCHAR(36) NOT NULL,
                                 date_created TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
                                 date_updated TIMESTAMP NOT NULL,
                                 schrimp_version FLOAT NOT NULL,");

define('_SQL_UNIQUES_DEFINITION', "UNIQUE
                                   (
                                       UKEY,
                                       UUID
                                   )");

define('_SQL_CREATE_INDEX', "CREATE TABLE " . _DB_DATABASE_NAME . " . "
                           . DB_TABLE_PREFIX . _DB_INDEX_TABLE . "
                             (
                                 " . _SQL_METAS_DEFINITION . "
                                 " . _SQL_UNIQUES_DEFINITION . "
                             )
                             ENGINE = " . _DB_TABLE_ENGINE);

define('_SQL_CREATE_TRAITS', "CREATE TABLE " . _DB_DATABASE_NAME . " . "
                            . DB_TABLE_PREFIX . _DB_TRAITS_TABLE . "
                              (
                                  " . _SQL_METAS_DEFINITION . "
                                  string_name VARCHAR(255) NOT NULL,
                                  string_plural VARCHAR(255) NOT NULL,
                                  " . _SQL_UNIQUES_DEFINITION . "
                              )
                              ENGINE = " . _DB_TABLE_ENGINE);

class db_object extends db
{
	static $todos = array
	(
	    'set traits on construct event' => "if given data is a values array..",
	    'index table specs' => "ID, id_traits, UKEY, date_created/updated, value?",
	    'extra table for read events' => "ID, id_powering, UKEY etc + traits list",
	    '_load output testing' => "is really boolean return working or not?",
	    '_save event performance' => "please avoid reloading 'same' object again!",
	);

    static $tests = array();

    private $_db;

    protected $_metas = array
    (
        'ID',
        'UKEY',
        'UUID',
        'date_created',
    );

    public $UUID = null;

	function __construct($identifier_or_data = null)
	{
	    if (empty($this->_db))
	    {
	        $this->_db = new parent;
	        $this->_connection = $this->_db->_connection;
	    }

	    if (!empty($identifier_or_data)
	        && !is_array($identifier_or_data))
            $this->_load($identifier_or_data);
	}

    private function _prepare_object_data($traits = array())
	{
        $data = array();

	    foreach ($traits as $key => $value)
        {
            $key = trim($key);

            $data[$key] = $key . " = " . (is_numeric($value)
                                         ? $value
                                         : "'" . addslashes($value) . "'");

            if (!in_array($key,
                          $this->_metas))
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

        $data['schrimp_version'] = "schrimp_version = " . main::get_version(3);

        return $data;
	}

	protected function _load($identifier) // works with integer ID or UKEY/UUID strings
	{
	    if (!$result = $this->_query("SELECT *
                                      FROM " . _DB_INDEX_TABLE . "
                                      WHERE " . (is_numeric($identifier)
                                                ? "ID = " . $identifier
                                                : "UKEY LIKE '" . $identifier
                                                . "' OR UUID LIKE '" . $identifier
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

    protected function _save($traits = array())
    {
        $data = $this->_prepare_object_data($traits);

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
        else
        {
            // query rescue procedure needed here
        }

        return false; // false why? some more precision please (up)
    }

    static function load($identifier) // works with integer ID or UKEY/UUID strings
    {
        $self = new self($identifier);

        foreach (get_object_vars($self) as $key => $value) // cleaning object for static usage
            if (substr($key, 0, 1) == '_')
                unset($self->$key);

        return $self;
    }

    static function save($traits = array(),
                         $identifier = null) // if null a new object will be saved
    {
        $self = new self($identifier);

        if ($object = $self->_save($traits))
            foreach (get_object_vars($object) as $key => $value) // cleaning object for static usage
                if (substr($key, 0, 1) == '_')
                    unset($object->$key);

        return $object;
    }
}