<?php
	include_once('connect.php');
	if (isset($_POST['name'])&&isset($_POST['email'])&&isset($_POST['contact'])) {
		$name =  $_POST['name'];
		$email =  $_POST['email'];
		$contact =  $_POST['contact'];
		$id = $_POST['id'];

		$sql="UPDATE `details` SET `name` = '$name', `email` = '$email', `contact` = '$contact' where id = $id";

		$isSuccess  = mysqli_query($con, $sql);

		if($isSuccess){
			header("Location: index.php");
		}else{
			echo "Insertion failed";
		}
	}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container">
<div class="row">
	<div class="col-md-6">
		<table class="table table-hover">
			<thead>
				<th>SN</th>
				<th>Name</th>
				<th>Email</th>
				<th>Contact</th>
				<th></th>
				<th></th>
			</thead>
			<tbody>
				<?php
					$i = 1;
					$sql_fetch = "SELECT * FROM details";

					$result_fetch = mysqli_query($con, $sql_fetch);
					if (mysqli_num_rows($result_fetch)>0) {
					    // output data of each row
					    while($row = $result_fetch->fetch_assoc()) {
					    	$id = $row['id'];
					        echo "<tr><td>".$i++."</td><td>".$row['name']."</td><td>".$row['email']."</td><td>".$row['contact']."</td><td><a href='edit.php?id=$id' class='btn btn-primary'><span class='glyphicon glyphicon-pencil'></span></a></td><td><a href='index.php?edit=delete&&id=$id' class='btn btn-danger'><span class='glyphicon glyphicon-remove'></span></a></td></tr>";
					    }
					} else {
					    echo "0 results";
					}
				?>
			</tbody>
		</table>
	</div>
	<?php
		if (isset($_GET['edit'] )&& isset($_GET['id'])) {
			if($_GET['edit'] == 'edit' || $_GET['edit'] == 'delete'){
				if($_GET['edit'] == 'delete'){
					$sql_delete = "DELETE FROM details WHERE id =".$_GET['id'];
					if(mysqli_query($con, $sql_delete)){
						header('Location: index.php');
					}
				}
			}
		}
	?>
	<div class="col-md-6">
				<?php
					
					if(isset($_GET['id'])){
						$id = $_GET['id'];
					$sql_fetch_single = "SELECT * FROM details where id=$id";
					$result_fetch_single = mysqli_query($con, $sql_fetch_single);
					if (mysqli_num_rows($result_fetch_single)>0) {
					    // output data of each row
					    while($row = $result_fetch_single->fetch_assoc()) {
					  ?>

<form method="POST" action="edit.php">
		  <div class="form-group">
		  	<input type="hidden" name="id" value="<?=$id?>">
		    <label for="name">Name</label>
		    <input type="text" name="name" class="form-control" id="name" placeholder="Name" value="<?=$row['name']?>">
		  </div>
		  <div class="form-group">
		    <label for="email">Email</label>
		    <input type="text" name="email" class="form-control" id="email" placeholder="Email" value="<?=$row['email']?>">
		  </div>
		  <div class="form-group">
		    <label for="contact">Contact</label>
		    <input type="text" name="contact" class="form-control" id="contact" placeholder="Contact" value="<?=$row['contact']?>">
		  </div>
		  

		  <button type="submit" class="btn btn-default">Submit</button>
		</form>
					  <?php
					    	}
					} else {
					    echo "0 results";
					}					
					}


				?>
		
		
	</div>
</div>

	</div>

</body>
</html>