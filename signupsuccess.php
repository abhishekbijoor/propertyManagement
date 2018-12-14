<?php
session_start();
include_once "navbar.php";

?>
<!DOCTYPE html>
<html>
<head>
	<style>
div {.container={
    background-color: lightgrey;
    width: 300px;
    border: 25px solid green;
    padding: 25px;
    margin: 25px;
	}
}
</style>
</head>
<body class="container">
<h2 class="green">Successful signup !!</h2>
<div class="w3-container">
	<b><h2><?php echo "Hello ".$_SESSION['userid']." please login to continue"; ?></h2></b>
</div>
</body>
</html>