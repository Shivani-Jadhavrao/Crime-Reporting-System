<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE); 
error_reporting(E_ALL ^ E_NOTICE); 
error_reporting(E_ALL ^ E_WARNING);
error_reporting(0);
?>
<!DOCTYPE html>
<html>
<head>


	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

<style>
h2{
	  font-family:Georgia;
		  font-size:50px;
	
			text-align:center;
 
}
</style>
</head>
<body>
	<nav  class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
     
      <a class="navbar-brand" href="home.php"><b>Crime Portal</b></a>
    </div>
    <div id="navbar" class="collapse navbar-collapse">
      
      <ul class="nav navbar-nav">
        <li><a href="official_login.php">Official Login</a></li>
           
        <li><a href="headlogin.php">Head Login</a></li>
        <li class="active"><a href="head_view_police_station.php">HQ Home</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="headHome.php">View Complaints</a></li>
		<li class="active"><a href="headuserslist.php">Users</a></li>
        <li  ><a href="head_view_police_station.php">Police Station</a></li>
        <li><a href="h_logout.php">Logout &nbsp <i class="fa fa-sign-out" aria-hidden="true"></i></a></li>
      </ul>
    </div>
  </div>
 </nav>
   

  <br><br><br>
<h2>User's List</h2><br> 
<div style="padding:50px;">
   <table class="table table-bordered">
    <thead class="thead-dark" style="background-color: black; color: white;">
      <tr>
        <th>MAIL_ID</th>
		<th>NAME</th>
		<th>ADDRESS</th>
		<th>AADHAR_NO</th>
		<th>GENDER</th>
		<th>MOBILE</th>
	</tr>
    </thead>

<?php
include('connection.php');

$query="select * from user";
$result=mysqli_query($con,$query);
$row=mysqli_fetch_assoc($result);


error_reporting(0);

$query="select * from user";
$data=mysqli_query($con,$query);
$total=mysqli_num_rows($data);

if($total!=0)
{
	while($result=mysqli_fetch_assoc($data))
	{
		echo "
		<tr>
		<td>".$result['u_id']."</td>
		<td>".$result['u_name']."</td>
		<td>".$result['u_addr']."</td>
		<td>".$result['a_no']."</td>
		<td>".$result['gen']."</td>
		<td>".$result['mob']."</td>
		<td><a href=delete.php?u_id=".$result['u_id']." ><i class='fa fa-trash' style='font-size:26px;'/></a></td>
		</tr>";
	}
}
else
{
	echo "No record Found";
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