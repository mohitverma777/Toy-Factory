<?php
    $connection = mysqli_connect('localhost','root','','twa');
    if(isset($_POST['delete_product'])){
        session_start();
        $email=$_SESSION['user_email'];
        $product_id=$_POST['product_id'];
        $dlt_qry="DELETE FROM `product_table` where product_id='$product_id'";
        $rslt=mysqli_query($connection,$dlt_qry);
        $insert_qry="DELETE FROM `cart_details` where product_id='$product_id'";
        $result_brand=mysqli_query($connection,$insert_qry);
        echo "<script>history.back();</script>";
    }
?>