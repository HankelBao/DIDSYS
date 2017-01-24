<?php
    function recordSearch($dbConnection, $srchDate, $srchSub_id, $srchCla_id) {
        $tmpSQL = 'SELECT * FROM record WHERE rcrd_date = "'.$srchDate.'" and rcrd_subject_id = '.$srchSub_id.' and rcrd_class_id = '.$srchCla_id;
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