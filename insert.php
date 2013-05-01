
<?php
$con=mysqli_connect("dvorak.wms.com","danilo","testserver","danilo");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


$sql="INSERT INTO users (login)
VALUES
('$_POST[login]')";



if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
header("Location: http://dvorak.wms.com/~danilo/form2.html");

mysqli_close($con);
?>
