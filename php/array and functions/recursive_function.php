<?php
	
	function factorial($number=2){
		if($number < 2){
			return 1;
		}else{
			return ($number * factorial($number - 1));
		}
	}

	echo factorial(6);
	echo "<br>".factorial();
?>