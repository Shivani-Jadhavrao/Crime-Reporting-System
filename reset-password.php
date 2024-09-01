
<html>
<head>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/> 


<style>
body{
	background: rgb(19,78,94);
background: linear-gradient(90deg, rgba(19,78,94,1) 00%, rgba(113,178,128,1) 100%);
}
.input_box .icon{
    position: absolute;
  
    left: 56px;
    transform: translateY(-380%);
    color: grey;
	
  }	
.main_div {
	background:#ffe0d0;
    position: fixed;
    left: 50%;
    top: 2%;
    transform: translate(-50%, 5%);
    border: 3px solid #999999;
    z-index: 9;
	padding: 50px;
	box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
		transition: 0.3s;
  }
   .input_box {
    max-width: 350px;
 
    
  } 
  .input_box input[type=text],
  .input_box input[type=password],
    .input_box input[type=email]{
    width: 90%;
    padding: 24px;
    margin: 5px 0 20px 0;
    border: none;
    border-radius: 30px;
    background: #eee;
    font-family:Brushstroke;
    font-weight: bold;
    font-size: 18px;
  }
  .input_box input[type=text]:focus,
  .input_box input[type=password]:focus {
    background-color: #ddd;
    outline: none;
  }



  .formContainer .btn,
  .formContainer .btn1 {
    padding:10px 14px;
    border: none;
    background-color:navy;
    border-radius: 20px;
    color: #fff;
    cursor: pointer;
    font-size: 20px;
    opacity: 0.8;
    font-family:Brushstroke;
    margin-left: 6%;
  
  }

  .formContainer .btn:hover,
  .openButton:hover {
    opacity: 1;
  }
  .formContainer .btn1 {
    background-color:red;
  }
  
  .formContainer .btn1:hover,
  .openButton:hover {
    opacity: 1;
  }
  
  
    .main_div .title{
    text-align: center;
    font-size: 30px;
    font-weight: 600;
    color:#134e5e;
  }



</style>   
</head>
<body >



	
<div class="main_div" id="popupForm">
    <div class="title">Reset your password</div><br>
	
   
    <form action="resetcheck.php" class="formContainer" method=post>
            <div class="input_box">
                <input type="text" placeholder="Username" name=username required> 
                <div class="icon"><i class="fas fa-user"></i></div>
            </div>
           
			 <div class="input_box">
                <input type="password" placeholder="New Password" id="id_password"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
				title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" name=npassword required>
             <div class="icon"><i class="fas fa-lock"></i></div>
			 <div class="icon"><i class="fa fa-eye-slash" id="togglePassword" style="margin-left: 200px; cursor: pointer;"></i></div>
			 

            </div>
			<br>
       

             <button type="submit" class="btn">Reset Password </button>
             <button type="reset" class="btn1" >Clear </button>
			 <br> <br>
			 

    
    </form>
</div>
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






 
 

 
 
 