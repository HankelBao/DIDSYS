<?php
    $score_date = $_POST['score_date'];
    $score_time = $_POST['score_time'];
    $score_pos = $_POST['score_pos'];
    $score_cla = $_POST['score_cla'];
    $score_sub = $_POST['score_sub'];
    $scorer = $_POST['scorer'];
    require('databaseConnect.php');
    for ($x = 0; $x < count($score_pos); $x++) {
        mysqli_query($connection, "INSERT INTO `serial` (`serial_id`, `date`, `class_id`, `subject_id`, `scorer_id`, `score`, `score_time`, `description`) VALUES (NULL, '".$score_date."','".$score_cla[$x]."','".$score_sub[$x]."','".$scorer."','".$score_pos[$x]."','".$score_time."','');");
    }
    require('databaseClose.php');
?>