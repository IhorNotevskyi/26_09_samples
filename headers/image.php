<?php

$imageRout = __DIR__ . "/img/{$_GET['item']}";

$image = file_get_contents($imageRout);
$mimeType = mime_content_type($imageRout);

header("Content-Type: {$mimeType}");
echo $image;
