<?php
    function recordSearch($dbConnection, $srchDate, $srchSub_id, $srchCla_id) {
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
    }
?>