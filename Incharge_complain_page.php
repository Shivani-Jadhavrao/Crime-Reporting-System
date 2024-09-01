<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE); 
error_reporting(E_ALL ^ E_NOTICE); 
error_reporting(E_ALL ^ E_WARNING);
error_reporting(0);
?>
<br><br><br><br>
<?php
INCLUDE('connection.php');
$i_id=$_GET['i_id'];
	

session_start();
  /*  if(!isset($_SESSION['x']))
        header("location:inchargelogin.php");
 */
	//$_SESSION['x']=$i_id;
	
	$conn=mysqli_connect("localhost","root","","crime_portal",3306);
    if(!$conn)
    {
        die("could not connect".mysqli_connect_error());
    }
	$_SESSION['email']=$i_id;
	

?>
<html>
<head>
<title>Incharge Homepage</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
	
    <script>
     function f1()
        {
          var sta2=document.getElementById("ciid").value;
          var x2=sta2.indexOf(' ');
     if(sta2!="" && x2>=0)
     {
        document.getElementById("ciid").value="";
        alert("Blank Field not Allowed");
      }       
}
</script>
    
</head>
<body style="background-color: #dfdfdf">
	<nav  class="navbar navbar-d efault navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      
      <a class="navbar-brand" href="home.php"><b>Crime Portal</b></a>
    </div>
    <div id="navbar" class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li ><a href="official_login.php">Official Login</a></li>
        <li ><a href="inchargelogin.php">Incharge Login</a></li>
        <li class="active"><a href="Incharge_complain_page.php">Incharge Home</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="active" ><a href="Incharge_complain_page.php">View Complaints</a></li>
        <li ><a href="incharge_view_police.php?i_id=<?php echo $_SESSION['email']?>">Police Officers</a></li>
        <li><a href="inc_logout.php">Logout &nbsp <i class="fa fa-sign-out" aria-hidden="true"></i></a></li>
      </ul>
    </div>
  </div>
 </nav>
      
    <br><br><br>
    
 <div style="padding:50px;">
   <table class="table table-bordered">
    <thead class="thead-dark" style="background-color: black; color: white;">
      <tr>
        <th scope="col">Complaint Id</th>
        <th scope="col">Type of Crime</th>
        <th scope="col">Date of Crime</th>
        <th scope="col">Location</th>
        <th scope="col">Complaint Status</th>
          <th scope="col">Police ID</th>
      </tr>
    </thead>

            <?php
            $qry="select * from police_station";
			$result1=mysqli_query($conn,$qry);
    $q2=mysqli_fetch_assoc($result1);
    $location=$q2['location'];
 
 
 
 
				$query="select * from complaint order by c_id desc";
				$result=mysqli_query($conn,$query); 
				$total=mysqli_num_rows($result);

				if($total!=0)
				{
							
              while($rows=mysqli_fetch_assoc($result)){

             ?> 
            <tbody style="background-color: white; color: black;">
      <tr>
        <td><?php echo $rows['c_id'];?></td>
        <td><?php echo $rows['type_crime'];?></td>     
        <td><?php echo $rows['crimedate'];?></td>
          <td><?php echo $rows['location'];?></td>
          <!-- <td><select id="inc_cstat-<?php echo $rows['c_id'];?>" onload="buttonCall()" name="inc_cstatus-<?php echo $rows['c_id'];?>">
                <option value="Unassigned">Unassigned</option>
                <option value="Investigating">Investigating</option>
                <option value="Completed">Completed</option>
                <option value="Assigned">Assigned</option>
              </select>
              <script>
                function buttonCall(){
                  console.log(selectBtn);
                  console.log(<?php $rows['inc_status']?>); 
                  var selectBtn = document.getElementById("inc_cstat-<?php echo $rows['c_id'];?>").value="<?php $rows['inc_status']?>"; 
                  
                }
              </script> -->
              </td>
          <td><?php echo $rows['p_id']; ?></td>
      </tr>
    </tbody>
    
    <?php
    } 
				}
				else
				{
						echo "<script>alert('No record Found in your scope')</script>";
				}
    ?>
  
</table>
<div class="fixed-footer">
        <div class="container">Copyright &copy; 2020 Crime Reporting System</div>        
</div>

</body>
<style>
.fixed-footer{
       width:120%;
	   margin-left:-9%;
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
    
	
	