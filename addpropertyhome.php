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
</style>
<body>
<br><br>
<div class="w3-container"></div>
<div class="w3-card w3-margin w3-padding">
  <h2 class="w3-text-red">Submit Free Classified Add</h2>
  <form method="POST" action="register.php" class="w3-container">
    <label class="w3-label w3-text-red">Price</label>
    <input class="w3-input w3-text-red" type="text" name="price">
    <label class="w3-label w3-text-red">Bedrooms</label>
    <input class="w3-input w3-text-red" type="text" name="Bedrooms">
    <label class="w3-label w3-text-red">Area</label>
    <input class="w3-input w3-text-red" type="text" name="area">
    <label class="w3-label w3-text-red">Length</label>
    <input class="w3-input w3-text-red" type="text" name="length">
    <label class="w3-label w3-text-red">Breadth</label>
    <input class="w3-input w3-text-red" type="text" name="breadth">
    <label class="w3-label w3-text-red">Bathrooms</label>
    <input class="w3-input w3-text-red" type="text" name="bathrooms">
     <label class="w3-label w3-text-red">Address</label>
    <input class="w3-input w3-text-red" type="text" name="address">
    <label class="w3-label w3-text-red">Description</label>
    <input class="w3-input w3-text-red" type="text" name="description">
    <label class="w3-label w3-text-red">Add Picture</label>
    <input class="w3-input w3-text-red" type="file" name="pic" accept="image/*">
    <br>
    <input type="submit" value="Submit">
  </form>
</div>
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
