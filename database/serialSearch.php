<?php
    function serialSearch($dbConnection, $srchDate, $srchSub_id, $srchCla_id) {
        $result = mysqli_query($dbConnection, 
                'SELECT * FROM record WHERE rcrd_date = "'.$srchDate.'" and rcrd_subject_id = '.$srchSub_id.' and rcrd_class_id = '.$srchCla_id);
        if($result) {
            $row = mysqli_fetch_array($result);
            if ($row)
                return $row;
            else
                return "null";
        } else {
            return "null";
        } 
    }
?>