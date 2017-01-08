<?php
    $HWData = simplexml_load_file("database/G1C4HW.xml");
?>

<html>
    <head>
        <title>SFLS G1C4 Homework System</title>
        <link rel="stylesheet" href="https://unpkg.com/purecss@0.6.1/build/base-min.css">
        <link rel="stylesheet" href="https://unpkg.com/purecss@0.6.1/build/pure-min.css">
        <link rel="stylesheet" href="https://unpkg.com/purecss@0.6.1/build/grids-min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style type="text/css">
        .title{
                background-color: #000000;
                color: #FFFFFF;
            }
        .ph-100 {
                min-height: 100px;
            }
        .navi {
            background-color: #00FFFF;
            color: #FFFFFF;
            min-height:1000px;
        }
        </style>
    </head>
    <body>
        <div class="title pure-g">
            <div class="pure-u-1-2">
                <h1>SFLS G1C4 Homework System</h1></br>
            </div>
            <div class="pure-u-1-2">
        <form class="pure-form">
            <fieldset>
                <legend>Powered by HankelBao</legend>
                <input type="email" >
                <input type="password" placehold="Password">
                <button type="submit" class="pure-button pure-button-primary">Sign in</button>
            </fieldset>
        </form>
            </div>
        </div>
        <?php
            foreach($HWData->HWRecord as $x) {
                echo "<hr>";
                echo "<b>".$x["date"]."</b> </br>";
                foreach($x->subject as $y){
                    echo "<b>".$y['sub']."</b><br>";
                    foreach($y->record as $z) {
                        echo "<li>";
                        echo $z->description." </br>";
                        echo "</li>";
                    }
                }
            }
        ?>
        <a href="/teachersClient.php">add homework</a></br>
        <a href="/login.php">login</a>
        <a href="/html.php">exam</a>
        <a href="test1/index.html">exam2</a>
        <a href="/uikit.php">uikit</a>
    </body>
</html>