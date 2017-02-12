<?php

require_once('../srvr/account.php');
require_once('../srvr/dbManager.php');

$con = dbManager::createConnection();
$username = mysqli_real_escape_string($con,$_POST["username"]);
$password = mysqli_real_escape_string($con,$_POST["password"]);
dbManager::closeConnection($con);

account::signIn($username, $password);

?>
