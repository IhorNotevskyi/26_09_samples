<?php

error_reporting(E_ALL);

echo __FILE__;
if ($_GET['redirect'] == 1) {
    header('Location: /headers/end.php');
}
