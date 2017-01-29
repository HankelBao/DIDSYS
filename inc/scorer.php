<?php
require_once('dbManager.php');
require_once('session.php');
class scorer {
    public static function signIn($username, $password) {
        $account = self::selectAccount($username);
        if ($account != FALSE) {
            if ($account['scrrPassword'] == $password) {
                session::register($account['scrrId'], $account['scrrName']);
                self::turnToEntry();
            } else {
                self::turnToLogin();
            }
        } else {
            self::turnToLogin();
        }
    }

    public static function signUp($username, $password) {
        $connection = dbManager::createConnection();
        mysqli_query($connection, "INSERT INTO scorer(scrrName, scrrPassword) VALUES ('".$username."','".$password."')");
        dbManager::closeConnection($connection);
    }

    public static function checkSession() {
        if (session::check() == FALSE) {
	        self::turnToLogin();
        }
    }

    public static function selectAccount($username) {
        $connection = dbManager::createConnection();

        $result = mysqli_query($connection, 'SELECT * FROM scorer WHERE scrrName="'.$username.'"');
        if ($result == False) {
            return FALSE;
        }

        while ($row = mysqli_fetch_array($result)) {
            return $row;
        }

        return FALSE;
        dbManager::closeConnection();      
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