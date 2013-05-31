**__construct()** (CPub, Len: 17/19 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
  
		switch (self::_DB_DATABASE_TYPE)
		{
			case 'mysql' :
			{
				mysql_connect(self::_SERVER_HOST,
				              self::_ACCOUNT_USER,
				              self::_ACCOUNT_PASSWORD);
    			mysql_select_db(self::_DATABASE_NAME);
				break;
			}

			default :
				return le(tr('error',
                             "unknown %s database type",
				             self::_DATABASE_TYPE));
		}

		escort::register_object($this,
		                        self::_DB_DATABASE_TYPE);
