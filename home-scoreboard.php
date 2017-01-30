<html>
    <head>
        <title>DID - Welcome</title>
        <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css">
        <link type="text/css" rel="stylesheet" href="css/font-awesome.min.css">
        <link type="text/css" rel="stylesheet" href="theme/layout.css"/>
        <link type="text/css" rel="stylesheet" href="theme/home-scoreboard.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    </head>

    <body>
        <script type="text/javascript" src="js/jquery.min.js"></script>

        <script type="text/javascript">
            $(function(){
                $("tr:odd").css("background","rgb(256,186,186)");
            })
        </script>

        <div class="nav-div">
            <img src="SFLS.jpg" width="70px" height="70px"/>
            <a href="index.php" class="link-div">SFLS DI Department</a>
            <a href="home-scoreBoard.php" class="link-div active">ScoreBoard</a>
            <a href="home-history.php" class="link-div">History</a>
            <a href="home-scorer.php" class="link-div">Scorer</a>
        </div>

        <div class="scoreboard-div">
            <div class="script-div">以下是<?php echo date('y年m月d日',time())?>的计分表:</div>
            <div class="subscript-div">为保证数据已被审核，当日数据会在下午5:30后刷新</div>
        <?php
            require_once('db/record.php');
            require_once('db/subject.php');
            require_once('db/clas.php');
            require_once('srvr/table.php');

            $subjectName = subject::getNameArray();
            $subjectId = subject::getIdArray();
            $className = clas::getNameArray();
            $classId = clas::getIdArray();

            table::echoHead($subjectName);
            for ($i = 0; $i < count($classId); $i++) {
                unset($score);
                for ($j = 0; $j < count($subjectId); $j++) { 
                    $score[] = record::getScore(date('y-m-d',time()), $subjectId[$j], $classId[$i]);
                }
                table::echoRow($className[$i], $score);
            }
            table::echoEnd();
        ?>
        </div>
    </body>
</html>