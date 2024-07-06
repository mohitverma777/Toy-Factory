<?php
   session_start();
   $connection = mysqli_connect('localhost','root','','twa');
   $email=$_SESSION['user_email'];
   if(isset($_POST['save_address'])){
       $address=$_POST['address_details'];
       $city=$_POST['city'];
       $state=$_POST['state'];
       $pincode=$_POST['pincode'];
       $query="UPDATE `user_address` SET `address_details`='$address',`city`='$city',`state`='$state',`pincode`='$pincode' WHERE `user_email`='$email'";
       mysqli_query($connection,$query);
       if(isset($_GET['pay'])){
        $pay=$_GET['pay'];
      echo "<script>alert('address saved');window.location.href ='payment.php?pay=$pay'</script>";
      }else{
       echo "<script>alert('address saved');window.location.href ='youraddress.php'</script>";
      }
   }else{
       echo "<script>alert('Your address')</script>";
   }
?>