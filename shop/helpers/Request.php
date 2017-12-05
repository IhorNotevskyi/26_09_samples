<?php

namespace helpers;

/**
 * Class Request
 * @package helpers
 */
class Request
{
    /**
     * @param string $url
     * @return string
     */
    public static function clearUrl($url)
    {
        $url = trim(urldecode($url), " \t\n\r\0\x0B/");
        $getParamsStart = strpos($url, '?');
        if (false !== $getParamsStart) {
            $url = substr($url, 0, $getParamsStart);
        }

        return $url;
    }

    /**
     * @param null|string $key
     * @param null|mixed $default
     * @return array|mixed|null
     */
    public static function get($key = null, $default = null)
    {
        return $key ? Arrays::getValue($key, $_GET, $default) : $_GET;
    }
}
