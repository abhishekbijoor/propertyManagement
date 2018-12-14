<?php include_once 'dbc.php';
session_start();
$name=$_POST['name'];
$email=$_POST['email'];
$gender=$_POST['gender'];
$phone=$_POST['phone'];
$address=$_POST['address'];
$userid=$_POST['userid'];
$password=$_POST['password'];
 if (empty($name)||empty($email)||empty($gender)||empty($phone)||empty($address)||empty($userid)||empty($password)) {
 	header("Location:signup.php?error=Please%20enter%20all%20details.%20!!!");
 }
 /*echo $name ;
 echo $email;
 echo $gender;
 echo $phone;
 echo $address;
 echo $userid;
 echo $password;
 */
 $sql="INSERT INTO owner (name,email,gender
	,phone_no,address,user_id,password) VALUES ('$name','$email','$gender','$phone','$address','$userid','$password')";
	if (mysqli_query($conn,$sql)) {
		echo "Insertion Successful";
		$_SESSION['userid']=$userid;
		$_SESSION['email']=$email;
		header("Location:signupsuccess.php");
	}
	else {
		echo "Error".$sql."<br>".mysqli_error($conn);
	}
	/*
	$sql="INSERT INTO user_login (user_id,password) VALUES ('$userid','$password')";
	if (mysqli_query($conn,$sql)) {
		header("Location:signupinsert.php");
	}
	else {
		echo "Error".$sql."<br>".mysqli_error($conn);
	}
	*/
	mysqli_close($conn);

 ?>