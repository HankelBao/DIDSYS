<?php
if($_GET['clasId'])
    $clasId = $_GET['clasId'];

$SQL = "WHERE rcrd_classId = '".$clasId."'";
require_once('../srvr/history.php');
history::echoHistory($SQL);
?>