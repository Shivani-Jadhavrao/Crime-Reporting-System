<!DOCTYPE html>
<html>
<head>

 
    <?php
    session_start();
    
   include('connection.php');
	
	 // mysqli_select_db("crime_portal",$conn);
    
  
    
        $u_id=$_SESSION['u_id'];
        $result1=mysqli_query($con,"SELECT a_no FROM user where u_id='$u_id'");
      
        $q2=mysqli_fetch_assoc($result1);
        $a_no=$q2['a_no'];
		
    
    
    
    if(isset($_POST['s2']))
    {
        if($_SERVER["REQUEST_METHOD"]=="POST")
        {
            
            $cid=$_POST['cid'];

            $_SESSION['cid']=$cid;
            
            $resu=mysqli_query($conn,"SELECT a_no FROM complaint where c_id='$cid'");
            $qn=mysqli_fetch_assoc($resu);
            
            
           if($qn['a_no']==$q2['a_no'])
           {
                header("location:complainer_complain_details.php"); 
           }
            else
            {
              $message = "Not Your Case";
              echo "<script type='text/javascript'>alert('$message');</script>";
            }
        }
    }
    
    
    
    $query="select * from complaint where a_no='$a_no' order by c_id desc";
    $result=mysqli_query($conn,$query);  
    ?>
    
	<title>Complaint History</title>
    
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
                  alert("Space Not Allowed");
            }
        }
    </script>



 <style>
	
	/* ===== Google Font Import - Poppins ===== */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&display=swap');
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

:root{
    /* ===== Colors ===== */
    --primary-color: #0E4BF1;
    --panel-color: #FFF;
    --text-color: #000;
    --black-light-color: #707070;
    --border-color: #e6e5e5;
    --toggle-color: #DDD;
    --box1-color: #4DA3FF;
    --box2-color: #FFE6AC;
    --box3-color: #E7D1FC;
    --title-icon-color: #fff;
    
    /* ====== Transition ====== */
    --tran-05: all 0.5s ease;
    --tran-03: all 0.3s ease;
    --tran-03: all 0.2s ease;
}


nav{
    position: fixed;
    top: 0;
    left: 0;
    height: 100%;
    width: 250px;
    padding: 10px 14px;
    background-color: var(--panel-color);
    border-right: 1px solid var(--border-color);
    transition: var(--tran-05);
}

nav .logo-name{
    display: flex;
    align-items: center;
}
nav .logo-image{
    display: flex;
    justify-content: center;
    min-width: 45px;
}
nav .logo-image img{
    width: 40px;
    object-fit: cover;
    border-radius: 50%;
}

nav .logo-name .logo_name{
    font-size: 24px;
    font-weight: 700;
    color: var(--text-color);
    margin-left: 14px;
    transition: var(--tran-05);
	   font-family: Bookman Old Style;
}
nav.close .logo_name{
    opacity: 0;
    pointer-events: none;
}
nav .menu-items{
    margin-top: 40px;
    height: calc(100% - 90px);
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}
.menu-items li{
    list-style: none;
}
.menu-items li a{
    display: flex;
    align-items: center;
    height: 50px;
    text-decoration: none;
    position: relative;
}
.nav-links li a:hover:before{
    content: "";
    position: absolute;
    left: -7px;
    height: 5px;
    width: 5px;
    border-radius: 50%;
    background-color: var(--primary-color);
}
body.dark li a:hover:before{
    background-color: var(--text-color);
}
.menu-items li a i{
    font-size: 24px;
    min-width: 45px;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--black-light-color);
}
.menu-items li a .link-name{
    font-size: 18px;
    font-weight: 400;
	   font-family: Bookman Old Style;
    color: var(--black-light-color);    
    transition: var(--tran-05);
}
nav.close li a .link-name{
    opacity: 0;
    pointer-events: none;
}
.nav-links li a:hover i,
.nav-links li a:hover .link-name{
    color: var(--primary-color);
}
body.dark .nav-links li a:hover i,
body.dark .nav-links li a:hover .link-name{
    color: var(--text-color);
}
.menu-items .logout-mode{
    padding-top: 10px;
    border-top: 1px solid var(--border-color);
}
.menu-items .mode{
    display: flex;
    align-items: center;
    white-space: nowrap;
}
.tab{
	margin-left:15%;
}

	</style>
</head>    
<body style="background-color: #dfdfdf">

     
<nav>
        <div class="logo-name">
            <span class="logo_name">Crime Report</span>
        </div>

        <div class="menu-items">
            <ul class="nav-links">
                <li><a href="complainer_page.php">
                    <i class="uil uil-estate"></i>
                    <span class="link-name">Log New Complaint</span>
                </a></li>
                <li><a href="complainer_complain_history.php">
                    <i class="uil uil-files-landscapes"></i>
                    <span class="link-name">Complaint History</span>
                </a></li>
          
            </ul>
            
            <ul class="logout-mode">
                <li><a href="logout.php">
                    <i class="uil uil-signout"></i>
                    <span class="link-name">Logout</span>
                </a></li>
            </ul>
        </div>
    </nav>


    <div class="tab" style="padding:100px;">
      <table class="table table-bordered" cellspacing=8 style="text-align:center;padding:70px;">
       <thead class="thead-dark" style="background-color: black;color: white;">
         <tr>
          <th scope="col">Complaint Id</th>
          <th scope="col">Type of Crime</th>
          <th scope="col">Date of Crime</th>
          <th scope="col">Location of Crime</th>
		  <th scope="col">Culprit</th>
		  <th scope="col">Description of Crime</th>
		  <th scope="col">Crime Site Images</th>
		  
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
		<td><?php echo $rows['culprit']; ?></td>
		<td><?php echo $rows['description']; ?></td>
		<td><?php echo "<img src='uploads/{$rows['image']}' height=200 width=200 />"; ?></td>		
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
</html>