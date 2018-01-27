<?php
	error_reporting(0);
	
	if(file_exists("fputs.txt")){
		echo "fputs file exist true<br>";
	}else{
		echo "fputs file exist false<br>";
	}
	

	if(is_executable("fputs.txt")){
		echo "fputs file is_executable true<br>";
	}else{
		echo "fputs file is_executable false<br>";
	}

	if(is_file("fputs.txt")){
		echo "fputs file is a file true<br>";
	}else{
		echo "fputs file is a file false<br>";
	}


	if(is_link("fputs.txt")){
		echo "fputs.txt is a link<br>";
	}else{
			echo "fputs.txt is not a link<br>";
	}

	if(is_readable("fputs.txt")){
		echo "fputs.txt is a readable <br>";
	}else{
			echo "fputs.txt is not a readable<br>";
	}


	if(is_writable("fputs.txt")){
		echo "fputs.txt is a is_writable <br>";
	}else{
			echo "fputs.txt is not is_writable<br>";
	}
	
	
	

?>