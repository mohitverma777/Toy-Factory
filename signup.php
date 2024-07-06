<?php
   include('functions/common_function.php');
   $connection = mysqli_connect('localhost','root','','twa');
   $otp = rand(100000, 999999);
   $block='block';
   $none='none';
   $none2='none';
   session_start();
   
   if(isset($_POST['sendotp'])){
   $email = $_POST['email'];
   $_SESSION['uemail'] = $email;
   // Check if the value is already in use
   $query = "SELECT * FROM usertb WHERE email = '$email'";
   $result = mysqli_query($connection, $query);

   if (mysqli_num_rows($result) > 0) {
      // The value is already in use, display an error message
      echo " <script>alert('$email this email is already Linked with another account use another email.'); // Go back to the previous page
      history.back();
      </script>";
   }else{
   
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
                $block='none';
                $none='block';
			}

		} 
   }
   if(isset($_POST['verifyotp'])) {
	if($_POST['otp'] == $_POST['otp_val']) {
		$block='none';
        $none='none';
        $none2='block';
	} else {
		echo '<script>alert("wrong otp");</script>';
	}
}
if(isset($_POST['signup'])){
    $name = $_POST['name'];
    //accessing image
    $image=$_FILES['image']['name'];

    //accesing tmp name
    $temp_image=$_FILES['image']['tmp_name'];

    $emailin=$_SESSION['uemail'];
    $password = $_POST['password'];
    $hash_password=password_hash($password,PASSWORD_DEFAULT);
    move_uploaded_file($temp_image,"user images/$image");
    $user_ip=get_ip_address();
    
    //insert query
    $request = " insert into usertb(name, image, email, password,ip) values('$name','$image','$emailin','$hash_password','$user_ip') ";
    $result_query=mysqli_query($connection, $request);

    $insert_address="INSERT INTO `user_address`(`user_email`) VALUES ('$emailin')";
    $resulta_addrss=mysqli_query($connection, $insert_address);

    if($result_query){
        unset($_SESSION['uemail']);
       echo"<script>confirm('your account is created');window.location.href ='Login.php'</script>";
       
    }
 echo "confirmed"; 
  }elseif(!isset($_SESSION['uemail'])){
    header('user side\error404.php');
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toy Factory-Sign in</title>
    
    
    <link rel="stylesheet" href="css\form.css">
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
    <div id="formbody">
        <div class="container" id="container">
            <div class="form-container sign-in-container">
                <form action="" method="post" style="display:<?php echo $block; ?>;padding-top:150px;">
                <h1>Create Account</h1>
                <input type="email" placeholder="Email" name="email" required="required"/>
                <button input="submit" name="sendotp">Verify email</button>
                </form>

                <form action="" method="post" style="display:<?php echo $none; ?>;padding-top:150px;">
                <h1>Verify Email</h1>
                <input type="text" placeholder="Enter otp" name="otp" maxlength="6" pattern="[0-9]*" inputmode="numeric" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"/>
					<input type="hidden" name="otp_val" value=" <?php echo $otp; ?> " >
                <button input="submit" name="verifyotp">Verify otp</button>
                </form>

                <form action="" method="post"  enctype="multipart/form-data" style="display:<?php echo $none2; ?>;padding-top:80px;">
                    <h1>Create Account</h1>
                    <input type="text" placeholder="Name" name="name" required="required" maxlength="80"  />
                    <input type="file" placeholder="Choose-image" name="image" />
                    <input type="password" placeholder="Password" id="reg_password" name="password" required="required"/>
                    <input type="password" placeholder="Re-type password" id="reg_confirm-password" name="confirm-password" required="required" oninput="checkpass()"/>
                    <span id="passerror" style="display:none; color:red;">enter the same password</span>
                    <button input="submit" name="signup" id="reg">Sign Up</button>
                </form>
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
    var passwordInput = document.getElementById("login_password");
    var showPasswordCheckbox = document.getElementById("show_password");

    if (showPasswordCheckbox.checked) {
      passwordInput.type = "text";
    } else {
      passwordInput.type = "password";
    }
  }
</script>
    <script src="js/script.js"></script>
    
</body>
</html>