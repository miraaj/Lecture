<?php

	$number = [40,50,2,3,5,6,7,8,9,10];

	foreach  ($number as $isEven) { 
		if(($isEven % 2) == 0){
			printf("<br>%d is even:<br> ", $isEven);
		}else{
			printf("<br>%d is odd:<br>", $isEven);
		}
	}

	echo "<hr>";
	$detail = array('name'=>'Laxman','address'=>'Biratnagar','zip'=>35621);
	foreach ($detail as $key => $value) {
		echo "<p> $key is $value</p>";
	}
	echo "<hr>";

	foreach ($detail as  $value) {
		echo "<p>$value</p>";
	}

?>