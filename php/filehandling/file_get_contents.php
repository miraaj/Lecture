<?php
	error_reporting(0);
	
	$files = file_get_contents("firstFiles.txt");
	if($files){
		echo "$files";
		
	}else{
		echo "failed";
	}
	
	

?>