<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE); 
error_reporting(E_ALL ^ E_NOTICE); 
error_reporting(E_ALL ^ E_WARNING);
error_reporting(0);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Police completed complaint</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
	

</head>
<style>
h2{
	  font-family:Georgia;
		  font-size:50px;
	
			text-align:center;
 
}
</style>
<body>
<br><br><br>
 <?php
  /* session_start();
    if(!isset($_SESSION['x']))
        header("location:policelogin.php");
   */ 
    $conn=mysqli_connect("localhost","root","","crime_portal",3306);
    if(!$conn)
    {
        die("could not connect".mysqli_connect());
    }
   // mysqli_select_db("crime_portal",$conn);
      
    
    $p_id=$_SESSION['pol'];

     $result=mysqli_query($conn,"SELECT * FROM complaint where pol_status='Criminal Charged' order by c_id desc");
    ?>
	
	<nav  class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      
      <a class="navbar-brand" href="home.php"><b>Crime Portal</b></a>
    </div>
    <div id="navbar" class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li ><a href="official_login.php">Official Login</a></li>
        <li ><a href="policelogin.php">Police Login</a></li>
        <li><a href="police_pending_complain.php">Police Home</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="police_pending_complain.php">Pending Complaints</a></li>
        <li  class="active" ><a href="police_complete.php">Completed Complaints</a></li>
        <li><a href="p_logout.php">Logout &nbsp <i class="fa fa-sign-out" aria-hidden="true"></i></a></li>
      </ul>
    </div>
  </div>
 </nav>
    
		
 <h2>Completed Complaints</h2><br>   
 <div style="padding:50px;margin-top:2%;">
   <table class="table table-bordered">
    <thead class="thead-dark" style="background-color: black; color: white;">
      <tr>
        <th scope="col">Complaint Id</th>
        <th scope="col">Type of Crime</th>
        <th scope="col">Date of Crime</th>
          <th scope="col">Location of Crime</th>
          <th scope="col">Aadhar No.</th>
          <th scope="col">Address</th>
        
      </tr>
    </thead>

<?php
      while($rows=mysqli_fetch_assoc($result)){
    ?> 

    <tbody style="background-color: white; color: black;">
      <tr>
        <td><?php echo $rows['c_id']; ?></td>
        <td><?php echo $rows['type_crime']; ?></td>     
        <td><?php echo $rows['crimedate']; ?></td>   
        <td><?php echo $rows['location']; ?></td>
          <td><?php echo $rows['a_no']; ?></td>
          <td><?php echo $rows['location']; ?></td>
                  
      </tr>
    </tbody>
    
    <?php
    } 
    ?>
  
</table>
 </div>
<div class="fixed-footer">
        <div class="container">Copyright &copy; 2020 Crime Reporting System</div>        
</div>

</body>
<style>
.fixed-footer{
       width:100%;
	   position:fixed;
	   bottom:0;
	   background:#202020;
	   padding:4px;
	   color:white;
	   
    }
	 .container{
     font-size:18px;
		text-align:center;
    }
</style>
 <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.js"></script>
 <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>