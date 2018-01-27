<!DOCTYPE html>
<html>
<head>
	<title>Multi array</title>
</head>
<body>
<?php
	$dbc = mysqli_connect('localhost','root','','test');

	//check if the form has been submitted
	if(($_SERVER['REQUEST_METHOD'] == 'POST') && !empty($_POST['task'])){
		if(isset($_POST['parent_id']) && filter_var($_POST['parent_id'], FILTER_VALIDATE_INT, array('min_range'=>1))){
			$parent_id  = $_POST['parent_id'];
		}else{
			$parent_id = 0;
		}

		$task = mysqli_real_escape_string($dbc, strip_tags($_POST['task']));

		//add to db
		$q = "INSERT INTO multi (parent_id, task) VALUES ($parent_id, '$task')";
		$r = mysqli_query($dbc, $q);

		//check result
		if(mysqli_affected_rows($dbc) == 1){
			echo "<p>Task Added Successfully</p>";
		}else{
			echo "<p>Task Couldn't be added</p>";
		}
	} // end of submission if

	//displaying form
	echo "<form action='index.php' method='post'>
		  <fieldset>
		  	<legend>Add a Task</legend>
		  	<p>Task: <input type=\"text\" name='task' size=\"60\" maxlength=\"100\" required></p>
		  	<p>Parent Task: <select name=\"parent_id\"><option value=\"0\">None</option>";
	//retrieve all uncompleted tasks
	$q = "SELECT task_id, parent_id, task FROM multi WHERE date_completed='0000-00-00 00:00:00' ORDER BY date_added ASC";
	$r = mysqli_query($dbc, $q);

	//store in array
	$tasks = array();

	while (list($task_id, $parent_id, $task) = mysqli_fetch_array($r, MYSQLI_NUM)) {

		echo "<option value=\"$task_id\">$task</option>";

		//add to array
		$tasks[] = array('task_id'=>$task_id, 'parent_id'=>$parent_id, 'task'=>$task); 
	}
	echo "</select><br>";
	echo "<input type=\"submit\" name=\"submit\" value=\"Add Task\">";
	echo "</fieldset>";
	echo "</form>"; //end form	 


	//sort task by parent_id
	function parent_sort($x, $y){
		return ($x['parent_id'] > $y['parent_id']);

	} 
	usort($tasks, 'parent_sort');

	//display all tasks
	echo "<h2>Current to do list:</h2><ul>";
	foreach ($tasks as $task) {
		echo "<li>{$task['task']}</li>";
	}



?>
<a href="http://localhost:82/lecture/multiarray/static.php">Static</a>
</body>
</html>