<?php
    $otp = rand(100000, 999999);
	if(isset($_POST['submit_email'])) {
		// Generate OTP
		$connection = mysqli_connect('localhost','root','','twa');
        session_start(); // Start the session

if(isset($_POST['email'])) { // Check if the email variable is set in the POST request
   $email = $_POST['email']; // Get the email value from the POST request
   $_SESSION['email'] = $email; // Set the email value in the session variable
}

        $select_query = "SELECT * FROM usertb WHERE email = '$email'";
        $result = mysqli_query($connection, $select_query);

        if (mysqli_num_rows($result) > 0) {
			include('smtp/PHPMailerAutoload.php');

			// Create a new PHPMailer instance
			$mail = new PHPMailer;
			//$mail->SMTPDebug  = 3;
			// SMTP settings
			$mail->isSMTP();

			$mail->Host = 'smtp.gmail.com';
			$mail->Port = 587;
			$mail->SMTPSecure = 'tls';
			$mail->SMTPAuth = true;
			$mail->Username = 'myfactoryinfo7@gmail.com';
			$mail->Password = 'anvegswsghtktbir';

			// Sender and recipient
			$mail->setFrom('myfactoryinfo7@gmail.com', 'Toy factory');
			$mail->addAddress($_POST['email']);

			// Email subject and body
			$mail->Subject = 'One-Time Password (OTP) for Verification';
			$mail->Body = 'Your OTP is: ' . $otp;

			// Send email
			if (!$mail->send()) {
				echo 'Error sending email: ' . $mail->ErrorInfo;
			} else{
				$none='none';
				$block='block';
			}

		} else {
			echo"<script>alert('wrong email');history.back();</script>";
			// user with desired username is not present in the table
		}

	
}
if(isset($_POST['submit_otp'])) {
	if($_POST['otp'] == $_POST['otp_val']) {
		echo '<script>alert("change your password");</script>';
		$none='none';
		$block='none';
		$showcngpas='block';
	} else {
		echo '<script>alert("wrong otp");</script>';
	}
}


		if(isset($_POST['change_password'])){
			session_start();
			$connection = mysqli_connect('localhost','root','','twa');
			$email=$_SESSION['email'];
			$password = $_POST['password'];
			$hash_password=password_hash($password,PASSWORD_DEFAULT);
			$update_password="UPDATE `usertb` SET `password`='$hash_password' WHERE email='$email'";
			mysqli_query($connection,$update_password);
			unset($_SESSION['email']);
			echo "<script>alert('password updated');window.location.href ='Login.php'</script>";
		}else{
			echo"<script>alert(your password is not changed)</script>";
		}
	?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toy Factory-Sign in</title>
   
    <link rel="stylesheet" href="css/form.css">
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
    <div id="formbody" >
        <div class="container" id="container">
           
            <div class="form-container sign-in-container">
                    
					<div style="display:<?php echo $none; ?>;" >
					<form action="" method="post" >
					<h1>Enter your email</h1>
					<input type="email" placeholder="Enter Email" name="email"  required />
                    <button type="submit" name="submit_email" >send otp</button>
					</form>
					</div>
                    
					
					<div  class="innone" style="display:<?php echo $block; ?>;">
					<form action="" method="post" >
					<h1>Otp verification</h1>
					<span  style="color:green;">Otp sent to your email</span>
					<input type="text" placeholder="Enter otp" name="otp" maxlength="6" pattern="[0-9]*" inputmode="numeric" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"/>
					<input type="hidden" name="otp_val" value=" <?php echo $otp; ?> " >
                    <button type="submit" name="submit_otp">verify</button>
					</form>
					</div>

					<div  class="innone" style="display:<?php echo $showcngpas; ?>;">
					<form action="" method="post">
					<h2>Change your password</h2>
					<input type="password" placeholder="Password" id="reg_password" name="password" required="required" />
					<div style="margin-left:100px;">
					<input type="checkbox" id="show_password" onclick="togglePassword('reg_password')"> <span style="position:absolute;padding-top:8px;padding-left:2px;">Show Password</span>
					</div>
					<input type="password" placeholder="confirm password" id="reg_confirm-password" name="confirm-password" required="required" oninput="checkpass()" />
					<div style="margin-left:100px;">
					<input type="checkbox" id="show_confirm_password" onclick="togglecfPassword('reg_confirm-password')"> <span style="position:absolute;padding-top:8px;padding-left:2px;">Show Password</span>
					</div>
					<br>
					<span id="passerror" style="display:none; color:red;">enter the same password</span>
					<button type="submit" name="change_password" id="reg">verify</button>
					</form>
					</div>
                
            </div>
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
    var passwordInput = document.getElementById("reg_password");
    
    var showPasswordCheckbox = document.getElementById("show_password");

    if (showPasswordCheckbox.checked) {
      passwordInput.type = "text";
      
    } else {
      passwordInput.type = "password";
    }
  }
  function togglecfPassword() {
   
    var confirmInput = document.getElementById("reg_confirm-password");
    var showPasswordCheckbox = document.getElementById("show_confirm_password");

    if (showPasswordCheckbox.checked) {
      confirmInput.type = "text";
    } else {
      confirmInput.type = "password";
    }
  }
</script>
    <script src="js/script.js"></script>
    
</body>
</html>
