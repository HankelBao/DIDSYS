<?php
require('dbManager.php');
require('session.php');
class scorer {
    public static function signIn($username, $password) {
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
    }
}
?>