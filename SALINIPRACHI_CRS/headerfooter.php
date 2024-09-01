
<html>
<head>
	<title>Crime Reporting System</title>
	<link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Arvo&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/> 
	<style>
	 
    .container{
     font-size:20px;
		text-align:center;
    }
  .fixed-footer{
       width:100%;
	   position:fixed;
	   bottom:0;
	   background:#202020;
	   padding:2px;
	   color:white;
    }
	
	
	.logo img{
	
		height:100px;
		width:200px;
		
	}
	
	
	.dropbtn {
  background-color: #04AA6D;
  color: white;
  padding: 14px;
  font-size: 22px;
  border: none;
  font-family: Bookman Old Style;
  font-weight:400;
  border-radius:40px;
  width:120px;
  margin-top:16%;
  
}

.dropdown {
  position: relative;
  display: inline-block;
  float:right;
  padding-right:40px;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  font-family: Bookman Old Style;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}
 .fixed-header{
        width: 100%;
        padding:6px;
        background: #6495ed;
        color: #fff;
		font-family:Georgia;
    } 
.tabs{
font-family: Bookman Old Style;

text-align:center;
text-transform:uppercase;	

}

.tabs li{
display:inline;
padding-right:100px;
font-size: 27px;
font-weight:500;
}

a{
	text-decoration:none;
	color:white;
}
	
	</style>
</head>
<body>

<div class="logo">
	<img src="Crime-Reporting.png" />
	
	<div class="dropdown">
		<button class="dropbtn">Login &dtrif;</button>
		<div class="dropdown-content">
			<a href="signin.php">User Login </a>
			<a href="official_login.php">Official Login</a>
		</div>
	</div>
	
	
</div>
<div class="fixed-header">
	<ul class="tabs">
		<li><a href="home.php">Home</a></li>
		<li><a href="contact.php">Contact</a></li>
		<li><a href="about.php">About</a></li>
	</ul>

</div>

<div class="fixed-footer">
        <div class="container">Copyright &copy; 2020 Crime Reporting System</div>        
</div>
</body>
</html>