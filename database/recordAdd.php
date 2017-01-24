<?php
    require('recordSearch.php');
    function recordAdd($dbConnection, $addDate, $addSub_id, $addCla_id, $addScorer_id, $addScore, $addTime) {
        $dbRow = recordSearch($dbConnection, $addDate, $addSub_id, $addCla_id);
        if ($dbRow == "null")
            mysqli_query($dbConnection, "INSERT INTO record 
                    (rcrd_id, rcrd_date, rcrd_class_id, rcrd_subject_id, rcrd_scorer_id, rcrd_score, rcrd_score_time, rcrd_description) 
            VALUES 
                    (NULL, '".$addDate."','".$addCla_id."','".$addSub_id."','".$addScorer_id."','".$addScore."','".$addTime."','');");   
    }
?>