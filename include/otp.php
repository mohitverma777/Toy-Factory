<?php
session_start();
$email = $_POST['email'];
$enteredOTP = $_POST['enteredOTP'];
$otp = $_SESSION['otp'];

if ($otp == $enteredOTP) {
    echo "OTP verified successfully!";
} else {
    echo "Invalid OTP!";
}
session_destroy();
?>
