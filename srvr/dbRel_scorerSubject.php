<?php
require_once('dbManager.php');
class rel_scorerSubject {
    public static function getSubjectIdByScorerId($scorerId) {
        $dbConnection = dbManager::createConnection();

        $tmpSQL = 'SELECT * FROM rel_scorerSubject WHERE rss_ScorerId ='.$scorerId;
        $dbRowCollect = mysqli_query($dbConnection, $tmpSQL);
        dbManager::checkResult($dbRowCollect);

        $subjectId = array();
        while ($row = mysqli_fetch_array($dbRowCollect)) {
            $subjectId[] = $row['rss_subjectId'];
        }
        dbManager::closeConnection($dbConnection);
        return $subjectId;
    }
}
?>
