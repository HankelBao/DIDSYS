<?php

$username = $_POST["username"];
$password = $_POST["password"];

require 'databaseConnect.php';

 $result = mysqli_query($connection, 'SELECT * FROM scorer WHERE scrrName="'.$username.'"');
 if ($result == False) {
   die("Please Sign Up First");
 }
 while ($row = mysqli_fetch_array($result)) {
   if ($row['scrrPassword'] == $password) {
     session_start();

     $_SESSION['log'] = true;
     $_SESSION['scorer_id'] = $row['scrrId'];
     $_SESSION['scorer_name'] = $row['scrrName'];

     header("location:../home-scorer.php");
     exit;
   }
}
header("location:../home-scorer-login.php");
require 'databaseClose.php';
?>
