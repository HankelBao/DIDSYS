<?php
	$HWSYS = simplexml_load_file("hwsys.xml");
	$HWSYS->thisWeek = $_POST["thisWeek"];
	$HWSYS->dayOfWeek = $_POST["dayOfWeek"];
	
	$save_xml = $HWSYS->asXML();
	$file = fopen("hwsys.xml","w");
	fwrite($file,$save_xml);
	fclose($file);
?>