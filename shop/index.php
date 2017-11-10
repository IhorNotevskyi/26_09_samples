<?php

error_reporting(E_ALL);

$config = require_once __DIR__ . '/config.php';

require_once __DIR__ . '/core/lib/arrays.php';
require_once __DIR__ . '/core/lib/strings.php';
require_once __DIR__ . '/core/lib/template.php';

require_once __DIR__ . '/core/router.php';

echo run();
