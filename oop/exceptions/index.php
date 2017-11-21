<?php

require_once __DIR__ . '/ApiException.php';
require_once __DIR__ . '/Api.php';

try {
    $api = new Api();
    $api->getRecords();
} catch (ApiException $exception) {
    var_dump($exception);
} catch (Exception $exception) {
    var_dump('Exception: ' . $exception->getMessage());
} finally {
    echo 'Finally OK';
}

echo '.....';


