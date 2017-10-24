<?php

$file = __DIR__ . '/test-file.txt';

//$wholeFile = file_get_contents($file);
//echo($wholeFile);

//$resource = fopen($file, 'r');
//while (!feof($resource)) {
//    echo fread($resource, 8192);
//}
//
//fclose($resource);
//
//var_dump(file($file));

$resource = fopen($file, 'a');

var_dump(fwrite($resource, mt_rand() . PHP_EOL));

fclose($resource);
