<?php
    function serialSearch($connection, $date, $sub_id, $cla_id) {
        $result = mysqli_query($connection, 'SELECT * FROM serial where date = "'.$date.'" and subject_id = '.$sub_id.' and class_id = '.$cla_id);
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