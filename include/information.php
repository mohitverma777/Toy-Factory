<?php
    session_start();
    if(isset($_SESSION['user_email'])){
    $connection = mysqli_connect('localhost','root','','twa');
    $email=$_SESSION['user_email']; 
    $query = "SELECT * FROM usertb WHERE email = '$email'";
    $result = mysqli_query($connection, $query);
    $row = mysqli_fetch_assoc($result);
    $userid=$row['id'];
    $_SESSION['userid']=$userid;
    $address=$row['address'];
    $mobile=$row['mobile'];
    $image_name = $row['image'];
    $image_path = "../user images/$image_name";
    $name=$row['name'];
    $email=$row['email'];
    $password=$row['password'];
    }else{
        header('Location: ../index.php');
    }
?>