**_set_configuration($conf_name)** (Pri, Len: 20/27 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 1 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
  
        $user_file = "." . $conf_name;
        $base_file = $user_file . ".tmp";

        eval("\$base_conf = array(" . file_get_contents($base_file) . ");");
        eval("\$user_conf = array(" . file_get_contents($user_file) . ");");

        $configuration = $user_conf + $base_conf;

        foreach ($configuration as $key => $value)
            define(strtoupper($key), (is_array($value)
                                     ? serialize($value)
                                     : $value));

        define('_SET_TRANSPORT_PROTOCOL', "http" . (getenv('HTTPS') == 'on'
                                                  ? "s"
                                                  : '')); // auto-detecting

        define('_SET_HOME_COMPONENT', _SET_DEVELOPMENT_MODE
                                     ? "admin"
                                     : "homepage"); // convention

        define('MAX_CYCLOMATIC_COMPLEXITY', SET_COMPLEXITY_INDEX); // base complexity index
        define('MAX_METHODS_COMPLEXITY', SET_COMPLEXITY_INDEX * 3); // ATM 36 max code lines
        define('MAX_BLOCK_COMPLEXITY', SET_COMPLEXITY_INDEX * 7); // ATM 84 max code line length
        define('MAX_PARAMETERS_COMPLEXITY', SET_COMPLEXITY_INDEX / 2); // if more than 6 ATM..

        define('_MAX_CLASS_COMPLEXITY', pow(MAX_BLOCK_COMPLEXITY, 2)); // ATM not used (private optional)
