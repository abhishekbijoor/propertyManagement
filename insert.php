<?php
include_once 'dbc.php';
	$first=$_POST['first'];
	$last=$_POST['last'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$message=$_POST['message'];
	if (empty($first)||empty($last)||empty($email)||empty($phone)||empty($message)) {
	header("Location:Contactus.php?error=Please%20fill%20in%20all%20the%20details");
	}
	$sql="INSERT INTO contactus (first_name,last_name,email
	,phone_no,message) VALUES ('$first','$last','$email','$phone','$message')";
	if (mysqli_query($conn,$sql)) {
		echo "New Record created successfully";
	}
	else {
		echo "Error".$sql."<br>".mysqli_error($conn);
	}
	mysqli_close($conn);




/*//checking the entered variable
if ($first_name==''||$last_name=''||$email=''||$phone=''||$message='') {
	header("Location:contactus.php?error=Please%20fill%20in%20all%20the%20details");
}
//insert statement
$sql="INSERT INTO 'contactus' VALUES('$first_name','$last_name','$email','$phone','$message')";
  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
*/
?>
