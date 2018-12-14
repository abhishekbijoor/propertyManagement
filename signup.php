<?php include_once 'dbc.php'  ?>
<!DOCTYPE html>
<html>
<head>
	<title>Register form</title>
	 <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> 
</head>
<body>
<div class="w3-card w3-margin w3-padding">
	<h2 class="w3-text-red">Register</h2>
	<?php if (!empty($_GET['error'])):?>
  <div class="w3-panel w3-red">
  <?php echo $_GET['error'];?>
  </div>
<?php endif;?>
	<form method="POST" action="signupinsert.php" class="w3-container">
		<label class="w3-label w3-text-red">Name</label>
		<input class="w3-input w3-text-red" type="text" name="name">
		<br>
		<label class="w3-label w3-text-red">E-mail</label>
		<input class="w3-input w3-text-red" type="text" name="email">
		<br>
		<label class="w3-label w3-text-red">Gender</label>
		<input class="w3-radio" type="radio" name="gender" value="M" checked>
		<label>Male</label>

		<input class="w3-radio" type="radio" name="gender" value="F">
		<label>Female</label>

		<br>
		<label class="w3-label w3-text-red">Phone no</label>
		<input class="w3-input w3-text-red" type="numeric" name="phone">
		<br>
		<label class="w3-label w3-text-red">Address</label>
		<input class="w3-input w3-text-red" type="text" name="address">
		<br>
		<label class="w3-label w3-text-red">userid</label>
		<input class="w3-input w3-text-red" type="text" name="userid">
		<br>
		<label class="w3-label w3-text-red">Password</label>
		<input class="w3-input w3-text-red" type="password" name="password">
		<br>
		<input type="submit" value="submit">
	</form>
</div>
</body>
</html>