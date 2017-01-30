<?php
require_once('dbManager.php');
class clas {
    public static function getIdArray() {
        $cla_id = array();
        $cla_id = dbManager::getArray("class","clsId");
        return $cla_id;
    }
    
    public static function getNameArray() {
        $cla_name = array();
        $cla_name = dbManager::getArray("class","clsName");
        return $cla_name;
    }
    public static function getNameById($id) {
        $connection = dbManager::createConnection();
        $result = mysqli_query($connection, 'SELECT * FROM class WHERE clsId="'.$id.'"');
        dbManager::checkResult($result);
        dbManager::closeConnection($connection);         

        $row = mysqli_fetch_array($result);
        return $row['clsName'];
    }
}
?>