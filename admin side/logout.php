<?php
session_start();
if($_SESSION['admin_email']){
    if (isset($_SESSION['admin_email'])) {
        // If the session variable is set, unset it to destroy the session
        unset($_SESSION['admin_email']);
    }
    header("Location: Login.php");
}
?>