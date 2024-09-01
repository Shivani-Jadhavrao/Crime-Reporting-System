<?php

include('connection.php');
error_reporting(0);

$uid=$_GET['u_id'];

$query = "DELETE FROM user WHERE u_id ='$uid'";

$data=mysqli_query($con,$query);


if($data)
{
	echo "<script>alert('Record deleted from database')</script>";
	?>
	<META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/SALINIPRACHI_CRS/headuserslist.php">
	<?php
}
else
{
	echo "<script>alert('Failed to delete record')</script>";
}
?>