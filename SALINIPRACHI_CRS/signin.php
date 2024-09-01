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
    width: 500px;
	
    height: 100%;
    -webkit-transition: -webkit-transform 1.2s ease-in-out;
    transition: -webkit-transform 1.2s ease-in-out;
    transition: transform 1.2s ease-in-out;
    transition: transform 1.2s ease-in-out, -webkit-transform 1.2s ease-in-out;
    padding: 50px 30px 50px;
	border: black;
	box-shadow:4px 4px 4px 2px black;
	margin-left:30%;
	background:ivory;
}

input {
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
    font-size: 26px;
    text-align: center;
}

label {
    display: block;
    width: 260px;
    margin: 25px auto 0;
    text-align: center;
}

label span {
    font-size: 20px;
    color:black;
	opacity:0.7;
    text-transform: uppercase;
}


button {
	margin-left:12%;
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
	 left: 200px;
}
.submit{
	background:crimson;
}
.reset{
	background:blue;
}

	</style>
	 
</head>

<body>
    <form action="signincheck.php" class="formContainer" method=post>
		<div class="form">
            <h2>Sign In to your account</h2>
            <label>
			    <div class="icon"><i class="fas fa-envelope"></i></div>
                <span>Username</span>
                <input type="email" name=username required />
            </label>
            <label>
				<div class="icon"><i class="fas fa-lock"></i></div>
				<div class="icon"><i class="fa fa-eye-slash" id="togglePassword" style=" margin-left:200px;margin-top:0%;cursor: pointer;"></i></div>
                <span>Password</span>
                <input type="password" name=password id="id_password"required />
            </label>
            <p class="forgot-pass"><a href="reset-password.php">Forgot password?</a></p>
            <button type="submit" class="submit">Sign In</button>
			<button type='reset' class='reset'>Clear </button>
			<div class="msg__text">
                 
                    <h3>Don't have an account? <a href='signup.php' style="color:red;text-decoration:underline;font-weight:bold">Signup now !!</a><h3>
                </div>
		
         
        </div>
    </form>
	<script>
const togglePassword = document.querySelector('#togglePassword');

  const password = document.querySelector('#id_password');
   
 
  togglePassword.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    // toggle the eye slash icon
    this.classList.toggle('fa-eye-slash');
	this.classList.toggle('fa-eye');
});

  
 
</script>
</body>
</html>
