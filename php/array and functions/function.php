<?php
	
	function get_Date(){
		return date('d/m/y');
	}

	function get_Date_Desc(){
		return date('d/M/Y');
	}
 
	if(is_callable('get_Date')){
		echo get_Date();	
	}
	

	echo "<br>";
	echo get_Date_Desc();
?>