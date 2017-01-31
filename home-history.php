<html>
    <head>
        <title>DID - Welcome</title>
        <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css">
        <link type="text/css" rel="stylesheet" href="css/font-awesome.min.css">
        <link type="text/css" rel="stylesheet" href="css/font-awesome.min.css">
        <link type="text/css" rel="stylesheet" href="theme/layout.css"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    </head>

    <body>
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <div class="nav-div">
            <img src="SFLS.jpg" width="70px" height="70px"/>
            <a href="index.php" class="link-div">SFLS DI Department</a>
            <a href="home-scoreBoard.php" class="link-div">ScoreBoard</a>
            <a href="home-history.php" class="link-div active">History</a>
            <a href="home-scorer.php" class="link-div">Scorer</a>
            dddd
        </div>
        <div class="pos-center-div">
        <?php
            require('srvr/dbManager.php');
            require('srvr/dbScorer.php');
            require('srvr/dbClas.php');
            require('srvr/dbSubject.php');
            $connection = dbManager::createConnection();
            $tmpSQL = "select * from record where rcrdScoreTime > '2017-1-26'";
            $result = mysqli_query($connection, $tmpSQL);
            dbManager::checkResult($result);
        
            while ($row = mysqli_fetch_array($result)) {
                echo "评分员".scorer::getNameById($row['rcrd_ScorerId'])."在".$row["rcrdScoreTime"]."给".clas::getNameById($row["rcrd_ClassId"])."对于".subject::getNameById($row["rcrd_SubjectId"])."评分".$row["rcrdScore"];
                echo "</br>";
            }
            ?>
        </div>
    </body>
</html>