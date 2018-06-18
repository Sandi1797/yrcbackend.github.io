<!DOCTYPE html>
<html>
<head>
   <title>YRC_VIT | Login</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body>
<?php
 

 $servername = "localhost";
$username = "root";
$password = "";
$dbname = "yrc";
$link = mysqli_connect($servername,$username,$password,$dbname);
 
$name = mysqli_real_escape_string($link, $_POST['name']);
$password = mysqli_real_escape_string($link, $_POST['pass']);
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
} 
$sql1 = "SELECT * FROM USERS WHERE name='$name' and password='$password'";
if($result = mysqli_query($link, $sql1))
{
    if(mysqli_num_rows($result) > 0)
    {
    	while($row = mysqli_fetch_array($result))
    	{
    	
    	 		header('Location:http://localhost/YRC_Backend/admin/admin_home.php?username='.urldecode($name));
	 	
    	}
    	
	}
	else 
	{
    		$sql1 = "SELECT * FROM DONOR2 WHERE name='$name' and reg_no='$password'";
            if($result = mysqli_query($link, $sql1))
            {
            if(mysqli_num_rows($result) > 0)
                {
                       
                    header('Location:http://localhost/YRC_Backend/donor/donor_home.php?username='.urldecode($name));
        
                }

        
                
                else
                {

                     $sql1 = "SELECT * FROM DONOR1 WHERE name='$name' and reg_no='$password'";
                    if($result = mysqli_query($link, $sql1))
                    {
                    if(mysqli_num_rows($result) > 0)
                    {
                       
                    header('Location:http://localhost/YRC_Backend/donor/donor_home.php?username='.urldecode($name));
        
                    }                     
                
                    else
                    {

                     header('Location:http://localhost/YRC_Backend/login_c.php');
                    }
                    }
                }
	       }
    }
}
    else
    {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);
?>
 </html>