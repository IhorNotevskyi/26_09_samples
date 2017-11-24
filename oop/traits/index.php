<?php

require_once __DIR__ . '/DB.php';
require_once __DIR__ . '/DbConnectionTrait.php';
require_once __DIR__ . '/People.php';
require_once __DIR__ . '/Car.php';
require_once __DIR__ . '/Table.php';

$people = new People();
$car = new Car();
$table = new Table();

$people->walk();
$car->drive();
$table->doNothing();
