<?php

   
    // Include file which makes the
    // Database Connection.
    include 'connection.php';
	
     session_start();
    $username = $_POST['username']; 
	
    $npassword = $_POST['npassword'];
 //$hashPassword = md5( $npassword );
    $sql = "UPDATE user SET u_pass = '$npassword' WHERE u_id = '$username' ";
	
	$result = mysqli_query($con, $sql);
	//$rows = mysqli_num_rows($result);
		if($result)
		{
			echo "<div class='form'>
                  <h3>Password updated successfully.</h3><br/>
				   <p><center><a href='logout.php'>Logout</a></center></p>
                  </div>";
		}
		else
		{
			echo "<div class='form'>
                  <h3>Error in resetting password...</h3><br/>
                  </div>";
		}
	
			
?>

<html>
<head>
    <style>
	h3 {
    font-weight: normal;
    text-align: center;
}
.form {
    margin: 50px auto;
	text-align: center;
    width: 300px;
    padding: 30px 25px;
    background: AntiqueWhite;
	font-size:20px;
	box-shadow:4px 4px 4px 2px black;
}
p{
	font-size:20px;
}
	</style>
</head>
</html>