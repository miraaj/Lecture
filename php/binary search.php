<?php

	
	/*

	* Binary search,search the element using dive and conquer method
	*
	* @param array $number
	* @param integer $start
	* @param integer $end
	* @param integer $search
	* @return integer
	* @Author Tek Raj Chhetri
	* @Date Created 11/5/2017
	

	*/
	function  binarySearch($number, $start, $end, $search){
		if($end >= $start){
			$mid = (int)($start + ($end - $start) / 2);
			echo "<br>".$mid."mid <br>";
			if($number[$mid] == $search){
				return $mid;
			}else if($number[$mid] > $search){
				 //search element less than middle one so take left one
				echo " left side <br>";
				return binarySearch($number,$start,$mid-1 ,$search); 
			}else{
				//search element > middle one so take second half
				echo " right side <br>";
				return binarySearch($number, $mid+1, $end ,$search);
			}
						
		}
		return -1;
	
	}

	$number = [1,2,3,4,5,6,7,8,9,10,31,32,53];
	$n = count($number) - 1;
	
	$getRes = binarySearch($number, 0 ,$n, 18);
	$result = $getRes != -1? $getRes + 1 : 0;
	
	if($result != 0){
		echo "Element found @ ". $result ."Position";
	}else{
		echo "Element not found ";
	}
	
?>