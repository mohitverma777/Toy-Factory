<!DOCTYPE html>
<html>
<head>
	<title>OTP Form</title>
</head>
<body>
	<h2>Enter your email address to receive OTP</h2>
	<form method="post">
		<label>Email:</label>
		<input type="email" name="email" required>
		<input type="submit" name="submit_email" value="Submit">
	</form>

	<?php
if(isset($_POST['submit_email'])) {
    // Generate OTP
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
        echo '<br><br><h2>Enter OTP received on email:</h2>';
        echo '<form method="post">';
        echo '<label>OTP:</label>';
        echo '<input type="text" name="otp" required>';
        echo '<input type="hidden" name="otp_val" value="' . $otp . '">';
        echo '<input type="submit" name="submit_otp" value="Submit">';
        echo '</form>';
    }
}

if(isset($_POST['submit_otp'])) {
    if($_POST['otp'] == $_POST['otp_val']) {
        echo '<br><br><h2>OTP verified successfully!</h2>';
    } else {
        echo '<br><br><h2>Incorrect OTP. Please try again.</h2>';
    }
}
?>
</body>
</html>
