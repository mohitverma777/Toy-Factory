<?php
    
    session_start();
  if(isset($_SESSION['admin_email']))
  {
  $connection = mysqli_connect('localhost','root','','twa');
  $admin_email=$_SESSION['admin_email']; 
  $query = "SELECT * FROM admin_table WHERE admin_email = '$admin_email'";
  $result = mysqli_query($connection, $query);
  $row = mysqli_fetch_assoc($result);
  $image_name = $row['admin_image'];
  $image_path = "../user images/$image_name";
  $name=$row['admin_name'];
  $email=$row['admin_email'];
  $password=$row['admin_password'];
  }else{
      header('Location: error404.php');
  }
?>