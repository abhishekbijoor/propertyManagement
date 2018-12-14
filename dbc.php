<?php
echo "connecting";
$conn=mysqli_connect('localhost','root','abhishek!123','myproperty');
//testing the connection
if (mysqli_connect_errno()) {
echo "DB connection error:".mysqli.maxdb_connect_error();
}
