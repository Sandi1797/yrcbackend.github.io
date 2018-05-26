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
 
 
$sql="SELECT bid,name,bloodgrp,phone FROM blooddonation WHERE bid='$bid'";
 
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
                   while($row = mysqli_fetch_array($result)){
    					echo "<br>" . $row['bid'] . "<br>";
						echo "<br>" . $row['name'] . "<br>";
						echo "<br>" . $row['bloodgrp'] . "<br>";
						echo "<br>" . $row['phone'] . "<br>";
					}
				}
} else {
    echo "Error: " . $sql . "<br>" . $link->error;
}
 
mysqli_close($link);
?>
</body>
</html>