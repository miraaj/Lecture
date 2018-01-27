<?php
	error_reporting(0);
	
	$open = fopen("firstFiles.txt", "r");

	echo fgets($open , 200);
	echo "<br>";

	if($open){
		while (!feof($open)) {
			echo fgets($open , 200);
		}
		fclose($open) or die("unable to close");
		
	}else{
		echo "failed";
	}
	
	

?>