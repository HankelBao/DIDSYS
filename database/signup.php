<?php

$username = $_POST["username"];
$password = $_POST["password"];

require 'databaseConnect.php';

$result = mysqli_query($connection, "INSERT INTO scorer(scorer_name, scorer_pw) VALUES ('".$username."','".$password."')");

require 'databaseClose.php';
?>
