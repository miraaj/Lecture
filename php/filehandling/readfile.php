<?php
	error_reporting(0);
	
	$files = readfile("firstFiles.txt");
	if($files){
		echo "$files";
		
	}else{
		echo "failed";
	}
	
	

?>