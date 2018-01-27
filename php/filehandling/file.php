<?php
	error_reporting(0);
	
	$files = file("firstFiles.txt");
	if($files){
		foreach ($files as $lineNum => $value) {
			echo "Line $lineNum: $value<br>";
		}
		
	}else{
		echo "failed";
	}
	

?>