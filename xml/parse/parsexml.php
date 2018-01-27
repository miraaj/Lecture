<?php

	$xml=simplexml_load_file("drink.xml") or die("Error: Cannot create object");
	print_r($xml);
	echo "<ol>";
	foreach ($xml->book as $book) {
		echo '<li><strong>Title: </strong>'. $book->title.'<br>';
		if(isset($book->title['edition'])){
			echo '<strong>Edition</strong>: '.$book->title['edition'].'</li>';
		}
		
	}
	echo "</ol>";
?>