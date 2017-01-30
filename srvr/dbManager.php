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
    
    public static function checkResult($result) {
        if ($result == False) {
           die('null database');
        }
    }

    public static function getArray($tableName, $fieldName) {
        $connection = self::createConnection();

        $tmp_sql = "SELECT * FROM ".$tableName;
        $result = mysqli_query($connection, $tmp_sql);
        if ($result == False) {
           die('null database');
        }

        $return_array = array();
        while ($row = mysqli_fetch_array($result)) {
            $return_array[] = $row[$fieldName];
        }

        self::closeConnection($connection);
        return $return_array;
    }
}
?>