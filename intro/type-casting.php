<?php

$string = '3 string 2';
$int = 12;
$float = 33.54;
$array = [];
$null = null;

var_dump(3.3 + 4 + ' 34 test5 ');
echo '<br>';
var_dump('test' + 33);
echo '<br>';

$x = 8 - 6.4;  // which is equal to 1.6
$y = 1.6;
var_dump($x == $y);
echo '<br>';

var_dump(gettype($string), gettype($int), gettype($float));
echo '<br>';

var_dump(is_array($string), is_string($string), is_int($string));
echo '<br>';

var_dump(isset($test), isset($x), isset($null));
echo '<br>';
var_dump(empty($null), empty($test), empty($x));
