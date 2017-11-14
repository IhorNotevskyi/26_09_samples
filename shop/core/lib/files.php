<?php

/**
 * @param string $dir
 * @return array
 */
function getFilesList($dir)
{
    $files = scandir($dir);
    return array_filter($files, function ($item) {
        return !in_array($item, ['.', '..']);
    });
}
