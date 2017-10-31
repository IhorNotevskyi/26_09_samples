<?php

ob_start();
echo 'cookie' . mt_rand();
$content = ob_get_clean();

setcookie('test', $content);
