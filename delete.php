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
 
 
$sql="DELETE FROM blooddonation where bid='$_POST(bid)'";
 
if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
 
mysqli_close($conn);
?>
</body>
</html>