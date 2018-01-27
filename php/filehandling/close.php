<?php
	error_reporting(0);
	
	$open = fopen("firstFile.txt", "r");
	if($open){
		fclose($open) or die("unable to close");
		echo "success in closing file";
	}else{
		echo "failed";
	}
	
	

?>