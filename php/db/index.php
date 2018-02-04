<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lecture";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection for success
if (mysqli_connect_errno()) { 
    die("Connection failed");
} 

//code to insert into database
$sql_insert = "INSERT INTO user (name,password) VALUES ('nicil','nicil@')";


if (mysqli_query($conn, $sql_insert)) {
  	echo "insert success";
} else {
    echo "insert failed";
}
echo "<hr>";

//code to update into database
$sql_update = "UPDATE  user SET name='UPDATED_NAME' WHERE id=1";


if (mysqli_query($conn, $sql_update)) {
  	echo "update success";
} else {
    echo "update failed";
}
echo "<hr>";

//to fetch from database
$sql = "SELECT id, name, password FROM user";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result)>0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["name"]. " " . $row["password"]. "<br>";
    }
} else {
    echo "0 results";
}

?>