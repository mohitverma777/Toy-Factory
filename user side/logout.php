<?php
    session_start();
    if (isset($_SESSION['user_email'])) {
        // If the session variable is set, unset it to destroy the session
        unset($_SESSION['user_email']);
    }
    header("Location: ../index.php");
?>