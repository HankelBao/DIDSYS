<?php
class dbManager {
    public static function createConnection() {
        $connection = mysqli_connect("localhost", "root", "201028");
        if (!$connection)
            die("Could not connect to the databse, please contact Hankel(c)");

        $database = mysqli_select_db($connection,'did');
        return $connection;
    }
    public static function closeConnection($connection) {
        mysqli_close($connection); 
    }
}
?>