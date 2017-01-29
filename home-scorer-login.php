<html>
    <head>
        <title>DID - Welcome</title>
        <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css">
        <link type="text/css" rel="stylesheet" href="css/font-awesome.min.css">
        <link type="text/css" rel="stylesheet" href="theme/layout.css"/>
        <link type="text/css" rel="stylesheet" href="theme/home-scorer-login.css">
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
            <div class="title-div">You are a scorer? Sign in to score!</div>
            <div class="subtitle-div">Teachers will also get an account, but you cannot score here...</div>
            <form action="handler/signin.php" method="POST">
                <input placeholder="&nbsp;username" class="input-text" name="username" type="text"></br>
                <input placeholder="&nbsp;password" class="input-text" name="password" type="password"></br>
                <button class="submit-button" type="submit">Sign In</button>
            </form>
        </div>
    </body>
</html>