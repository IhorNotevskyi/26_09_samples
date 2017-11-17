<?php

error_reporting(E_ALL);

require_once __DIR__ . '/Bread.php';
require_once __DIR__ . '/Butter.php';
require_once __DIR__ . '/Cheese.php';
require_once __DIR__ . '/GollandianCheese.php';
require_once __DIR__ . '/RussianCheese.php';
require_once __DIR__ . '/Tvorog.php';
require_once __DIR__ . '/Sandwich.php';

$bread = new Bread();
$butter = new Butter();

//$cheese = new GollandianCheese();
//$cheese = new RussianCheese();
$cheese = new Tvorog();

$sandwich = new Sandwich();
$sandwich->setBread($bread);
$sandwich->setButter($butter);
$sandwich->setCheese($cheese);

$result = $sandwich->create();

var_dump($result);
