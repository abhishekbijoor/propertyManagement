<?php include_once "navbar.php";
include_once "dbc.php";
session_start();
$userid=$_SESSION['user_id'];
$sql="SELECT * FROM owner WHERE user_id='".$userid."'limit 1";
if (mysqli_query($conn,$sql)) {
    $data=mysqli_query($conn,$sql);

  }
  else {
    echo "Error".$sql."<br>".mysqli_error($conn);
  }
 $row = mysqli_fetch_array($data);

$email = $row['email'];
$phone_no= $row['phone_no'];
$address=$row['address'];
$_SESSION['email']=$email;
$_SESSION['phoneno']=$phone_no;
$_SESSION['address']=$address;
mysqli_close($conn);

?>
<html>
<title>MyProperty</title>
<div class="w3-card-4 w3-border">
  <br>
  <br>
  <h1><?php echo $userid ?></h1>
  <p class="title"><?php echo "$email"?>
    <br>
    <p><?php echo $phone_no; ?></p>
    <p><?php echo $address; ?></p>
 
  <a href="#"><i class="fa fa-dribbble"></i></a> 
  <a href="#"><i class="fa fa-twitter"></i></a> 
  <a href="#"><i class="fa fa-linkedin"></i></a> 
  <a href="#"><i class="fa fa-facebook"></i></a> 
  <a href="addpropertyplot.php"><p><button > add plot for sale</button></p></a>
  <a href="addpropertycommertial.php"><p><button > add commercial for sale or for rent</button></p></a>
  <a href="deleteproperty.php"><p><button > Delete Added Advertisement</button></p></a><a href="viewbuyercontact.php"><p><button >Interested Buyers</button></p></a>

</div>

<script>
// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
}
</script>

</body>
</html>

