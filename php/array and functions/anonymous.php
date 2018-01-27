<?php 

	$number = [40,50,2,3,5,6,7,8,9,10];


	//array_map : takes 2 argument, first function and second array on which you want to run function

	array_map(function($number_ary){ 
			if(($number_ary % 2) == 0){
				echo "$number_ary is even<br>";
			}else{
				echo "$number_ary is odd<br>";
			}		

	}, $number);





	
?>