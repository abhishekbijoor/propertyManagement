<?php 
include_once 'dbc.php';
include_once 'navbar.php';
session_start();
$userid=$_SESSION['user_id'];
$sql="SELECT * FROM plot WHERE user_id='".$userid."'";
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
  			$sql="DELETE FROM plot WHERE pid=$pid";
	if (mysqli_query($conn,$sql)) {
		header("Location:deleteproperty.php?success=DELETE%20OPERATION%20IS%20SUCCESSFUL");
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
	<title>Delete the Advertisement</title>
</head>
<body>
<div class="w3-container w3-text-red">
<?php while ($row=mysqli_fetch_assoc($data)): ?>
 	<li><?php echo $row['title'];  ?>||<?php echo $row['pid'];  ?>||<?php echo $row['price'];  ?>||<?php echo $row['area'];?>--<a href="deleteproperty.php?action=delete&pid=<?php echo $row['pid'];  ?>">X</a></li>
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