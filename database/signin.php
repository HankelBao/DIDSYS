<?php
require('session.php');
$username = $_POST["username"];
$password = $_POST["password"];

require('dbManager.php');
$connection = dbManager::createConnection();

 $result = mysqli_query($connection, 'SELECT * FROM scorer WHERE scrrName="'.$username.'"');
 if ($result == False) {
   die("Please Sign Up First");
 }
 while ($row = mysqli_fetch_array($result)) {
   if ($row['scrrPassword'] == $password) {
     session::register($row['scrrId'], $row['scrrName']);

     header("location:../home-scorer.php");
     exit;
   }
}
header("location:../home-scorer-login.php");
dbManager::closeConnection();
?>
