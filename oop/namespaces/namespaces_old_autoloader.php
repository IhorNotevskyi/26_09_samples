<?php

function __autoload($className)
{
    $ds = DIRECTORY_SEPARATOR;

    $file = __DIR__ . $ds . str_replace('\\', $ds, $className) . '.php';
    if (!file_exists($file)) {
        die("Class {$className} can not be loaded");
    }

    require_once $file;
}
