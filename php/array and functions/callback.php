<?php 

	function doit($callback){
		$data = "This is my data";
		$callback($data);
	}

	//callback for doit
	function myCallback($data){
		echo $data;
	}

	doit('myCallback');
	
?>