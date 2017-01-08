<html>
	<head>
		<title>Welcome HankelBao</title>
	</head>
	<body>
		<h1>Master Client</h1>
		<form action="database/addweek.php" method="post">
			add a new week:</br>
			start date: <input type="text" name="startDate">
			submit: <input type="submit">
		</form></br>
		
		date currect:</br>
		<?php
		$HWSYS = simplexml_load_file("database/hwsys.xml");
		echo "week start date:".$HWSYS->thisWeek;
		echo "day of week:".$HWSYS->dayOfWeek."</br>";
		?>
		
		change date:
		<form action="database/changeWeek.php" method="post">
			start date of week:<input type="text" name="thisWeek">
			day of a week:<input type="text" name="dayOfWeek">
			submit: <input type="submit">
		</form></br>
		<a href="database/test/teachersClient.php">add.old</a><br>
		<?php
			$HWDATA = simplexml_load_file("database/hw/G1C4.xml");
			echo $HWDATA->asXML();
		?>
	</body>
</html>