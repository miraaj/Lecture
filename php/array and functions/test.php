<!DOCTYPE html>
<html>
<head>
	<title>Recursive</title>
</head>
<body>
	<?php


			$dbc = mysqli_connect('localhost','root','','test');
			//retrieve all uncompleted tasks
			$q = "SELECT task_id, parent_id, task FROM multi WHERE date_completed='0000-00-00 00:00:00' ORDER BY date_added ASC";
			$r = mysqli_query($dbc, $q);
		$tasks = array();

	////echo "<ol>";
	while (list($taskID, $parentID, $task) = mysqli_fetch_array($r,MYSQLI_NUM)) {
		$tasks[$parentID][$taskID] = $task;		
	} 
	echo "<ol>";

	foreach ($tasks[0] as $parentKey => $value) {
		echo "<li>";
		echo $value;
			if(isset($tasks[$parentKey])){
				echo "<ol>";
				foreach ($tasks[$parentKey] as $SubparentKey => $value) {
					echo "<li>";
					echo $value;
					if(isset($tasks[$SubparentKey])){
									echo "<ol>";
						foreach ($tasks[$SubparentKey] as $subkey => $value) {
							echo "<li>";
							echo $value;
							if(isset($tasks[$subkey])){
									echo "<ol>";
								foreach ($tasks[$subkey] as $key => $value) {
									echo "<li>";
									echo $value;
									echo "</li>";
								}
								echo "</ol>";
							}
							echo "</li>";
						}
						echo "</ol>";
					}
					echo "</li>";
				}
				echo "</ol>";
			}
		echo "</li>";
		}
	 echo "</ol>";
	//echo "<pre>";
	print_r($tasks);
	//echo "</pre>";

	?>

</body>
</html>