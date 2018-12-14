<?php
include_once "dbc.php";
$pid=$_POST['pid'];
$sql="SELECT * FROM plot WHERE pid='$pid'";
if (mysqli_query($conn,$sql)) {
    $data=mysqli_query($conn,$sql);

  }
  else {
    echo "Error".$sql."<br>".mysqli_error($conn);
  }
  
mysqli_close($conn);



?>

<!DOCTYPE html>
<html lang="en">
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
.w3-bar,h1,button {font-family: "Montserrat", sans-serif}
.fa-anchor,.fa-coffee {font-size:200px}
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
/* demo shizzle only */
body {
  background: #eee;
  max-width: 900px;
  margin: 30px auto;
  padding: 20px;
/*   outline: 1px solid #ccc; */
}
.container {
    border: 2px solid #ccc;
    background-color: #eee;
    border-radius: 5px;
    padding: 16px;
    margin: 16px 0;
}

/* Clear floats after containers */
.container::after {
    content: "";
    clear: both;
    display: table;
}

/* Float images inside the container to the left. Add a right margin, and style the image as a circle */
.container img {
    float: left;
    margin-right: 20px;
    border-radius: 50%;
}

/* Increase the font-size of a span element */
.container span {
    font-size: 20px;
    margin-right: 15px;
}

/* Add media queries for responsiveness. This will center both the text and the image inside the container */
@media (max-width: 500px) {
  .container {
    text-align: center;
  }

  .container img {
    margin: auto;
    float: none;
    display: block;
  }
}

/* Still use global css (not utility css) for base typography etc? */
p {
  margin-bottom: 0.8em;
}
</style>
<body>

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-red w3-card w3-left-align w3-large topnav">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large w3-white">MyProperty</a>
  <a href="startpage.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white ">Home</a>
    <a href="homepage.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Buy Property?</a>
    <a href="login.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">sell property</a>
    <a href="adminlogin.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Admin Login</a>
    <a href="login.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Login as a Seller</a>
    <a href="signup.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Signup</a>
    <a href="Contactus.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Contact Us</a>
    
  </div>


  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 1</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 2</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 3</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 4</a>
  </div>
</div>
<br>
<br>
<br>
<br>
<form class="w3-container w3-white" method="POST" action="searchproperty.php">
  <input type="text" name="pid" class="w3-input w3-border" placeholder="property id">
  <input type="submit" value="submit" class="w3-button w3-border w3-white">
</form>
<br>
<br>


<?php while ($row=mysqli_fetch_assoc($data)): ?>
<div class="container">
  <img src="<?php echo $row['img'] ?>" alt="Avatar" style="width:90px">
  <p><span>title:<?php echo $row['title'];  ?>||PID::<?php echo $row['pid'];  ?></span>||price:<?php echo $row['price'];  ?></p>
  <p>Address:<?php echo $row['address'];?></p>
  <p>UserID:<?php echo $row['user_id'];?></p>
  <a href="showproperty.php?action=next&pid=<?php echo $row['pid'];  ?>">Give Details</a>
</div>
<?php endwhile;?> 


<div class="w3-container w3-black w3-center w3-opacity w3-padding-64">
    <h1 class="w3-margin w3-xlarge">Quote of the day: live life</h1>
</div>

<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-opacity">  
  <div class="w3-xlarge w3-padding-32">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
 </div>
 <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
</footer>
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