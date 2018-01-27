<?php
	error_reporting(0);
	
	$open = fopen("flock.txt","a+");

	if(flock($open, LOCK_EX)){ //APPLY EXCLUSIVE LOCK
		fwrite($open, "FLOCK");

		flock($open, LOCK_UN); //RELEASE LOCK
	}
	
		fclose($open);
		
	
	
	
	

?>