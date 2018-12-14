<?php 
include_once 'dbc.php';
include_once 'navbar.php';
session_start();
$userid=$_SESSION['user_id'];
$sql="SELECT * FROM buyer_info1 WHERE user_id='".$userid."'";
if (mysqli_query($conn,$sql)) {
    $data=mysqli_query($conn,$sql);

  }
  else {
    echo "Error".$sql."<br>".mysqli_error($conn);
  }
 //$row = mysqli_fetch_array($data);
  if (isset($_GET['action']) && isset($_GET['pid'])) {
  	if ($_GET['action']=='delete') {
  		$pid=$_GET['pid'];
  			$sql="DELETE FROM buyer_info1 WHERE pid=$pid";
	if (mysqli_query($conn,$sql)) {
		header("Location:viewbuyercontact.php?success=DELETE%20OPERATION%20IS%20SUCCESSFUL");
	}
	else {
		echo "Error".$sql."<br>".mysqli_error($conn);
	}
	mysqli_close($conn);

  		}
  }
 
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Delete the queries</title>
</head>
<body>
<div class="w3-container w3-text-red">
<?php while ($row=mysqli_fetch_assoc($data)): ?>
 	<li><?php echo $row['buyer_name'];  ?>||<?php echo $row['buyer_phone'];  ?>||<?php echo $row['buyer_email'];  ?>||<?php echo $row['buyer_message'];?>||<?php echo $row['pid'];?>--<a href="viewbuyercontact.php?action=delete&pid=<?php echo $row['pid'];  ?>">X</a></li>
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