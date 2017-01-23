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
        <div class="nav-div">
            <img src="SFLS.jpg" width="70px" height="70px"/>
            <a href="index.php" class="link-div">SFLS DI Department</a>
            <a href="home-scoreBoard.php" class="link-div active">ScoreBoard</a>
            <a href="home-history.php" class="link-div">History</a>
            <a href="home-scorer.php" class="link-div">Scorer</a>
        </div>
        <div class="scoreboard-div">
            <div class="title-div">以下是 的数据（为保证数据已被审核，当日数据会在下午5:30后刷新）</div>
        <?php
            require('database/databaseConnect.php');
            require('database/serialSearch.php');
            $result = mysqli_query($connection, 'SELECT * FROM subject');
            if ($result == False) {
                echo('null database');
            }
            $subject = array();
            $sub_id = array();
            while ($row = mysqli_fetch_array($result)) {
                $subject[] = $row['subject_name'];
                $sub_id[] = $row['subject_id'];
            }
            echo "<table border='1'><tr>";
            echo "<th> </th>";
            for($i=0; $i<count($subject); $i++) {
                echo "<th>".$subject[$i]."</th>";
            }
            echo "</tr>";
            
            $result = mysqli_query($connection, 'SELECT * FROM class');
            if ($result == False) {
                die('null database');
            }
            $class = array();
            $cla_id = array();
            while ($row = mysqli_fetch_array($result)) {
                $class[] = $row['class_name'];
                $cla_id[] = $row['class_id'];
            }
            for($i=0; $i<count($class); $i++) {
                echo "<tr>";
                echo "<th>";
                echo $class[$i];
                echo "</th>";
                for ($j = 0; $j < count($subject); $j++) {
                    echo "<th>";
                    $row = serialSearch($connection, date('y-m-d',time()), $sub_id[$j], $cla_id[$i]);
                    if ($row != "null")
                        echo $row['score'];
                    echo "</th>";
                }
                echo "</tr>";
            }
            echo "</table>";
            
            require('database/databaseClose.php');
        ?>
        </div>
    </body>
</html>