<html>
<body>
<?php
 
// Create connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "yrc";
$link = mysqli_connect($servername,$username,$password,$dbname);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
 
// create INSERT query
$bid = mysqli_real_escape_string($link, $_POST['bid']);
$name = mysqli_real_escape_string($link, $_POST['name']);
$bloodgrp = mysqli_real_escape_string($link, $_POST['bloodgrp']);
$phone = mysqli_real_escape_string($link, $_POST['phone']);

$sql="INSERT INTO blooddonation (bid,name,bloodgrp,phone) VALUES ('$bid','$name','$bloodgrp','$phone')";
 
if ($link->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
 
mysqli_close($link);
?>
</body>
</html>