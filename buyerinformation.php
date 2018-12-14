<?php
include_once('dbc.php');
include_once('navbar.php');
$buyer_name=$_POST['buyer_name'];
$buyer_phone=$_POST['buyer_phone'];
$buyer_email=$_POST['buyer_email'];
$buyer_message=$_POST['buyer_message'];
$pid=$_POST['pid'];
$userid=$_POST['user_id'];
if (!isset($buyer_name)||!isset($buyer_phone)||!isset($buyer_email)||!isset($buyer_message)||!isset($pid)||!isset($userid)) {
	header("Location:enterbuyerinfo.php?error=please%20enter%20all%20details%20tosend%20to%20conserned%20seller");
}
else{
$sql="INSERT INTO buyer_info1 (buyer_name,buyer_phone,buyer_email,user_id,pid,buyer_message) VALUES ('$buyer_name','$buyer_phone','$buyer_email','$userid','$pid','$buyer_message')";
	if (mysqli_query($conn,$sql)) {
		echo "New Query Set for the seller";
	}
	else {
		echo "Error".$sql."<br>".mysqli_error($conn);
	}
}
	mysqli_close($conn);



?>