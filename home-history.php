<!DOCTYPE html>
<html>
    <head>
        <title>DID - Welcome</title>
        <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css">
        <link type="text/css" rel="stylesheet" href="css/font-awesome.min.css">
        <link type="text/css" rel="stylesheet" href="theme/layout.css"/>
        <link tyoe="text/css" rel="stylesheet" href="theme/home-history.css" />
        <script type="text/JavaScript" src="js/jquery.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
        <script type="text/javascript">
        var clasId;
        var subId;
        var ScrrId;     
        function clasChange(value) {
            clasId = value;
            AjaxUpdate();
        }
        function AjaxUpdate() {
            url = "handler/echoHistory.php?clasId="+clasId;
            $("#history-div").load(url);              
        }   
        </script>
    </head>

    <body>
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <div class="nav-div">
            <img src="SFLS.jpg" width="70px" height="70px"/>
            <a href="index.php" class="link-div">SFLS DI Department</a>
            <a href="home-scoreBoard.php" class="link-div">ScoreBoard</a>
            <a href="home-history.php" class="link-div active">History</a>
            <a href="home-scorer.php" class="link-div">Scorer</a>
        </div>
        <div class="pos-center-div">
            <form>
                Scorer Name:
                <select>
                <?php
                    require_once('srvr/dbScorer.php');
                    $scorerId = scorer::getIdArray();
                    $scorerName = scorer::getNameArray();
                    for ($i = 0; $i < count($scorerId); $i++) {
                        echo "<option>".$scorerName[$i]."</option>";
                    }
                ?>                
                </select>

                Class:
                <select id='clasSelect' onchange='clasChange(this[selectedIndex].id);'>
                <?php
                    require_once('srvr/dbClas.php');
                    $className = clas::getNameArray();
                    $classId = clas::getIdArray(); 
                    for ($i = 0; $i < count($classId); $i++) {
                        echo "<option id='".$classId[$i]."'>".$className[$i]."</option>";
                    }                    
                ?>
                </select>

                Subject:
                <select>
                </select>
            </form>
        </div>
        <div id="history-div" class="pos-center-div">
        </div>
    </body>
</html>