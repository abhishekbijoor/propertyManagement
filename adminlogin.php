<?php 
include_once('dbc.php');

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>AdminLogin</title>
	 <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> 
</head>
<body>
<div class="w3-card w3-margin w3-padding">
	<h2 class="w3-text-red">Admin Login</h2>
	<form method="POST" action="adminlogin1.php" class="w3-container">
		<label class="w3-label w3-text-red">User Name</label>
		<input class="w3-input w3-text-red" type="text" name="aduser_id">
		<br>
		<label class="w3-label w3-text-red" >Password</label>
		<input class="w3-input w3-text-red" type="Password" name="adpassword">
		<br>
		<br>
		<input type="submit" value="submit">
	</form>
</div>
  
</body>
</html>