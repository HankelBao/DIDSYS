<?php
require('scorer.php');

$username = $_POST["username"];
$password = $_POST["password"];

scorer::signIn($username, $password);
?>
