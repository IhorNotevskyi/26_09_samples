<?php

define('TEST', 1, true);
defined('test') || define('test', 2);

var_dump(TEST, test);

var_dump(__LINE__);
var_dump(__FILE__);
var_dump(__DIR__);
