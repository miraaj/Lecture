<?php
	error_reporting(0);
	
	$open = fopen("fputs.txt","a+");
	$data = "Writing using fputs\n";
	if($open){
		fputs($open, $data) or die("Unaable to write");
		echo "Data written successfully";
		fclose($open);
		
	}else{
		echo "failed";
	}

	
	
	

?>