<?php
session_start();
if(!isset($_SESSION['log'])){
	header("location:../home-scorer-login.php");
}
//session_destroy();
?>
