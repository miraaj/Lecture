<?php
	error_reporting(0);

	
	
	$open = fopen("hello.txt", "r");
	if($open){
		echo "success";
	}else{
		echo "failed";
	}
	
	$open = fopen("abcd.txt", "w");
	if($open){
		echo "success creation";
	}else{
		echo "failed creation";
	}
	

?>