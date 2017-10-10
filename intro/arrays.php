<?php

$v1 = array(1, 3, 4, 5 => 123);
var_dump($v1);

$v2 = array(
    'q' => 2,
    'hj' => 3,
    'правв' => 123,
    '$t5%```<>' => 333
);
var_dump($v2);

$config = [
    'placeholders' => [
        'enter' => 'Введите сюда',
        123,
        'test' => '12w3e',
        'test' => 'teststsstt',
        333333
    ],
    'some' => [
        'any' => 'thing'
    ]
];
var_dump($config);

$config['placeholders']['enter'] = [
    $config['placeholders']['enter'],
    123123
];
var_dump($config['placeholders']['enter'][0]);
print_r($config);

$array = ['test' => 1, 'test2' => 3, 'test3' => 23, 'test4' => 11];
var_dump($array);
sort($array);
var_dump($array);

$array2 = ['test2' => 3, 'test' => 1, 'test4' => 11, 'test3' => 23];
var_dump($array2);
ksort($array2);
var_dump($array2);

$array3 = [1, 3, 4, 3, 1, 4];
var_dump(array_unique($array3));

$t = 1;
$t2 = 2;
$t3 = 3;

var_dump(compact($t, $t2, $t3));

var_dump(array_merge($array, $array2, $array3, $config));
var_dump($array + $array2 + $array3 + $config);

var_dump($_SERVER);

?>

<input placeholder="<?= "{$config['placeholders']['enter'][0]} ({$config['some']['any']})" ?>">
<input placeholder="<?= $config['some']['any'] ?>">
