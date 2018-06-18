<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "yrc";
$link = mysqli_connect($servername,$username,$password,$dbname);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
session_start();
// Escape user inputs for security
$name = mysqli_real_escape_string($link, $_POST['name']);
$reg_no = mysqli_real_escape_string($link, $_POST['reg_no']);
$contact = mysqli_real_escape_string($link, $_POST['contact']);
$email = mysqli_real_escape_string($link, $_POST['email']);
$dob = mysqli_real_escape_string($link, $_POST['dob']);
$blood_grp = mysqli_real_escape_string($link, $_POST['blood_grp']);


// attempt insert query execution
$sql = "INSERT INTO DONOR1 (name,reg_no,contact,email,dob,blood_grp) VALUES ('$name','$reg_no',$contact','$email','$dob','$blood_grp')";
if(mysqli_query($link, $sql)){
	echo "<script> alert('Sign up successful!') </script>";
	 header('Location:http://localhost/YRC_Backend/sadaka/HTML/index.php');
} 
else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>