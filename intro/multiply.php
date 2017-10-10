<?php

$min = 1;
$max = 10;

for ($col = $min; $col <= $max; $col++) {
    for ($row = $min; $row <= $max; $row++) {
        $sum = $col * $row;
        echo "{$col} x {$row} = {$sum}<br>";
    }
    echo '<br>';
}
