<?php
include_once('dbc.php');
include_once('navbar.php');
session_start();
$title=$_POST['title'];
$price=$_POST['price'];
$area=$_POST['area'];
$length=$_POST['length'];
$breadth=$_POST['breadth'];
$address=$_POST['address'];
$description=$_POST['description'];
$img="images/".$_POST['pic'];
//$img=addslashes(file_get_contents($_FILE['img']['tmp_name']));
$userid=$_SESSION['user_id'];
if (empty($title)||empty($price)||empty($area)||empty($length)||empty($breadth)||empty($address)||empty($description)||empty($img)) {
	
	header("Location:addpropertyplot.php?error=please%20enter%20all%20details");

}
else{
$sql="INSERT INTO plot (title,pid,price
	,area,length,breadth,address,description,img,user_id) VALUES ('$title','default','$price','$area','$length','$breadth','$address','$description','$img','$userid')";
	if (mysqli_query($conn,$sql)) {
		echo "New Record created successfully";
	}
	else {
		echo "Error".$sql."<br>".mysqli_error($conn);
	}
}
	mysqli_close($conn);


  ?>
  <!DOCTYPE html>
  <html>
  <head>
  	<title></title>
  </head>
  <body>
  	<a href="userprofile.php">Go Back.</a>
  </body>
  </html>