<?php

/**
 * @return bool
 */
function getIsPost()
{
    return $_SERVER['REQUEST_METHOD'] === 'POST';
}
