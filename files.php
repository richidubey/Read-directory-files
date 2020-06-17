<?php 

	$path    = './NCS/';
	$files = scandir($path);

	$files = array_diff(scandir($path), array('.', '..'));

	foreach($files as $file){
		echo $file . "<br>";
	}
	
	$jsonFiles=json_encode($files);
	
	?>
