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

	<link href="complainer_page.css" rel="stylesheet" type="text/css" media="all" />
	

	<?php
   /* session_start();
    if(!isset($_SESSION['x']))
        header("location:inchargelogin.php");
   */ 
    $con=mysqli_connect('localhost','root','','crime_portal',3306);
    if(!$con)
    {
        die('could not connect: '.mysqli_connect_error());
    }
   //  mysqli_select_db("crime_portal");

  
if(isset($_POST['s'])){
    
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $p_name=$_POST['police_name'];
        $p_id=$_POST['police_id'];
        $spec=$_POST['police_spec'];
        $p_pass=$_POST['password'];
		$location=$_POST['location'];

    $reg="insert into police values('$p_name','$p_id','$spec','$location','$p_pass')";
    
        $res=mysqli_query($con,$reg);
        if(!$res)
         {
          $message = "User already Exists.";
          echo "<script type='text/javascript'>alert('$message');</script>";
        }
        else
        {
          $message = "Police Added Successfully";
          echo "<script type='text/javascript'>alert('$message');</script>";
        }
    }
}
?>
    
     <script>
     function f1()
    {
      var sta=document.getElementById("pname").value;
      var sta1=document.getElementById("pid").value;
      var sta2=document.getElementById("pspec").value;
      var sta3=document.getElementById("pas").value;
      var x=sta.trim();
      var x1=sta1.indexOf(' ');
      var x2=sta2.trim();
      var x3=sta3.indexOf(' ');
  if(sta!="" && x==""){
    document.getElementById("pname").value="";
    document.getElementById("pname1p").focus();
      alert("Space Not Allowed");
        }
        
         else if(sta1!="" && x1>=0){
    document.getElementById("pid").value="";
    document.getElementById("pid").focus();
      alert("Space Not Allowed");
        }
        else if(sta2!="" && x2==""){
    document.getElementById("pspec").value="";
    document.getElementById("pspec").focus();
      alert("Space Not Allowed");
        }
        else if(sta3!="" && x3>=0){
    document.getElementById("pas").value="";
    document.getElementById("pas").focus();
      alert("Space Not Allowed");
        }      
}
</script>
</head>

<body style="background-size: cover;
    background-image: url(home_bg1.jpeg);
    background-position: center;">
	
	<nav  class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
     
      <a class="navbar-brand" href="home.php"><b>Home</b></a>
    </div>
    <div id="navbar" class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li ><a href="official_login.php">Official Login</a></li>
        <li><a href="incharge_view_police.php">Incharge Home</a></li>
      </ul>
     
      <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="police_add.php">Log Police Officer</a></li>
       <li><a href="inc_logout.php">Logout &nbsp <i class="fa fa-sign-out" aria-hidden="true"></i></a></li>
      </ul>
    </div>
  </div>
 </nav>

	<h2>Log Police Officer</h2>	
	<form name=myform method=post>

<table>

<tr>
<td>Police Name : </td> 
<td><input type="text"  name="police_name" placeholder="Police Name" required="" id="pname" onfocusout="f1()"/></td>
</tr>
<br>
<tr>
<td>Police Id : </td>
<td><input type="text"  name="police_id" placeholder="Police Id" required="" id="pid" onfocusout="f1()"/></td>
</tr>


<tr>
<td>Specialist : </td>
<td><input type="text"  name="police_spec" placeholder="Specialist" id="pspec" required onfocusout="f1()"/></td>
</tr>

<tr>
<td>Location of Police Officer : </td>
<td><input type="text" required  name="location" placeholder="Location" onfocusout="f1()" ></td>
</tr>


<tr>
<td>Password : </td>
<td><input type="text"  name="password" placeholder="Password" id="pas" onfocusout="f1()" required/></td>
</tr>


</table>
<center><input type="submit" value="Submit" name="s">
&nbsp&nbsp&nbsp&nbsp<input type=reset value=Clear></center><br><br>

</form>
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
	h2		{
	
		text-transform:uppercase;
		font-family:Times New Roman;
		margin-top:150px;
		font-weight:bolder;
		text-align:center;
		margin-left:4%;
		
		}
		

form	{
		font-size:20px;	
		color:black;
		font-family:Georgia;
		text-align:left;
		border:2px solid grey;
		width:450px;
		height:300px;
		margin-left:35%;
	
		box-shadow:1px 2px 4px;	
		padding:10px;
		background-color:white;
		opacity:0.8;
	}


table {
                
				border-spacing:15px;
				border:3px solid transparent;
				padding:20px;
            }
	
form input[type=submit]{
		background-color:green;
		color:white;
		font-family:Baskerville Old Face;
		font-size:18px;

		}	
		
form input[type=submit]:hover{
		text-decoration:underline;
		}
		
form input[type=reset]{
		background-color:red;
		color:white;
		font-family:Baskerville Old Face;
		font-size:18px;

		}	
		
form input[type=reset]:hover{
		text-decoration:underline;
		}

</style>	
 <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.js"></script>
 <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>