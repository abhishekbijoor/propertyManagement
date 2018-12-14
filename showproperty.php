<?php
include_once "dbc.php";
include_once "navbar.php";
if(isset($_GET['action'])&&isset($_GET['pid'])){
$pid=$_GET['pid'];

$sql="SELECT * FROM plot WHERE pid='$pid'";
if (mysqli_query($conn,$sql)) {
    $data=mysqli_query($conn,$sql);

  }
  else {
    echo "Error".$sql."<br>".mysqli_error($conn);
  }

mysqli_close($conn);

}



?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="csssheets.css">
<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
    text-align: left;
}

</style>
</head>
<body>


<?php while($row=mysqli_fetch_assoc($data)): ?>
<h2>Title : <?php echo $row['title'];?></h2>
<table style="width:100%">
  <tr>
    <th>Property id:</th>
    <td><?php echo $row['pid']; ?></td>
  </tr>
  <tr>
    <th>Price:</th>
    <td><?php echo $row['price']; ?></td>
  </tr>
  <tr>
    <th>Area:</th>
    <td><?php echo $row['area']; ?></td>
  </tr>
  <tr>
    <th>Length:</th>
    <td><?php echo $row['length']; ?></td>
  </tr>
  <tr>
    <th>Breadth:</th>
    <td><?php echo $row['breadth']; ?></td>
  </tr>
  <tr>
    <th>Address:</th>
    <td><?php echo $row['address'];?></td>
  </tr>
  <tr>
    <th>Discription:</th>
    <td><?php echo $row['description']; ?></td>
  </tr>
  <tr>
    <th>photo:</th>
    <td><img src="<?php echo $row['img'] ?>" alt="" border=3 height=100 width=300></td>
  </tr>
</table>

<a href="enterbuyerinfo.php">Send Message To The Seller</a>
<?php endwhile;?> 

</div>
</body>
</html>






