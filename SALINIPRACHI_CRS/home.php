<?php 
session_start();

include("headerfooter.php"); 
?>	
	
<html>
<head>
	<title>Crime Reporting System</title>
	<link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: Bookman Old Style;}
.w3-bar,h1,button {font-family: Bookman Old Style;}
.fa-anchor,.fa-coffee {font-size:200px}
header{
	height:81%;
	
	
}
</style>
	<style>
	 
	.faq{
	 padding:10px;
	background-color:#FFDAB9;
	font-family:Georgia;
	width:500px;
	opacity:0.6;
	height:380px;
	

		
	}
	.faq ul{

		font-size:20px;
		font-weight:bold;
		
	}
	ul li{
		padding-bottom:22px;
	}
      li a{
		color:black; 
	  }
	  a:hover
	  {
		  text-decoration:none;
		 color:crimson;
		
	  }
	  
	  .contents{
		  
		  margin-top:-35%;
		  width:700px;
		  float:right;
		  font-family:Georgia;
		  font-size:20px;
		
	  }
	  
	  h2{
		  font-family:Georgia;
		  font-size:28px;
		font-weight:bold;
	  }
	  
	  
	   button a{
		font-family:Georgia;
		  font-size:30px;
		font-weight:bold;
		color:red;
		
		
		
	  }
	   button{
		  border-radius:80px;
		  padding:10px;
		   background-color:whitesmoke;
		
	  }
	  .faq ul button a{
		  text-decoration:none;
	  }
	</style>
</head>
<body>

<!-- Header -->
<header class="w3-container" style="padding:128px 16px;background-image:url(homebg.jpg);background-size:100%;background-repeat:no-repeat;">
  <h1 class="w3-margin w3-jumbo" style="font-weight:bold; letter-spacing:0;font-style:Georgia">It's Our Pride To Serve You!!</h1>
  <button><a href="complainer_page.php">File A Complaint</a></button>
</header>


<!-- First Grid -->
<div class="w3-row-padding w3-padding-64 w3-container">
  <div class="w3-content">
    <div class="w3-twothird">
      <h1>How can I have a first information report (FIR)register at a police station ?</h1>
      
      <p class="w3-text-grey">
	   <li>	    An FIR is an account of a cognizable (i.e. over which police has jurisdiction) offence that is entered in a particular format in a register at the police station. Every person has a right to report any matter at the concerned police station and have a case registered in the form of an FIR. The matter may be reported orally or in writing to an officer at a police station or on patrol. An officer who receives an oral report shall reduce it to writing and cause it to be recorded in the FIR register. A certified copy of the FIR, signed by an officer bearing the stamp of the police station is to be provided to the person who reports the crime. </li><br>
		<li>No police officer has the authority to refuse registration of a case. In case a crime is reported and a case is not registered, the person who reports the crime must inform the Sub-Divisional Police Officer or the Superintendent of Police or the District Police Officer responsible for the area. </li>
			</p>
    </div>

    <div class="w3-third w3-center">
      <i class="fa fa-pencil-square-o w3-padding-60 w3-text-red" style="font-size:250"></i>
    </div>
  </div>
</div>

<!-- Second Grid -->
<div class="w3-row-padding w3-light-grey w3-padding-64 w3-container">
  <div class="w3-content">
    <div class="w3-third w3-center">
      <i class="fa fa-pencil-square w3-padding-60 w3-text-red w3-margin-right" style="font-size:250"></i>
    </div>

    <div class="w3-twothird">
      <h1>Where should I report a crime?</h1>
      
      <p class="w3-text-grey">
	 An offence or crime is to be reported at the nearest Police Post,Police Station or to any Police Officer found nearest to the place of occurrence.
	If the circumstances are such that delay in reporting the crime would lead to escape of a criminal or any immediate help is required, the matter may be reported on Police Emergency Telephone No. 100.</p>
    </div>
  </div>
</div>





<!-- third Grid -->
<div class="w3-row-padding w3-padding-64 w3-container">
  <div class="w3-content">
    <div class="w3-twothird">
      <h1>What is Section 144 ?</h1>
      
      <p class="w3-text-grey">
	  <li>Section 144 of the Code of Criminal Procedure (CrPC) empowers a district government to issue orders in public interest that may place a ban on an activity for a specific period of time extending to two months. Such a ban is enforced by the police who register cases under section 188 of the Pakistan Penal Code for violations of the ban. Section 188 carries a maximum penalty of six months in prison or a fine of up to Rs. 1000 or both. The ban may lifted by the district government at any time or re-imposed after the expiry of the two-month period.</li></p>
    </div>

    <div class="w3-third w3-center">
      <i class="fa fa-university w3-padding-60 w3-text-red" style="font-size:250"></i>
    </div>
  </div>
</div>

<!-- fourth Grid -->
<div class="w3-row-padding w3-light-grey w3-padding-64 w3-container">
  <div class="w3-content">
    <div class="w3-third w3-center">
      <i class="fa fa-user w3-padding-60 w3-text-red w3-margin-right"style="font-size:250"></i>
    </div>

    <div class="w3-twothird">
      <h1>How can I become Police Officer ?</h1>
      
      <p class="w3-text-grey">
	 As Constable Apply in DPO office Gujrat after advertisement in the press. Terms and conditions and the procedure will be mentioned in the ad.
           
				As ASI, SI, Inspector apply at the respective forum mentioned in the ad. Terms and conditions and procedure will be mentioned in the ad.
				
				
				As ASP apply through Federal Public Service Commission 
        In competitive examination for Central Superior Services, 
        terms and conditions and procedure is mentioned in the ad. And FPSC rules and regulation.
				
				</p>
    </div>
  </div>
</div>



<!-- Fifth Grid -->
<div class="w3-row-padding w3-padding-64 w3-container">
  <div class="w3-content">
    <div class="w3-twothird">
      <h1>What to do in faulty investigation ?</h1>
     
      <p class="w3-text-grey">
	 In case of faulty investigation application can be submitted to concerned DSP Investigation, SP Investigation or DPO. For the purpose of change of investigation application can be submitted in the DPO Office which will be considered in the meeting of the committee for change of investigation.
				</p>
    </div>

    <div class="w3-third w3-center">
      <i class="fa fa-shield w3-padding-60 w3-text-red" style="font-size:250"></i>
    </div>
  </div>
</div>

<!-- Sixth Grid -->
<div class="w3-row-padding w3-light-grey w3-padding-64 w3-container">
  <div class="w3-content">
    <div class="w3-third w3-center">
      <i class="fa fa-ban w3-padding-60 w3-text-red w3-margin-right" style="font-size:250"></i>
    </div>

    <div class="w3-twothird">
      <h1>What to do in Police harassment ?</h1>
      <p class="w3-text-grey">
	  The matter should be brought to the notice of senior police officers through complaint cell DPO office, assistance from District Public Safety Commission and Judiciary can also be sought by moving an application in the concerned forum.
				
				</p>
    </div>
  </div>
</div>






		

<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-opacity">  
  <div class="w3-xlarge w3-padding-32">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
 </div>
 <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">ICCS</a></p>
</footer>				
	
</body>
<script>
function content()
{
document.getElementById("contents").style.display="block";

}
</script>


<script>
// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}
</script>

</html>