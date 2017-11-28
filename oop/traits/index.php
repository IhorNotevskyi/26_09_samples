<?php

require_once __DIR__ . '/namespaces_autoloader.php';

$people = new models\People();
$car = new models\Car();
$table = new models\Table();

$people->walk();
$car->drive();
$table->doNothing();
