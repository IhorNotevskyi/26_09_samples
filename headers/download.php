<?php

$file = __DIR__ . '/files/books_export.pdf';

$mimeType = mime_content_type($file);
$content = file_get_contents($file);

header('Content-Description: File Transfer');
header('Content-Disposition: attachment; filename="'.basename($file).'"');
header("Content-Type: {$mimeType}");
header('Expires: 0');
header('Cache-Control: must-revalidate');
header('Pragma: public');
header('Content-Length: ' . filesize($file));

echo $content;
