<!DOCTYPE html>
<html>
<head>
	<title>Recursive</title>
</head>
<body>
	<?php
		//array $parent
		function make_list($parent){
			global $tasks;

			echo "<ol>";
				foreach ($parent as $task_id => $todo) {
					echo "<li>$todo";
					//check for sub task
					if(isset($tasks[$task_id])){
						make_list($tasks[$task_id]);
					}
					echo "</li>";
				}//end foreach
			echo "</ol>";


		}//end make_list

			$dbc = mysqli_connect('localhost','root','','test');
			//retrieve all uncompleted tasks
			$q = "SELECT task_id, parent_id, task FROM multi WHERE date_completed='0000-00-00 00:00:00' ORDER BY date_added ASC";
			$r = mysqli_query($dbc, $q);
	$tasks = array();

	while (list($task_id, $parent_id, $task) = mysqli_fetch_array($r, MYSQLI_NUM)) {

		
		$tasks[$parent_id][$task_id] = $task;

	}
		echo "<pre>";
	print_r($tasks);
	echo "</pre>";



	make_list($tasks[0]);
	?>

</body>
</html>