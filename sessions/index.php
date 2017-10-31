<?php

session_start();

if ($_POST['email']) {
    $_SESSION['formData'] = $_POST;

    header('Location: /sessions');
    exit;
}

$data = array_key_exists('formData', $_SESSION) ? $_SESSION['formData'] : [];

?>

<form method="post">
    <input name="email" type="email" value="<?= $data ? $data['email'] : '' ?>">
    <input name="phone" type="tel" value="<?= $data ? $data['phone'] : '' ?>">
    <input type="submit" value="Submit">
</form>