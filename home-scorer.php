<?php require('database/checkSession.php'); ?>

<html>
    <head>
        <title>DID - Welcome</title>
        <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css">
        <link type="text/css" rel="stylesheet" href="css/font-awesome.min.css">
        <link type="text/css" rel="stylesheet" href="theme/layout.css"/>
        <link type="text/css" rel="stylesheet" href="theme/home-scorer.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    </head>

    <body>
        <script type="text/javascript" src="js/jquery.min.js"></script>

        <div class="nav-div">
            <img src="SFLS.jpg" width="70px" height="70px"/>
            <a href="index.php" class="link-div">SFLS DI Department</a>
            <a href="home-scoreBoard.php" class="link-div">ScoreBoard</a>
            <a href="home-history.php" class="link-div">History</a>
            <a href="home-scorer.php" class="link-div active">Scorer</a>
        </div>
        
        <div class="pos-center-div">
            <div class="title-div">Welcome! <?php echo $_SESSION['scorer_name']; ?> </div>
            <div class="subtitle-div">It's <?php echo date('y年m月d日',time())?> today. Your score will be updated to scoreboard at 5:30</div>
            <div class="warntitle-div">You must score justful and careful!!</div>
        </div>
        
        <div class="pos-center-div">
       <?php
            require('database/dbManager.php');
            $connection = dbManager::createConnection();
            require('database/subTableHead.php');
            require('database/claLoad.php');

            echo "<form action='database/scoreSubmit.php' method='POST'>";
            echo "<input name='score_date' value='".date('y-m-d',time())."' style='display:none'\>";
            echo "<input name='score_time' value='".date('y-m-d h:i:s',time())."' style='display:none'\>";
            echo "<input name='scorer' value='".$_SESSION['scorer_id']."' style='display:none'\>";
            for($i=0; $i<count($class); $i++) {
                echo "<tr>";
                echo "<th>";
                echo $class[$i];
                echo "</th>";
                for ($j = 0; $j < count($subject); $j++) {
                    echo "<th>";
                    echo "<input class='input-def' name='score_pos[]' type='text'/>";
                    echo "<input name='score_cla[]' value='".$cla_id[$i]."' style='display:none'\>";
                    echo "<input name='score_sub[]' value='".$sub_id[$j]."' style='display:none'\>";
                    echo "</th>";
                }
                echo "</tr>";
            }

            require('database/subTableEnd.php');
            echo "<button type='submit'>Submit</button>";
            echo "</form>";
            
            dbManager::closeConnection($connection);
        ?>
        </div>
    </body>
</html>