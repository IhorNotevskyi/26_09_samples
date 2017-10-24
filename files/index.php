<?php

error_reporting(E_ALL);

require_once __DIR__ . '/lib/request.php';
require_once __DIR__ . '/lib/files.php';

$mimeTypes = ['image/png', 'image/jpg', 'image/jpeg', 'image/gif'];
$storage = __DIR__ . '/storage/';

if (getIsPost() && !uploadFile($_FILES['upload'], $storage, $mimeTypes)) {
    echo 'File can not be uploaded<br>';
}

?>

<form method="post" enctype="multipart/form-data">
    <input type="file" name="upload">
    <input type="submit" value="Upload">
</form>
