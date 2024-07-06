<?php
   session_start();
   $connection = mysqli_connect('localhost','root','','twa');
   $partneremail=$_SESSION['partner_email'];
   if(isset($_POST['save_address'])){
       $city=$_POST['city'];
       $state=$_POST['state'];
       $pincode=$_POST['pincode'];
       $query="UPDATE `partner_table` SET `city`='$city',`state`='$state',`zipcode`='$pincode' WHERE `partner_email`='$partneremail'";
       mysqli_query($connection,$query);
    echo "<script>alert('address saved');window.location.href ='home.php'</script>";
   }else{
       echo "<script>alert('Your address not saved')</script>";
   }
?>