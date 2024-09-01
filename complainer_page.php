<?php

session_start();

    if(!isset($_SESSION['u_id'])) {
        header("Location:signin.php");
        exit();
    }

?>
<html>
<head>
<title>Crime Reporting System</title>
<link rel="stylesheet" href="http://code.jquery.com/ui/1.9.1/themes/base/jquery-ui.css" />

<style>

@import url("httpss://fonts.googleapis.com/css?family=Roboto");
body {
    background: linear-gradient(to right, #0b2b38 0%, #5f9cb5 50%, #1d3d49 99%);
}

.signup-form {
    font-family: "Roboto", sans-serif;
    width: 750px;
    margin: 30px auto;
	margin-left:30%;
    background: linear-gradient(to right, #ffffff 0%, #fafafa 50%, #ffffff 99%);
    border-radius: 10px;
}
.form-header {
    background-color: #eff0f1;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
}

.form-header h1 {
    font-size: 30px;
    text-align: center;
    color: #666;
    padding: 20px 0;
    border-bottom: 1px solid #cccccc;
}

/*---------------------------------------*/
/* Form Body */
/*---------------------------------------*/
.form-body {
    padding: 10px 20px;
    color: #666;
}

.form-group {
    margin-bottom: 20px;
}


.form-body .label-title {
    color: #1bba93;
    font-size: 17px;
    font-weight: bold;
}


.form-body .form-input {
    font-size: 17px;
    box-sizing: border-box;
    width: 100%;
    height: 34px;
    padding-left: 10px;
    padding-right: 10px;
    color: #333333;
    text-align: left;
    border: 1px solid #d6d6d6;
    border-radius: 4px;
    background: white;
    outline: none;
}

.horizontal-group .left {
    float: left;
    width: 49%;
}

.horizontal-group .right {
    float: right;
    width: 49%;
}

input[type="file"] {
    outline: none;
    cursor: pointer;
    font-size: 13px;
}

#range-label {
    width: 15%;
    padding: 5px;
    background-color: #1bba93;
    color: white;
    border-radius: 5px;
    font-size: 17px;
    position: relative;
    top: -8px;
}
::-webkit-input-placeholder {
    color: #d9d9d9;
}
/*---------------------------------------*/
/* Form Footer */
/*---------------------------------------*/
.form-footer {
    clear: both;
}


/*---------------------------------------*/
/* Form Footer */
/*---------------------------------------*/
.signup-form .form-footer {
    background-color: #eff0f1;
    border-bottom-left-radius: 10px;
    border-bottom-right-radius: 10px;
    padding: 10px 40px;
    text-align: right;
    border-top: 1px solid #cccccc;
}
.form-footer span {
    float: left;
    margin-top: 10px;
    color: #999;
    font-style: italic;
    font-weight: thin;
}
.btn {
    display: inline-block;
    padding: 10px 20px;
    background-color: #1bba93;
    font-size: 20px;
    border: none;
    border-radius: 5px;
    color: black;
    cursor: pointer;
}
.btn:hover {
    background-color: #169c7b;
    color: white;
}


img{
    width: 70%;
	height:70%;
}


#images{
	    width: 95%;
    position: relative;
    margin: auto;
    display: flex;
    justify-content: space-evenly;
    gap: 3px;
    flex-wrap: wrap;
	
}	

	
</style>
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
    --primary-color: #f16d09;
    --panel-color: #d6c3da;
    --text-color: #000;
    --black-light-color: #0c0c0c;
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
    margin-top: 36px;
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


	</style>

</head>
<body>
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


<form class="signup-form" action="complaintcheck.php" method="Post" enctype="multipart/form-data">
	<!-- form header -->
    <div class="form-header">
		<!-- form header -->
			<h1>File a Complaint</h1>
	</div>
	
    <!-- form body -->
	<div class="form-body">
	<!-- Dates -->
			<div class="horizontal-group">
				<div class="form-group left">
					<label for="date" class="label-title">Date of Crime <font color=red>*</font></label>
					<input type="date" name="date" id="datepicker" class="form-input" required />
				</div>
				<div class="form-group right">
					<label for="cdate" class="label-title">Complaining date </label>
					<input type="text" name="cdate" id="datepicker" class="form-input" value="<?php date_default_timezone_set("Asia/Calcutta");echo date("d/m/Y h:i:a"); ?>" />
				</div>
			</div>
			<!-- location -->
		<div class="form-group">
			<label for="text" class="label-title">Crime Location<font color=red>*</font></label>
			<input type="text" name="loc" id="text" class="form-input" placeholder="Enter crime location" required />
		</div>
		
		<!-- typess -->
		<div class="horizontal-group">
			<div class="form-group left">
				<label class="label-title" required>Type of crime <font color=red>*</font></label> 
				<select class="form-input" name="ty" id="level">
					<option value="Antisocial Behaviour">Antisocial Behaviour</option>
					<option value="Arson">Arson</option>
					<option value="Burglary">Burglary</option>
					<option value="Childhood Abuse">Childhood Abuse</option>
					<option value="Cybercrime and Online fraud">Cybercrime and Online fraud</option>
					<option value="Domestic Abuse">Domestic Abuse</option>
					<option value="Fraud">Fraud</option>
					<option value="Modern Slavery">Modern Slavery</option>
					<option value="Murder">Murder</option>
					<option value="Rape and Sexual Assault">Rape and Sexual Assault</option>
					<option value="Robbery">Robbery</option>
					<option value="Sexual Harassment">Sexual Harassment</option>
					<option value="Stalking">Stalking </option>
				</select>
			</div>
			
		<!-- culprit-->
			<div class="form-group right">
					<label for="text" class="label-title">Culprit(if any)</label>
					<input type="text" name="cul" id="text" class="form-input" placeholder="Enter culprit details"  />
			</div>
			
		</div>
		
		
		<!-- picture-->
			<div class="form-group left">
				<label for="file-input" class="label-title">Upload Crime-site Picture/Video</label> 
				<input type="file" id="file-input" name="file" accept="image/gif, image/jpeg, image/jpg, image/png, videos/*" onchange="preview()"/>
				<div id="images"></div>
			

			
			</div>
		
		
		
		<!-- desc -->
		
		<div class="form-group">
			<label for="choose-file" class="label-title">Crime Description  <font color=red>*</font></label>
			<textarea class="form-input" name="des" rows="4" cols="50" style="height: auto;resize:vertical;"></textarea>
		</div>

		
	</div>
	
   <!-- form footer -->
<div class="form-footer">
    <span>Fill all valid details</span>
    <button type="submit" name="submit" class="btn">Submit</button>
</div>
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
</style>
</body>

<script>
let fileInput = document.getElementById("file-input");
let imageContainer = document.getElementById("images");


function preview(){
    imageContainer.innerHTML = "";


    for(i of fileInput.files){
        let reader = new FileReader();
        let figure = document.createElement("figure");
        let figCap = document.createElement("figcaption");
        figCap.innerText = i.name;
        figure.appendChild(figCap);
        reader.onload=()=>{
            let img = document.createElement("img");
            img.setAttribute("src",reader.result);
            figure.insertBefore(img,figCap);
        }
        imageContainer.appendChild(figure);
        reader.readAsDataURL(i);
    }
}
</script>
</html>

