<?php
require_once('../srvr/dbRel_scorerClass.php');
require_once('../srvr/dbClas.php');

if($_GET['action']) {
    $action = $_GET['action'];
    switch($action) {
    case 'getClassAll':
        $classId = clas::getIdArray();
        $className = clas::getNameArray();
        $ret_arr = array('idArray' => $classId,
                    'nameArray' => $className);
        echo json_encode($ret_arr);
        break;
    case 'getClassPermissed':
        $scorerId = $_GET['scorerId'];
        $classId =  rel_scorerClass::getClassIdByScorerId($scorerId);
        echo json_encode($classId);
        break;
    }
}

?>