<html>
<body>
<?php
 
// Create connection
$conn = new mysqli('localhost','root','');
 
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "DB Connected successfully";
 
// this will select the Database sample_db
mysqli_select_db($conn,"yrc");
 
 
// create INSERT query
 
 
$sql="Select * FROM blooddonation where bid='$_POST(bid)'";
 
if ($conn->query($sql) === TRUE) {
    echo "<br>" . $row['bid'] . "<br>";
	echo "<br>" . $row['name'] . "br>";
	echo "<br>" . $row['bloodgrp'] 
	. "<br>";
	echo "<br>" . $['phone'] . "<br>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
 
mysqli_close($conn);
?>
</body>
</html>