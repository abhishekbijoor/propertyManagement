<?php include_once 'navbar.php';  ?>
<!DOCTYPE html>
<html lang="en">
<title>MyProperty</title>
<head></head>
<body>
<div class="w3-card w3-margin w3-padding">
  <h2 class="w3-text-red">Submit Queries about the property</h2>
  <form method="POST" action="buyerinformation.php" class="w3-container">
    <label class="w3-label w3-text-red">Buyer Name</label>
    <input class="w3-input w3-text-red" type="text" name="buyer_name" required>
    <label class="w3-label w3-text-red">Buyer Phone No</label>
    <input class="w3-input w3-text-red" type="text" name="buyer_phone" required>
    <label class="w3-label w3-text-red">Buyer Email</label>
    <input class="w3-input w3-text-red" type="text" name="buyer_email" required>
    <label class="w3-label w3-text-red">Message</label>
    <input class="w3-input w3-text-red" type="text" name="buyer_message" required>
    <label class="w3-label w3-text-red">UserId</label>
    <input class="w3-input w3-text-red" type="text" name="user_id" required>
    <br>
    <label class="w3-label w3-text-red">PID</label>
    <input class="w3-input w3-text-red" type="text" name="pid" required>
    <br>
    <input type="submit" value="Submit">
  </form>
</div>
</body>
</html>