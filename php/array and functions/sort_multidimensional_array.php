<!DOCTYPE html>
<html>
<head>
	<title>Multidimensional Array Sorting</title>
</head>
<body>
	<?php
		//array structure
		// studentID => array('name'=>'name','grade'=>XX.XX);
		$students = [
			256 => array('name' =>'Laxman' ,'grade'=>99.50 ),
			2 => array('name' =>'Vance' ,'grade'=>80.25 ),
			320 => array('name' =>'Rob' ,'grade'=>70.54 ),
			69 => array('name' =>'Hari' ,'grade'=>78.5 ),
			8 => array('name' =>'Nisil' ,'grade'=>98.25 )

		];

		//Name Sorting Function
		function name_sort($x,$y){
			return strcasecmp($x['name'], $y['name']);
		}

		//grade sorting in descending order
		function grade_sort_desc($x, $y){
			return ($x['grade'] < $y['grade']);
		}

		//grade sorting in asc order
		function grade_sort_asc($x, $y){
			return ($x['grade'] > $y['grade']);
		}

		// print array
		echo "<h2>Array is:</h2><pre>".print_r($students,1)."</pre>";

		//sorted by name uasort(): will maintain keys
		uasort($students, 'name_sort');
		echo "<h3>Sorted by name (uasort()):</h3><pre>".print_r($students,1)."</pre>";

		//sorted by grade
		uasort($students, 'grade_sort_desc');
		echo "<h3>Sorted by grade desc (uasort()):</h3><pre>".print_r($students,1)."</pre>";

		echo "<hr>";

		//sorted by key uasort()
		uasort($students, 'grade_sort_asc');
		echo "<h3>Sorted by grade asc(uasort()):</h3><pre>".print_r($students,1)."</pre>";



	?>

</body>
</html>