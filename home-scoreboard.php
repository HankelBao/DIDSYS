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
            require('database/databaseConnect.php');
            require('database/recordSearch.php');
            require('database/subTableHead.php');
    
            $dbRowCollect = mysqli_query($connection, 'SELECT * FROM class');
            if ($dbRowCollect == False) {
                die('null database');
            }
            $class = array();
            $cla_id = array();
            while ($dbRow = mysqli_fetch_array($dbRowCollect)) {
                $class[] = $dbRow['clsName'];
                $cla_id[] = $dbRow['clsId'];
            }
            for($i=0; $i<count($class); $i++) {
                echo "<tr>";
                echo "<th>";
                echo $class[$i];
                echo "</th>";
                for ($j = 0; $j < count($subject); $j++) {
                    echo "<th>";
                    $dbRow = recordSearch($connection, date('y-m-d',time()), $sub_id[$j], $cla_id[$i]);
                    if ($dbRow != "null")
                        echo $dbRow['rcrdScore'];
                    echo "</th>";
                }
                echo "</tr>";
            }
            require('database/subTableEnd.php');
            require('database/databaseClose.php');
        ?>
        </div>
    </body>
</html>