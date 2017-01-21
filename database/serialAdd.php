<?php
    function serialAdd($connection, $date, $sub_id, $cla_id, $scorer_id, $score, $time) {
        $row = mysqli_query($connection, 'SELECT * FROM serial where date = "'.$date.'" and subject_id = '.$sub_id.' and class_id = '.$cla_id);
        if ($row != "null")
            mysqli_query($connection, "INSERT INTO `serial` (`serial_id`, `date`, `class_id`, `subject_id`, `scorer_id`, `score`, `score_time`, `description`) VALUES (NULL, '".$date."','".$cla_id."','".$sub_id."','".$scorer_id."','".$score."','".$time."','');");   
    }
?>