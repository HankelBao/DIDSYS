<?php
/*
 *code include file
 *I: nothing
 *O: may change the url
 */
session_start();
if(!isset($_SESSION['log'])){
	header("location:home-scorer-login.php");
	exit;
}
//session_destroy();
?>
