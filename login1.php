<?php include_once 'dbc.php';
session_start();

$userid=$_POST['userid'];
$password=$_POST['password'];
if (!isset($userid)||!isset($password)) {
	header("Location:login.php");
}
$sql="SELECT user_id,password FROM owner WHERE user_id='".$userid."' AND password='".$password."' limit 1";
$result=mysqli_query($conn,$sql);
if (mysqli_num_rows($result)==1) {
	$_SESSION['logged_in']=true;
	$_SESSION['user_id']=$userid;
	header("Location:userprofile.php");
}
mysqli_close($conn);


?>
