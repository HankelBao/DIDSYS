<?php
require('dbManager.php');
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
}