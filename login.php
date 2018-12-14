<?php include "dbc.php";
/*session_start();
$userid=$_POST['userid'];
$password=$_POST['password'];
if (!isset($userid)||!isset($password)) {
	header("Location:login.php");
}
$sql="SELECT user_id,password FROM owner WHERE user_id='".$userid."' AND password='".$password."' limit 1";
$result=mysqli_query($conn,$sql);
if (mysql_num_rows($result)==1) {
	echo "you have successfully logged in ";
}


*/
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	 <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> 
</head>
<body>
<div class="w3-card w3-margin w3-padding">
	<h2 class="w3-text-red">Login</h2>
	<form method="POST" action="login1.php" class="w3-container">
		<label class="w3-label w3-text-red">User Name</label>
		<input class="w3-input w3-text-red" type="text" name="userid">
		<br>
		<label class="w3-label w3-text-red" >Password</label>
		<input class="w3-input w3-text-red" type="Password" name="password">
		<br>
		<br>
		<input type="submit" value="submit" class="w3-ripple">
		<a href="signup.php" class="w3-text-green">
			create an account??
		</a>
	</form>
</div>
  
</body>
</html>