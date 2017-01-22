<?php require('database/checkSession.php'); ?>

<html>
    <head>
        <title>DID - Dashboard</title>
        <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css">
        <link type="text/css" rel="stylesheet" href="css/font-awesome.min.css">
        <link type="text/css" rel="stylesheet" href="theme/home.css"/>
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
        <script>
        $(document).ready(function(){
            $("#type-tourist").click(function(){
                $('#main-nav').load('home-RecordDaily.php');
            });
            $("#type-scorer").click(function(){
                $('#main-nav').load('home-AddRecord.php');
            });
        });
        </script>
    </head>
    <body>
        <div class="top-nav">
            <label class="title-label">SFLS Discipline Inspection Department</label>
            <label class="title-chi">苏州外国语学校纪检部评分官网</label>
            <label class="signature-label">Powered by HankelBao</label>
        </div>
        <div class="bottom-nav">
            <div class="side-nav">
                <div id="type-tourist" class="block-div">计分表</div>
                <div id="type-scorer" class="block-div">流水记录</div>
                <div id="type-scorer" class="block-div">历史查询</div>
                <div id="type-scorer" class="block-div">计分入口</div>
            </div>
            <div id="main-nav" class="main-nav">
            </div>
        </div>
    </body>
</html>