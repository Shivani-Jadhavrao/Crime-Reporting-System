 <?php

   // session_start();
    include('connection.php');
    
        $name=$_POST['uid'];
        $pass=$_POST['pswd'];
	 $_SESSION['pol']=$name;   	
		
	$query = " SELECT * FROM police where p_id='$name' and p_pass='$pass' ";
	$result = mysqli_query($con, $query);
	$count = mysqli_num_rows($result);
    if ($count > 0)
	{
		 header('Location:police_pending_complain.php?p_id='.$_SESSION['pol']);
  
	}
	else
	{	
echo  "<div class='form'>
                  <h3>Incorrect Username/password.</h3><br/>
                  <p class='link'>Click here to <a href='policelogin.php'>Signin</a> again.</p>
                  </div>";
          //   echo "<script type='text/javascript'>alert('Invalid userid or password');</script>";
	
        

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
 
 