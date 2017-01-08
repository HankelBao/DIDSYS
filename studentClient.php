<?php
session_start();
if(!isset($_SESSION["log"])){
	header("location:index.php");
}
?> 

<html lang="zh-CN">
    <head>
        <title>Student Client</title>
        <!--device-->
        <meta name="viewport" content="width=devic./theme/studentClient.csse-width, initial-scale=1, maximim-scale=1, user-scalable=no">
        <!--jquery-->
        <script src="https://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>
        <!--bootstrap-->
        <link rel="stylesheet" href="https://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="js/bootstrap.min.js"></script>
        
        <!--global css-->
        <link rel="stylesheet" href="theme/global.css">
        <!--My Theme(CSS & JS)-->
        <link rel="stylesheet" href="theme/frame.css">
        <script src="theme/frame.js"></script>
        
        <!--css for student Client-->
        <link rel="stylesheet" href="theme/studentClient.css">
    </head>
    
    <body>
		<div class="LeftNav">
			<div class="ToolBar">
                <span class="badge" style="margin:15px;font-size:20px;background-color: rgb(221, 76, 79)">#2016/12/12</span>
            </div>
			<div class="SubjectBar ">
				<div class="SubjectBarL SubjectBarL-active">
					<div class="SubjectBarS">
						<label class="SubjectLabel">English</label>
						<label class="SubNumLabel">5</label>
					</div>
				<div class="SubjectBarL">
					<div class="SubjectBarS">
						<label class="SubjectLabel">English</label>
						<label class="SubNumLabel">5</label>
					</div>
				</div>
				<div class="SubjectBarL">
					<div class="SubjectBarS">
						<label class="SubjectLabel">English</label>
						<label class="SubNumLabel">5</label>
					</div>
				</div>				
				</div>
			</div>
		</div>
    </body>
</html>