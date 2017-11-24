<?php

require_once __DIR__ . '/Test.php';

$test = new Test();

$test->string = '123123';
$test->qwerty = 'test';
$test->master = 'Slave';

var_dump(
    $test,
    $test->master,
    $test->qwerty,
    $test->string,
    $test->getMaster(),
    $test->getQwerty()
);

echo $test;
