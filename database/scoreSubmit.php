<?php
require('record.php');
    $score_date = $_POST['score_date'];
    $score_time = $_POST['score_time'];
    $score_pos = $_POST['score_pos'];
    $score_cla = $_POST['score_cla'];
    $score_sub = $_POST['score_sub'];
    $scorer = $_POST['scorer'];
    require_once('dbManager.php');
    $connection = dbManager::createConnection();
    require_once('recordAdd.php');
    for ($x = 0; $x < count($score_pos); $x++) {
        if($score_pos[$x] != "") {
            record::add(date('Y-m-d',time()), $score_sub[$x], $score_cla[$x],$scorer,$score_pos[$x],$score_time);
        }
    }
    dbManager::closeConnection($connection);
?>