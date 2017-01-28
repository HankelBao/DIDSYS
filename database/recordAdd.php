<?php
    require_once('recordSearch.php');
    require_once('record.php');
    function recordAdd($dbConnection, $addDate, $addSub_id, $addCla_id, $addScorer_id, $addScore, $addTime) {
        $dbRow = record::search($addDate, $addSub_id, $addCla_id);
        if ($dbRow == NULL) {
            $tmpSQL = "INSERT INTO record 
                    (rcrdId, rcrdDate, rcrd_classId, rcrd_subjectId, rcrd_scorerId, rcrdScore, rcrdScoreTime, rcrdDescription) 
                VALUES 
                    (NULL, '".$addDate."','".$addCla_id."','".$addSub_id."','".$addScorer_id."','".$addScore."','".$addTime."','');";
            echo $tmpSQL."</br>";
            mysqli_query($dbConnection, $tmpSQL);
        }
            
    }   
?>