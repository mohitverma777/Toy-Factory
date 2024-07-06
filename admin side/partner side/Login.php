<?php
 $connection = mysqli_connect('localhost','root','','twa');
    if(isset($_POST['login'])){
        $email = $_POST['email'];
        $password = $_POST['password'];
        $select_query="SELECT * FROM `partner_table` WHERE `partner_email`='$email'";
        $result=mysqli_query($connection,$select_query);
        $row_count=mysqli_num_rows($result);
        $row_data=mysqli_fetch_assoc($result);
		$partner_id=$row_data['partner_id'];
        if($row_count>0){
            if(password_verify($password,$row_data['password'])){
                session_start();
				
                $_SESSION['partner_email']=$email;
				$_SESSION['partner_id']=$partner_id;
                echo "<script>alert('Login successful')</script>";
                header("Location: home.php");
            }else{
                echo "<script>alert('wrong password')</script>";
                header("login.php");
            }
        }else{
            echo "<script>alert('wrong email and password')</script>";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partner-SignIn</title>
    <link rel="stylesheet" href="../login.css">
	<style>
		 .container {
	background-color: #fff;
	border-radius: 10px;
  	box-shadow: 0 14px 28px rgba(0,0,0,0.25), 
			0 10px 10px rgba(0,0,0,0.22);
	position: relative;
	overflow: hidden;
	width: 388px;

	min-height: 480px;
}
.innone{
	display: none ;
}
.form-container {
	position: absolute;
	top: 0;
    
	height: 100%;
	transition: all 0.6s ease-in-out;
}

.sign-in-container {
	left: 0;
	width: 100%;
	z-index: 2;
}
	</style>
</head>
<body>
<div class="container" id="container">
	
	<div class="form-container sign-in-container">
		<form action="" method="post">
			<h1>Sign in</h1>
			<input type="email" placeholder="Email" id="email" name="email" required/>
			<input type="password" placeholder="Password" id="password" name="password" required/>
			<div style="margin-left:100px;">
            <input type="checkbox" id="show_password" onclick="togglePassword()"> <span style="position:absolute;padding-top:8px;padding-left:2px;">Show Password</span>
            </div>
			<a href="forgotpassword.php">Forgot your password?</a>
			<button style="cursor: pointer;" type="submit" name="login">Sign In</button>
			<a href="signup.php">signup?</a>
		</form>
	</div>
</div>
<script>


function checkpass(){
	const inputpass = document.getElementById("reg_password");
	const confipass = document.getElementById("reg_confirm-password");
	const errormsg = document.getElementById("passerror");
	const regbtn =document.getElementById("reg");
	if(inputpass.value!=confipass.value){
		errormsg.style.display="block";
		event.preventDefault();
		regbtn.style.display="none";
	}else{
		errormsg.style.display="none";
		regbtn.style.display="block";
	}
}
function togglePassword() {
    var passwordInput = document.getElementById("password");
    var showPasswordCheckbox = document.getElementById("show_password");

    if (showPasswordCheckbox.checked) {
      passwordInput.type = "text";
    } else {
      passwordInput.type = "password";
    }
  }

</script>
</body>
</html>