
<?php
 include ('connection.php'); 

session_start();

   
	  $u_id=$_SESSION['u_id'];
        
        $result=mysqli_query($conn,"SELECT a_no FROM user where u_id='$u_id' ");
        $q2=mysqli_fetch_assoc($result);
        $aadhrno=$q2['a_no'];
	//print_r($aadhrno);
 
	if(isset($_POST['submit']))
	{

		$crimedate = $_POST['date'];
		$complaintdate = $_POST['cdate']; 
		$loc = $_POST['loc']; 
		$type = $_POST['ty'];    
		$cul = $_POST['cul']; 
		$des = $_POST['des']; 
		$img = $_FILES['file']['name'];
		
		//print_r($file);
		$que ="insert into complaint(a_no,location,type_crime,crimedate,complaintdate,culprit,description,image) values('$aadhrno','$loc','$type','$crimedate','$complaintdate','$cul','$des','$img')";
			$ret = mysqli_query($con,$que);	
		
	
		
		if($ret)
				{
					move_uploaded_file($_FILES['file']['tmp_name'], "uploads/$img");
				echo "<script>alert('Records uploaded')</script>";
				echo  "<div class='form'>
                  <p class='link'><a href='home.php' >Click here</a> to go back to Homepage. </p>
                  </div>";
				}
				else
				{
					echo "<script>alert('Records not uploaded')</script>";
					 echo("Error description: " . mysqli_error($con));
					
					echo "crime date:"+$crimedate;
					echo "complaint date:"+$complaintdate;
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







