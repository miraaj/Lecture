<?php
	error_reporting(0);
	
	$open = fopen("abcd.txt", "r");

	echo fread($open , 2);
	echo "<br>";

	if($open){
		while (!feof($open)) {
			echo fread($open , 10);
		}
		fclose($open) or die("unable to close");
		
	}else{
		echo "failed";
	}
	
	

?>