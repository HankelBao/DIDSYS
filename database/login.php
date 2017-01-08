<?php
	$username = $_POST["username"];
	$password = $_POST["password"];
	$accountfile = simplexml_load_file("account/account.xml");
	foreach($accountfile->user as $x){
		if (($x["name"] == $username) && ($x == $password)) {
			session_start();
			$usertype = $x["type"];
			
			$_SESSION['username'] = $username;
			$_SESSION['log'] = true;
			
			if ($usertype == "stu") {
				header("location:../studentClient.php");
			}else if ($usertype == "mas") {
				header("location:../masterClient.php");
			}
			exit;
		}
	}
	header("location:../index.php");
?>