<?php

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'http://26-09.samples.local/headers/download.php');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$ret = curl_setopt($ch, CURLOPT_HEADER,         1);
$data = curl_exec($ch);

var_dump($data, curl_error($ch));

curl_close($ch);
