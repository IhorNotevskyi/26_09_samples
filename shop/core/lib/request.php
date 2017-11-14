<?php

/**
 * @return bool
 */
function getIsPostRequest()
{
    return $_SERVER['REQUEST_METHOD'] === 'POST';
}

/**
 * @param $url
 * @param bool $terminate
 */
function redirect($url, $terminate = true)
{
    header("Location: {$url}");
    if ($terminate) {
        exit;
    }
}