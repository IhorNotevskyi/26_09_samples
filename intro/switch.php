<?php

$t = 5;
if ($t == 1) {
    echo 1;
} elseif ($t == 2) {
    echo 2;
} elseif ($t == 3) {
    echo 3;
} else {
    echo 'undefined';
}

echo '<br>';

$t = 2;
switch ($t) {
    case 1:
        echo 1;
        break;
    case 2:
        echo 2;
        break;
    case 3:
        echo 3;
        break;
    default:
        echo 4;
}
