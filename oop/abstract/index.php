<?php

error_reporting(E_ALL);

require_once __DIR__ . '/Computer.php';
require_once __DIR__ . '/TouchableInterface.php';
require_once __DIR__ . '/PortableInterface.php';
require_once __DIR__ . '/PC.php';
require_once __DIR__ . '/Notebook.php';
require_once __DIR__ . '/Tablet.php';

$notebook = new Notebook();
$pc = new PC();
$tablet = new Tablet();


function test(TouchableInterface $device)
{
    var_dump($device->touchTheScreen(7, 88));
}

function test2(Computer $computer)
{
    var_dump($computer->turnOn());
}

test($tablet);
test2($tablet);

var_dump(
    $notebook->turnOn(),
    $pc->turnOn(),
    $tablet->turnOn(),
    $tablet->pickUp(),
    $tablet->putDown(),
    PortableInterface::MAX_WEIGHT,
    Computer::VOLUME
);

var_dump($notebook->calculate(3, 3));
