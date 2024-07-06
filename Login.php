<?php
 $connection = mysqli_connect('localhost','root','','twa');
    if(isset($_POST['login'])){
        $email = $_POST['email'];
        $password = $_POST['password'];
        $select_query="SELECT * FROM `usertb` WHERE email='$email'";
        $result=mysqli_query($connection,$select_query);
        $row_count=mysqli_num_rows($result);
        $row_data=mysqli_fetch_assoc($result);

        if($row_count>0){
            if(password_verify($password,$row_data['password'])){
                
                session_start();
                $userid=$row_data['id'];

                $_SESSION['user_email']=$email;
                $_SESSION['user_password']=$password;
                echo "<script>alert('Login successful')</script>";
                header("Location: user side/user_index.php");
            }else{
                echo "<script>alert('wrong password');history.back();</script>";
            }
        }else{
            echo "<script>alert('wrong username and password');history.back();</script>";
        }
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
            <form action="" method="post">
            <h1>Sign in</h1>
            <input type="email" placeholder="Email" name="email" required/>
            <input type="password" placeholder="Password" name="password" id="login_password"/>
            <div style="margin-left:100px;">
            <input type="checkbox" id="show_password" onclick="togglePassword()"> <span style="position:absolute;padding-top:8px;padding-left:2px;">Show Password</span>
            </div>
            <a href="forgotpassword.php">Forgot your password?</a>
            <button type="submit" name="login">Sign In</button>
            <a href="signup.php">Don't have Account?signup</a>
            </form>
            </div>
        </div>
        
    </div>
    <script>

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