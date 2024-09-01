 <?php

if(isset($_POST['s']))
{
    session_start();
    $_SESSION['x']=1;
    $conn=mysqli_connect("localhost","root","","crime_portal");
    if(!$conn)
    {
        die("could not connect".mysqli_connect_error());
    }

    
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $name=$_POST['uid'];
        $pass=$_POST['pswd'];
        $result=mysqli_query($conn,"SELECT h_id,h_pass FROM head where h_id='$name' and h_pass='$pass' ");
        
        if(mysqli_num_rows($result)==0)
        {
            echo  "<div class='form'>
                  <h3>Incorrect Username/password.</h3><br/>
                  <p class='link'>Click here to <a href='inchargelogin.php'>Signin</a> again.</p>
                  </div>";
          //   echo "<script type='text/javascript'>alert('Invalid userid or password');</script>";
	
        }
        else 
        {
          header("location:headHome.php");
        }
    }                
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
 
  
