<?php

echo "<fieldset>
	<Legend>Break</Legend>";
	for($i =0; $i <=10; $i++){
		if($i == 3){
			break;
		}
		echo "The number is $i<br>";
	}
	echo "Break";

echo "</fieldset>";

echo "<fieldset>
	<Legend>Continue</Legend>";
	for($i =0; $i <=10; $i++){
		if($i == 3){
			continue;
		}
		echo "The number is $i<br>";
	}
	
echo "</fieldset>";

echo "<fieldset>
	<Legend>Exit</Legend>";
	for($i =0; $i <=10; $i++){
		if($i == 3){
			exit;
		}
		echo "The number is $i<br>";
	}
	echo "Exit";
echo "</fieldset>";

?>