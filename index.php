<html lang="zh-CN">
    <head>
        <title>HwSys Welcome</title>
        <!--device-->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximim-scale=1, user-scalable=no">
        <!--jquery-->
        <script src="https://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>
        <!--bootstrap-->
        <link rel="stylesheet" href="https://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://cdn.static.runoob.com/libs/bootstrap/3.3.7/js/bootstrap.min.js"></script>
       
        <!--global css-->
        <link rel="stylesheet" href="theme/global.css">
        
        <!--css for login-->
        <link rel="stylesheet" href="theme/index.css">
        
        <script type="text/javascript">
		
        function FinishLoading(){
            $(".welcome-wait-for-hide").delay(1000).fadeOut("fast");
            $(".pic-wait-for-load").delay(1000).fadeIn("fast");
            $(".login-panel").delay(1000).fadeIn("fast");
        }
        </script>
    </head>
    
    <body onload="FinishLoading()">
	
	    <div class="welcome-wait-for-hide">
            <div class="signature-div">
                <label class="signature-label"><i>Powered&nbsp;&nbsp;by&nbsp;&nbsp;HankelBao</i></label>
            </div>
            <div class="title-div">
                <h1>SFLS Discipline Inspection Department</h1>
                <h3 class="title-year"><b>2 0 1 7</b></h3>
                <h3 class="title-month"><b>J&nbsp;&nbsp;a&nbsp;&nbsp;n&nbsp;&nbsp;u&nbsp;&nbsp;a&nbsp;&nbsp;r&nbsp;&nbsp;y</b></h3>
            </div>
        </div>
		<div class="magic" style="width:0%; background-color:#D0D0D0">&nbsp;</div>
		<script>
		$(".magic").animate({width:'100%'},1000);
		</script>
	    <div class="pic-wait-for-load">    
            <img src="welcome.jpg" style="filter:blur(25px);" height="100%" width="100%"/>
        </div>
		
        <div class="login-panel">
        	<div class="panel panel-info">
        		<div class="panel-heading" style="text-align:center">
        			<strong><h4>SFLS DID SYS</h4></strong>
        		</div>
        		<div class="panel-body">
        			<form action="database/login.php" method="POST">
        			    <label>Username:</label>
        				<input name="username" style="margin-bottom:10px;height: 45px" type="text" class="form-control">
        				<label>Password:</label>
        				<input name="password" style="margin-bottom:10px;height: 45px" type="password" class="form-control">
        				<div style="text-align:center">
        				<button class="btn btn-info" type="submit" style="height:45px; width:100%">LOGIN</button>
        				</div>
        			</form>
        		</div>
        	</div>
		</div>
    </body>
</html>
