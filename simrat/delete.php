<html>
<body>
<?php
 

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
 
 
// create INSERT query
 
 
$sql = "DELETE FROM blooddonation where bid='$bid'";
 
if ($link->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
 
mysqli_close($link);
?>
</body>
</html>