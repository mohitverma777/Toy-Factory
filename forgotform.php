<?php
    
	if(isset($_POST['submit_email'])) {
		// Generate OTP
        $connection = mysqli_connect('localhost','root','','twa');
        $email=$_POST['email'];
        $select_query = "SELECT * FROM usertb WHERE email = '$email'";
        $result = mysqli_query($connection, $select_query);

        if (mysqli_num_rows($result) > 0) {
            $otp = rand(100000, 999999);
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
            } else {
                echo '<!DOCTYPE html>
                <html lang="en">
                <head>
                    <meta charset="UTF-8">
                    <meta http-equiv="X-UA-Compatible" content="IE=edge">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <title>Toy Factory-Sign in</title>
                    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
                    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
                    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
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
                    display: block;
                    min-height: 480px;
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
                <body><div id="formbody">
                <div class="container" id="container">
                   
                    <div class="form-container sign-in-container">
                <form action="forgotform.php" method="post"> 
                <h1>OTP:</h1>
                <input type="text" name="otp" required>
                <input type="hidden" name="otp_val" value="' . $otp . '">
                <button type="submit" name="submit_otp" value="Submit">Submit</button>
                </form> </div>
        
                </div>
                
            </div>
            
        <script src="js/script.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    </body>
    </html>';
                
            }
        }
    
        
       
        
        else {
            echo"<script>alert('wrong email');history.back();</script>";
            // user with desired username is not present in the table
        }
         
        if(isset($_POST['submit_otp'])) {
            if($_POST['otp'] == $_POST['otp_val']){
                echo '<!DOCTYPE html>
                <html lang="en">
                <head>
                    <meta charset="UTF-8">
                    <meta http-equiv="X-UA-Compatible" content="IE=edge">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <title>Toy Factory-Sign in</title>
                    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
                    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
                    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
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
                    display: block;
                    min-height: 480px;
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
                <body><div id="formbody">
                <div class="container" id="container">
                   
                    <div class="form-container sign-in-container">
                <form method="post"> 
                <h1>OTP:</h1>
                <input type="password" name="password" required>
                <input type="password" name="cnf-pass" required>
                <button type="submit"  value="Submit">Submit</button>
                </form> </div>
        
                </div>
                
            </div>
            
        <script src="js/script.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    </body>
    </html>';
            } else {
                echo '<!DOCTYPE html>
                <html lang="en">
                <head>
                    <meta charset="UTF-8">
                    <meta http-equiv="X-UA-Compatible" content="IE=edge">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <title>Toy Factory-Sign in</title>
                    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
                    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
                    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
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
                    display: block;
                    min-height: 480px;
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
                <body><div id="formbody">
                <div class="container" id="container">
                   
                    <div class="form-container sign-in-container">
                <form method="post"> 
                <h1>OTP:</h1>
                <input type="text" name="otp" required><span style="color:red;">wrong otp</span>
                <input type="hidden" name="otp_val" value="' . $otp . '">
                <button type="submit" name="" value="Submit">Submit</button>
                </form> </div>
        
                </div>
                
            </div>
            
        <script src="js/script.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    </body>
    </html>';
            }
         
        } 
		}
	?>
    