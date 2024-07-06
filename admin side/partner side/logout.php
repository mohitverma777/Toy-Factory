<?php
session_start();
if($_SESSION['partner_email']){
    if (isset($_SESSION['partner_email'])) {
        // If the session variable is set, unset it to destroy the session
        unset($_SESSION['partner_email']);
    }
    header("Location: Login.php");
}
?>