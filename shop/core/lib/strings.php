<?php

/**
 * @param string $string
 * @return string
 */
function camelizeString($string)
{
    $result = '';
    foreach (explode('-', $string) as $part) {
        $result .= ucfirst(strtolower($part));
    }

    return $result;
}
