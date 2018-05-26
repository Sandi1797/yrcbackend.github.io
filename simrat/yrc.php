<html>
<body>
<h1>Blood Donation</h1>
<h3>Add Blood Donor</h3>
<form action="http://localhost/yrcbackend/add.php" method="post">
Blood Donor ID: <input type="text" name="bid" /><br><br>
Name: <input type="text" name="name" /><br><br>
Blood Group: <input type="text" name="bloodgrp" /><br><br>
Phone Number: <input type="text" name="phone" /><br><br>
 <input type="submit" /><br><br><br>
 </form>
<h3>Delete Blood Donor</h3>
<form action="http://localhost/yrcbackend/delete.php" method="post">
Blood Donor ID: <input type="text" name="bid" /><br><br> 
<input type="submit" />
</form>
<h3>Search Blood Donor</h3>
<form action="http://localhost/yrcbackend/search.php" method="post">
Blood Donor ID: <input type="text" name="bid" /><br><br> 
<input type="submit" />
</form>
</body>
</html>
