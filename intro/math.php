<?php

var_dump((3 + 4) / 2 * 3);
echo '<br>';

$t1 = 3;
$t1 = $t1 + 3;
$t1 += 3;
$t1 /= 3;

var_dump($t1);
echo '<br>';

$t1 = +5;
$t1 = -4;

var_dump($t1);
echo '<br>';

$t1++;
$t1--;
--$t1;
++$t1;
var_dump($t1);
echo '<br>';

$t2 = 2;
$t3 = 3;
var_dump($t2 + $t3++);
echo '<br>';

$s2 = 2;
$s3 = 3;
var_dump($s2++ + ++$s3);
