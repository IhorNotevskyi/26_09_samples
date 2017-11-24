<?php

error_reporting(E_ALL);

require_once __DIR__ . '/Computer.php';
require_once __DIR__ . '/PC.php';
require_once __DIR__ . '/Notebook.php';

$notebook = new Notebook();
$pc = new PC();

var_dump($notebook->turnOn(), $pc->turnOn());
