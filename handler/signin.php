<?php

require_once('../srvr/account.php');

$username = $_POST["username"];
$password = $_POST["password"];

account::signIn($username, $password);

?>
