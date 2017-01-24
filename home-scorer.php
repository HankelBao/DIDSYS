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
        <div class="login-div">
            <div class="title-div">Welcome! <?php echo $_SESSION['scorer_name']; ?> </div>
            <div class="subtitle-div">It's <?php echo date('y年m月d日',time())?> today. Your score will be updated to scoreboard at 5:30</div>
            <div class="warntitle-div">You must score justful and careful!!</div>
        </div>
    </body>
</html>