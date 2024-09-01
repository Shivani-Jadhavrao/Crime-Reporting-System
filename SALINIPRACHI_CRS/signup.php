<!DOCTYPE html>
<html>
<head>
	<title>Crime Reporting System</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/> 

	<link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
<style>

body {
    font-family: Bookman Old Style;
   background:whitesmoke;
	
	
}

input,
button {
    border: none;
    outline: none;
    background: none;
   font-family: Bookman Old Style;
}
form{
	padding:4%;
}
.form {
    position: relative;
    width: 600px;
	
    height: 100%;
    -webkit-transition: -webkit-transform 1.2s ease-in-out;
    transition: -webkit-transform 1.2s ease-in-out;
    transition: transform 1.2s ease-in-out;
    transition: transform 1.2s ease-in-out, -webkit-transform 1.2s ease-in-out;
    padding: 50px 30px 50px;
	border: black;
	box-shadow:4px 4px 4px 2px black;
	margin-left:26%;
	background:ivory;
}

input[type=text], input[type=email], input[type=password] {
    display: block;
    width: 100%;
    margin-top: 5px;
    padding-bottom: 5px;
    font-size: 20px;
    border-bottom: 1px solid rgba(0, 0, 0, 0.4);
    text-align: center;
}


.forgot-pass {
    margin-top: 15px;
    text-align: center;
    font-size: 18px;
    color: red;
	cursor:pointer;
}
.submit, .reset {
    margin-top: 40px;
    margin-bottom: 20px;
	background:crimson;
    text-transform: uppercase;

}
h2 {
    width: 100%;
    font-size: 30px;
    text-align: center;
	color:black;
}

.txt {
    display: block;
    width: 260px;
    margin: 25px auto 0;
  
}

label span {
    font-size: 20px;
    color:black;
	opacity:0.7;
    text-transform: uppercase;
}



button {
	margin-left:17%;
    width: 150px;
    height: 36px;
    border-radius: 30px;
    color: #fff;
    font-size: 20px;
    cursor: pointer;
}
.msg__text{
	font-size:18px;
	text-align:center;
}
label .icon{ 
    transform: translateY(-385%);
    color: grey;
	position: absolute;
	margin-top:76px;
	 left: 180px;
}
.submit{
	background:crimson;
}
.reset{
	background:blue;
}
small{
 font-weight: bold;
    font-size: 20px;
    font-family: Goudy Old Style;
    text-align: center;
	 margin-left: 20%;
	 color:red;
}
	


	</style>
	 
</head>

<body>
    <form action="signupinsert.php" class="formContainer" method=post>
	<div class="form">
		<h2>Create Your Account To Register</h2>
                <label class="txt"> 
					<div class="icon"><i class="fas fa-user"></i></div>
                    <span>Full Name</span>
                    <input type="text" name=name required />
                </label>
                <label class="txt">
					<div class="icon"><i class="fas fa-envelope"></i></div>
                    <span>Email</span>
                    <input type="email" name=email id=email1 required />
                </label>
				<label class="txt">
					<div class="icon"><i class="fas fa-user"></i></div>
                    <span>Aadhar No.</span>
                    <input type="text"  name=aadhar minlength="12" maxlength="12" required pattern="[123456789][0-9]{11}" id="aadh" />
                </label>
				<label class="txt">
					<div class="icon"><i class="fas fa-address-book"></i></div>
                    <span>Mobile No</span>
                    <input type="text" name=mob maxlength=10 pattern="[0-9]{10}" id=mobno title="Enter your valid mobile number" required />
                </label>
				<label class="txt">
					<div class="icon"><i class="fas fa-location-arrow"></i></div>
                    <span>Address</span>
                    <input type="text" name=addr id=addr required />
                </label>
				<label class="txt">
					<div class="icon"><i class="fas fa-male"></i></div>
                    <span>Gender</span><br>
                    <input type="radio" name=gender value="Male" id=male required> <label for=male>MALE</label><br>
					<input type="radio" name=gender  value="Female" id=female required><label for=female> FEMALE</label><br>
					<input type="radio" name=gender  value="Other" id=other required><label for=other> OTHER</label>
					
                </label>
				
                <label class="txt">
					<div class="icon"><i class="fas fa-lock"></i></div>
					<div class="icon"><i class="fa fa-eye-slash" id="togglePassword" style="margin-left:280px;margin-top:0%; cursor: pointer;"></i></div>
			 
                    <span>Password</span>
                    <input type="password" name=password id="id_password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
				title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" />
                </label>
				<label class="txt">
					<div class="icon"><i class="fas fa-lock"></i></div>
					<div class="icon"><i class="fa fa-eye-slash" id="togglePassword1" style="margin-left:280px;margin-top:0%;cursor: pointer;"></i></div>
                    <span>Confirm Password</span>
                    <input type="password" name=cpassword id="id_password1" required />
                </label>
				<small>Make sure to type the same password</small>
                <button type="submit" class="submit">Sign Up</button>
				<button type="reset" class="reset" >Clear </button>
                
     </div>
		
    </form>
<script>
const togglePassword = document.querySelector('#togglePassword');
const togglePassword1 = document.querySelector('#togglePassword1');
  const password = document.querySelector('#id_password');
   const password1 = document.querySelector('#id_password1');
 
 
  togglePassword.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    // toggle the eye slash icon
    this.classList.toggle('fa-eye-slash');
	this.classList.toggle('fa-eye');
});

 togglePassword1.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password1.getAttribute('type') === 'password' ? 'text' : 'password';
    password1.setAttribute('type', type);
    // toggle the eye slash icon
    this.classList.toggle('fa-eye-slash');
	this.classList.toggle('fa-eye');
});
  
 
</script>

<script>
     function f1()
        {
            
            var sta1=document.getElementById("email1").value;
            var sta2=document.getElementById("id_password").value;
            var sta3=document.getElementById("addr").value;
            var sta4=document.getElementById("aadh").value;
            var sta5=document.getElementById("mobno").value;
	   
  var x=sta.trim();
  var x1=sta1.indexOf(' ');
  var x2=sta2.indexOf(' ');
  var x3=sta3.trim();
  var x4=sta4.indexOf(' ');
	var x5=sta5.indexOf(' ');
	
	 if(sta1!="" && x1>=0){
    document.getElementById("email1").value="";
    document.getElementById("email1").focus();
      alert("Space Not Allowed");
        }
        else if(sta2!="" && x2>=0){
    document.getElementById("id_password").value="";
    document.getElementById("id_password").focus();
      alert("Space Not Allowed");
        }
        else if(sta3!="" && x3==""){
    document.getElementById("addr").value="";
    document.getElementById("addr").focus();
      alert("Space Not Allowed");
        }
        else if(sta4!="" && x4>=0){
    document.getElementById("aadh").value="";
    document.getElementById("aadh").focus();
      alert("Space Not Allowed");
        }
        else if(sta5!="" && x5>=0){
    document.getElementById("mobno").value="";
    document.getElementById("mobno").focus();
      alert("Space Not Allowed");
        }
}
</script> 
</body>
</html>
