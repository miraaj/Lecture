<?php
	error_reporting(0);
	
	$open = fopen("firstFiles.txt","r");
	
	if($open){
		while (!feof($open)) {
			echo fgetc($open);
		}
		fclose($open);
		
	}else{
		echo "failed";
	}

	
	
	

?>