<?php
 /**
 * Myproject
 *
 * @category  Myproject
 * @package   Myproject_${MODULE_NAME}
 * @author    Andrii Khovaiev <ankho@smile.fr>
 * @copyright 2014 Smile
 */
final class App {

}
class Registry {
    private static $instance;
    private $values = array();
    private function __construct() {}

    static function instance()
    {
        if (!isset(self::$instance)) {
            self::$instance = new self();
        }
        return self::$instance;
    }
    function get($key)
    {
        if(isset($this->values[$key])) {
            return $this->values[$key];
        }
        return null;
    }

    function set($key, $value)
    {
        $this->values[$key] = $value;
    }
}
class Request {}