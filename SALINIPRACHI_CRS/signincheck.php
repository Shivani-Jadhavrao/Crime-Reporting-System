<?php
session_start();
  include('connection.php');   
	
	$username = $_POST['username']; 
	$password = $_POST['password'];  

	$query = "SELECT * FROM user where u_id='$username' and u_pass='$password' ";
	$result = mysqli_query($con, $query);
	$count = mysqli_num_rows($result);
    if ($count > 0)
	{
		/*
		echo  "<div class='form'>
                  <h3>You have SignedIn</h3><br/>
                  <p class='link'>Click here to <a href='home.php'>Homepage</a></p>
                  </div>";
				  */
			  $_SESSION['u_id'] = $username;
			
			//  print($_SESSION['u_id']);
            //Redirect to user homepage
            header('Location:home.php');
			
		  
	}
	else
	{	
				echo  "<div class='form'>
                  <h3>Incorrect Username/password.</h3><br/>
                  <p class='link'>Click here to <a href='signin.php'>Signin</a> again.</p>
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