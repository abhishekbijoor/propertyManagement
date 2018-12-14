<?php 
include_once 'dbc.php';
session_start();
$userid=$_POST['aduser_id'];
$password=$_POST['adpassword'];
if (empty($user_id)||empty($password)) {
	header("Location:adminlogin.php?error=please%20enter%20your%20user_id%20and%20password");
}
$sql="SELECT admin_id,admin_password FROM admin_login WHERE admin_id='".$userid."' AND admin_password='".$password."' limit 1";
$result=mysqli_query($conn,$sql);
if (mysqli_num_rows($result)==1) {
	$_SESSION['adlogged_in']=true;
	$_SESSION['aduser_id']=$userid;
	header("Location:adminuserprofile.php");
}

echo "admin Login successful";

 ?>