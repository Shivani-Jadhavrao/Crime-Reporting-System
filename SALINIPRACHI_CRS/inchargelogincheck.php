
    <?php
	session_start();
    $conn=mysqli_connect("localhost","root","","crime_portal",3306);
    if(!$conn)
    {
        die("could not connect".mysqli_connect_error());
    }
   // mysqli_select_db("crime_portal",$conn);
   
        $name=$_POST['uid'];
        $pass=$_POST['pswd'];
        $result=mysqli_query($conn,"SELECT i_id,i_pass FROM police_station where i_id='$name' and i_pass='$pass' ");
     
        $_SESSION['email']=$name;
        if(!$result || mysqli_num_rows($result)==0)
        {
             echo  "<div class='form'>
                  <h3>Incorrect Username/password.</h3><br/>
                  <p class='link'>Click here to <a href='inchargelogin.php'>Signin</a> again.</p>
                  </div>";
          //   echo "<script type='text/javascript'>alert('Invalid userid or password');</script>";
	
              }
        else 
        {

         header('Location:incharge_complain_page.php?i_id='.$name);
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
 
  