<?php 

	$cities  = array('UK' =>'London' ,'US'=>'washington','Nepal'=>'Kathmandu' );

	//create array iterator object
	$iterator = new ArrayIterator($cities);

	$iterator->rewind();

	while ($iterator->valid()) {
		print($iterator->current()." is in ". $iterator->key()."<br>");
		$iterator->next();
	}
	
?>