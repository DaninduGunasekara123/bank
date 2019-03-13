<?php

$server = 'localhost';
$user = '';
$password = '';
$db = 'bmw_bank';

$con = mysqli_connect($server, $user, $password, $db);

if (!$con) {

    die('Could not connect');
}

?>
