<?php
include_once('dbc.php');
include_once('navbar.php');
session_start();
$sql="SELECT * FROM contactus ";
if (mysqli_query($conn,$sql)) {
    $data=mysqli_query($conn,$sql);

  }
  else {
    echo "Error".$sql."<br>".mysqli_error($conn);
  }
  if (isset($_GET['action']) && isset($_GET['phone_no'])) {
  	if ($_GET['action']=='delete') {
  		$phone_no=$_GET['phone_no'];
  			$sql="DELETE FROM contactus WHERE phone_no=$phone_no";
	if (mysqli_query($conn,$sql)) {
		header("Location:contactusdetails.php?success=DELETE%20OPERATION%20IS%20SUCCESSFUL");
	}
	else {
		echo "Error".$sql."<br>".mysqli_error($conn);
	}
}
}




mysqli_close($conn);







  ?>
  <!DOCTYPE html>
<html>
<head>
	<title>Delete the Advertisement</title>
</head>
<body>
<div class="w3-container w3-text-red">
<?php while ($row=mysqli_fetch_assoc($data)): ?>
 	<li><?php echo $row['first_name'];  ?>||<?php echo $row['last_name'];  ?>||<?php echo $row['email'];  ?>||<?php echo $row['phone_no'];?>||<?php echo $row['message'];?>--<a href="contactusdetails.php?action=delete&phone_no=<?php echo $row['phone_no'];  ?>">X</a></li>
 <?php endwhile;?> 
 <br>
 <br>
 <?php if (isset($_GET['success'])):?>
 	<div class="w3-panel w3-green">
  <?php echo $_GET['success'];?>
  </div>
 <?php endif;?>

 </div>
</body>
</html>