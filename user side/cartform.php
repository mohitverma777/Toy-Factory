<?php
    $connection = mysqli_connect('localhost','root','','twa');
    if(isset($_POST['update_cart'])){
        session_start();
        
        $email=$_SESSION['user_email'];
        $quantity=$_POST['quantity'];
        $product_id=$_POST['product_id'];
        $select_product="SELECT * FROM `Product_table` WHERE product_id='$product_id'";
        $result_product=mysqli_query($connection,$select_product);
        $row_d=mysqli_fetch_assoc($result_product);
        $product_price=$row_d['product_price'];
        $subtotal=$product_price*$quantity;
        $insert_qry="UPDATE `cart_details` SET `quantity`='$quantity' ,`subtotal`='$subtotal' where user_email='$email' and product_id='$product_id'";
        $result_brand=mysqli_query($connection,$insert_qry);
        echo "<script>history.back();</script>";
    }elseif(isset($_POST['delete_cart'])){
        session_start();
        $email=$_SESSION['user_email'];
        $quantity=$_POST['quantity'];
        $product_id=$_POST['product_id'];
        $insert_qry="DELETE FROM `cart_details` where user_email='$email' and product_id='$product_id'";
        $result_brand=mysqli_query($connection,$insert_qry);
        echo "<script >history.back();</script>";
    }
?>