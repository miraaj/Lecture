<?php
	error_reporting(0);
	
	$open = fopen("fwrite.txt","a+");
	$data = "Writing using fwrite";
	if($open){
		fwrite($open, $data, 3) or die("Unaable to write");
		echo "Data written successfully";
		fclose($open);
		
	}else{
		echo "failed";
	}

	
	
	

?>