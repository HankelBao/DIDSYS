<?php
require_once('../db/scorer.php');
require_once('session.php');
class account {
    public static function SignIn($username,$password) {
        if (scorer::checkPw($username, $password) == TRUE) {
            session::register(scorer::getScrrId(), scorer::getScrrName());
            self::turnToEntry();
        } else {
            self::turnToLogin();
        }
    }

    public static function checkSession() {
        if (session::check() == FALSE) {
	        self::turnToLogin();
        }
    }

    private static function turnToLogin() {
        header("location:../home-scorer-login.php");
        exit;
    }

    private static function turnToEntry() {
        header("location:../home-scorer.php");    
        exit;
    }
}
?>