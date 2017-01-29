<?php
require_once('dbManager.php');
class record {
    public static function search($srchDate, $srchSub_id, $srchCla_id) {
        $dbConnection = dbManager::createConnection();
        $tmpSQL = 'SELECT * FROM record WHERE rcrdDate = "'.$srchDate.'" and rcrd_subjectId = '.$srchSub_id.' and rcrd_classId = '.$srchCla_id;
        $dbRowCollect = mysqli_query($dbConnection, $tmpSQL);
        if($dbRowCollect) {
            $dbRow = mysqli_fetch_array($dbRowCollect);
            if ($dbRow)
                return $dbRow;
            else
                return NULL;
        } else {
            return NULL;
        } 
        dbManager::closeConnection($dbConnection);
    }
    public static function add($addDate, $addSub_id, $addCla_id, $addScorer_id, $addScore, $addTime) {
        $dbConnection = dbManager::createConnection();
        $dbRow = self::search($addDate, $addSub_id, $addCla_id);
        if ($dbRow == NULL) {
            $tmpSQL = "INSERT INTO record 
                    (rcrdId, rcrdDate, rcrd_classId, rcrd_subjectId, rcrd_scorerId, rcrdScore, rcrdScoreTime, rcrdDescription) 
                VALUES 
                    (NULL, '".$addDate."','".$addCla_id."','".$addSub_id."','".$addScorer_id."','".$addScore."','".$addTime."','');";
            echo $tmpSQL."</br>";
            mysqli_query($dbConnection, $tmpSQL);
        }
        dbManager::closeConnection($dbConnection);
    }
}
?>