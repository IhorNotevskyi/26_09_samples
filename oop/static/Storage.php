<?php

class Storage
{
    /**
     * @var array
     */
    private static $storage = [];

    public static function set($key, $value)
    {
        self::$storage[$key] = $value;
    }

    public static function get($key = null, $default = null)
    {
        if (empty($key)) {
            return self::$storage;
        }
        return array_key_exists($key, self::$storage) ? self::$storage[$key] : $default;
    }
}