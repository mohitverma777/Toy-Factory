<?php
    session_start();
    $connection = mysqli_connect('localhost','root','','twa');
   $partner_email=$_SESSION['partner_email']; 
  $query = "SELECT * FROM `partner_table` WHERE `partner_email`='$partner_email'";
  $result = mysqli_query($connection, $query);
  $row = mysqli_fetch_assoc($result);
 $partner_id=$row['partner_id'];

   //$partneremail=$_SESSION['partner_email'];
   if(isset($_POST['change'])){
       $city=$_POST['city'];
       $state=$_POST['state'];
       $pincode=$_POST['pincode'];
       $name=$_POST['name'];
       $email=$_POST['email'];
       $query="UPDATE `partner_table` SET `city`='$city',`state`='$state',`zipcode`='$pincode',`name`='$name',`partner_email`='$email' WHERE `partner_id`='$partner_id'";
       mysqli_query($connection,$query);
       $_SESSION['partner_email']=$email;
    echo "<script>alert('address saved');window.location.href ='profile.php'</script>";
   }else{
       echo "<script>alert('Your profile not saved')</script>";
   }
?>