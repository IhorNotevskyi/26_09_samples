<?php

error_reporting(E_ALL);

$int = 123;
$char = 'chars $int';
$string = "string \"{$char}\" \${$int}";

$sprint = sprintf('My name is %s and my age is %d', 'Dima', 28);

$concat = 'Concatenated: ' . $int . $char;

$rand = mt_rand();
$js = <<<JS
alert($rand);
JS;

echo $char, '<br>', $string, '<br>', $sprint, '<br>', $concat;
echo('<script src="aletr.js"></script>');

print "<script>{$js}</script>";
echo '<br>';
$tmp = print('test');
echo '<br>';
var_dump(1 + $tmp);


