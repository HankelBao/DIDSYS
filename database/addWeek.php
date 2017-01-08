<?php
	$date = $_POST["startDate"];
	$HWDATA = simplexml_load_file("hw/G1C4.xml");
	
	$newWeek = $HWDATA->addChild("week","");
	$newWeek["start_date"] = $date;
	
	$mon = $day = $newWeek->addChild("day","");
	$mon["type"] = "Mon";
	$tue = $day = $newWeek->addChild("day","");
	$tue["type"] = "Tue";
	$wed = $day = $newWeek->addChild("day","");
	$wed["type"] = "Wed";
	$thu = $day = $newWeek->addChild("day","");
	$thu["type"] = "Thu";
	$fri = $day = $newWeek->addChild("day","");
	$fri["type"] = "Fri";
	
	foreach($newWeek->day as $day) {
		$sub = $day->addChild("subject","");
		$sub["type"] = "Eng";
		$sub["q"] = "0";
		$sub = $day->addChild("subject","");
		$sub["type"] = "Eco";
		$sub["q"] = "0";
		$sub = $day->addChild("subject","");
		$sub["type"] = "Mat";
		$sub["q"] = "0";
		$sub = $day->addChild("subject","");
		$sub["type"] = "Phy";
		$sub["q"] = "0";
		$sub = $day->addChild("subject","");
		$sub["type"] = "Che";
		$sub["q"] = "0";
		$sub = $day->addChild("subject","");
		$sub["type"] = "Oth";
		$sub["q"] = "0";
	}
	
	$save_xml = $HWDATA->asXML();
	$file = fopen("hw/G1C4.xml","w");
	fwrite($file,$save_xml);
	fclose($file);
?>