<?php

$username = $_POST["username"];
$password = $_POST["password"];

require 'databaseConnect.php';

$result = mysqli_query($connection, "INSERT INTO scorer(scrrName, scrrPassword) VALUES ('".$username."','".$password."')");

require 'databaseClose.php';
?>
