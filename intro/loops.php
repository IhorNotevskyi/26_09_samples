<?php

for ($i = 0; $i <= 10; $i++) {
    if (in_array($i, [3, 5, 7])) {
        continue;
    }

    var_dump($i);

    if ($i == 8) {
        break;
    }
}

echo PHP_EOL;

$array = [1, 5, 6, 8];
for ($i = 0; $i < count($array); $i++) {
    var_dump($array[$i]);
}

echo PHP_EOL;

$i = 0;
while ($i < 5) {
    var_dump($i);
    $i++;
}

echo PHP_EOL;

$i = 0;
do {
    var_dump($i);
    $i++;
} while ($i < 0);

echo PHP_EOL;

$array = ['test' => 123, 'qwerty' => 321];
foreach ($array as $key => &$value) {
    $value += 10;
    var_dump("{$key} >>> {$value}");
}
var_dump($array);
