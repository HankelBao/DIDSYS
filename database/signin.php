<?php

$username = $_POST["username"];
$password = $_POST["password"];

require 'databaseConnect.php';

 $result = mysqli_query($connection, 'SELECT * FROM scorer WHERE scorer_name="'.$username.'"');
 if ($result == False) {
   die("Please Sign Up First");
 }
 while ($row = mysqli_fetch_array($result)) {
   if ($row['scorer_pw'] == $password) {
     session_start();

     $_SESSION['log'] = true;
     $_SESSION['scorer_id'] = $row['scorer_id'];
     $_SESSION['scorer_name'] = $row['scorer_name'];

     header("location:../home-scorer.php");
     exit;
   }
}
header("location:../home-scorer-login.php");
require 'databaseClose.php';
?>
