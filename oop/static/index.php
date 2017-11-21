<?php

require_once __DIR__ . '/Storage.php';
require_once __DIR__ . '/User.php';
require_once __DIR__ . '/Hello.php';

Storage::set('name', 'Dmytro');
Storage::set('age', 28);

$user = new User();
Storage::set('user', $user);

var_dump(Storage::get());

new Hello();
