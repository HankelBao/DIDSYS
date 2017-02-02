<?php
require_once('dbManager.php');
class rel_scorerClass {
    public static function getClassIdByScorerId($scorerId) {
        $dbConnection = dbManager::createConnection();
        
        $tmpSQL = 'SELECT * FROM rel_scorerClass WHERE rsc_ScorerId ='.$scorerId;
        $dbRowCollect = mysqli_query($dbConnection, $tmpSQL);
        dbManager::checkResult($dbRowCollect);

        $classId = array();
        while ($row = mysqli_fetch_array($dbRowCollect)) {
            $classId[] = $row['rsc_ClassId'];
        }
        dbManager::closeConnection($dbConnection);
        return $classId;
    }
}
?>