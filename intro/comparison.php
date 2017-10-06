<?php

var_dump(1 == 2);
echo '<br>';

$x = true;
if ($x == 1) {
    echo 1;
}
if ($x == 2) {
    echo 2;
}
if ($x == 3) {
    echo 3;
}
echo '<br>';

var_dump(true === 1);
echo '<br>';

$t1 = 1;
$t2 = 1;
var_dump($t1 === $t2);
echo '<br>';

var_dump(1 < true || 1 === 1);
var_dump(1 < true && 1 === 1);
