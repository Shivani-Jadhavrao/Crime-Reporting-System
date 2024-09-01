<?php
    
    // Include file which makes the
    // Database Connection.
    include ('connection.php');   
	
	
	$name = $_POST['name'];
	$email = $_POST['email']; 
	$mob = $_POST['mob']; 
	$addr = $_POST['addr'];    
	$gender = $_POST['gender']; 
    $password = $_POST['password']; 
    $cpassword = $_POST['cpassword'];
	$a_no=$_POST['aadhar'];
    
	if(($password == $cpassword)) 
	{
    
	//$hashPassword = md5( $password );
    $sql = "insert into user values('$name','$email','$cpassword','$addr','$a_no','$gender','$mob')";
	$result = mysqli_query($con, $sql);
	
		if(!$result)
		{
			echo "<div class='form'>
                  <h3>Error in signing up...</h3><br/>
                  <p class='link'>Click here to <a href='signup.php'>Signup</a> again.</p>
                  </div>";
				 echo"Error : " . mysqli_error($con);
		}
		else
		{

				echo "<div class='form'>
                  <h3>You are signed up successfully.</h3><br/>
                  <p class='link'>Click here to <a href='signin.php'>Login</a></p>
                  </div>";
				  
				  
				 
				  
		}
	}
	else 
	{ 
        echo "<div class='form'>
                  <h3>Passwords do not match</h3><br/>
                  <p class='link'>Click here to <a href='signup.php'>Signup</a> again.</p>
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