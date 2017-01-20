<?php require('database/checkSession.php'); ?>

<html>
    <head>
        <title>DID - Dashboard</title>
        <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css">
        <link type="text/css" rel="stylesheet" href="css/font-awesome.min.css">
        <link type="text/css" rel="stylesheet" href="theme/home.css"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    </head>
    <body>
        <div class="top-nav">
            <label class="title-label">SFLS Discipline Inspection Department</label>
            <label class="title-chi">苏州外国语学校纪检部评分官网</label>
            <label class="signature-label">Powered by HankelBao</label>
        </div>
        <div class="bottom-nav">
            <div class="side-nav">
                <div class="block-div"><a href="home-RecordDaily.php">每日记录</a></div>
                <div class="block-div">历史查询</div>
                <div class="block-div">评分分析</div>
                <div class="block-div"><a href="home-AddRecord.php">评分入口</a></div>
            </div>
        </div>
    </body>
</html>