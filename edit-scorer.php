<html>

<head>
    <title>DID - Edit Scorers</title>
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="css/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="theme/layout.css" />
    <link type="text/css" rel="stylesheet" href="theme/edit-scorer.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
</head>

<body>
    <div class="left-div">
        <!--这里是评分员名称-->
        <?php
        require('srvr/dbScorer.php');
        $scorerId = scorer::getIdArray();
        $scorerName = scorer::getNameArray();
        for ($i = 0; $i < count($scorerId); $i++) {
            echo "<li>".$scorerName[$i]."</li>";
        }
        ?>
    </div>
    <div class="right-div">
        <div class="right-top-div">
            <!--权限（班级）-->

        </div>
        <div class="right-bottom-div">
            <!--权限（项目）-->

        </div>
    </div>
</body>

</html>