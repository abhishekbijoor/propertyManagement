<?php 
include_once 'dbc.php';
include_once 'navbar.php';
session_start();
$_SESSION['adlogged_in']=true;
$userid=$_SESSION['aduser_id'];
echo "admin login successful"; ?>
<html>
<title>MyProperty</title>
<div class="w3-card-4 w3-border">
  <br>
  <br>
  <h1><?php echo $userid ?></h1>

 
  <a href="#"><i class="fa fa-dribbble"></i></a> 
  <a href="#"><i class="fa fa-twitter"></i></a> 
  <a href="#"><i class="fa fa-linkedin"></i></a> 
  <a href="#"><i class="fa fa-facebook"></i></a> 
  <a href="contactusdetails.php"><p><button > check all the messages through the link Contact us</button></p></a>
  <a href="adviewproperties.php"><p><button > to check the list of properties and delete operation</button></p></a>
  <a href="#"><p><button >check list of users</button></p></a>
  <a href="#"><p><button >check list of users</button></p></a>
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