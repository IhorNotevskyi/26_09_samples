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

$cheese2 = new GollandianCheese();
$sandwich2 = clone $sandwich;
$sandwich2->setCheese($cheese2);


$result = $sandwich->create();
$result2 = $sandwich2->create();

var_dump($sandwich->create(), $sandwich2->create());
