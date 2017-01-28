<?php
require_once('scorer.php');

$username = $_POST["username"];
$password = $_POST["password"];

scorer::signIn($username, $password);
?>
