<?php 
    session_start();
  if(isset($_SESSION['partner_email']))
  {
  $connection = mysqli_connect('localhost','root','','twa');
  $partner_email=$_SESSION['partner_email']; 
  $query = "SELECT * FROM `partner_table` WHERE `partner_email`='$partner_email'";
  $result = mysqli_query($connection, $query);
  $row = mysqli_fetch_assoc($result);
 $partner_id=$row['partner_id'];
  $name=$row['name'];
  $city=$row['city'];
  $state=$row['state'];
  $zipcode=$row['zipcode'];
  $email=$row['partner_email'];
  
  }else{
      header('Location: login.php');
  }
?>