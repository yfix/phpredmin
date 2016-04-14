<?php
final class app
{
    protected static $_instance = null;

    protected $_data = array();

    protected function __construct()
    {
		global $app_path, $config;
		if (!$config) {
			$config_path_default = $app_path.'/config/config.php';
			if (file_exists($config_path_default)) {
				$config_path = $config_path_default;
			}
			$config = include_once $config_path;
		}
        $this->_data['config']  = $config;
        $this->_data['drivers'] = __DIR__.'/drivers/';
    }

    public static function instance()
    {
        if (!self::$_instance) {
            self::$_instance = new self;
        }

        return self::$_instance;
    }

    public function __get($key)
    {
        return isset($this->_data[$key]) ? $this->_data[$key] : null;
    }
    
    public function __set($key, $value)
    {
        $this->_data[$key] = $value;
    }
}
