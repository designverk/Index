<?php
$con=mysqli_connect("http://designverk.com","designve_ike"," StinkySteve69","newsletter");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="INSERT INTO newsletter (Email)
VALUES
('$_POST[emailAddress]')";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
echo "1 record added";

mysqli_close($con);
?>