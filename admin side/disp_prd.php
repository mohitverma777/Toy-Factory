<?php
    $connection = mysqli_connect('localhost','root','','twa');
   
    if($_GET['prd']){
      $product_id=($_GET['prd']);
  
     // Check if the value is already in use
     $query = "SELECT * FROM product_table WHERE product_id='$product_id'";
     $result = mysqli_query($connection, $query);
     $data=mysqli_fetch_assoc($result);
     $product_title=$data['product_title'];
     $product_keyword=$data['product_keyword'];
     $product_description=$data['product_description'];
     $product_stock = $data['product_stock'];
     $product_price=$data['product_price'];
     $product_brand=$data['brand_id'];
     $status=$data['status'];
     $image_name = $data['product_image1'];
     $product_id=$data['product_id'];
     $select_brand="SELECT * FROM brands where brand_id='$product_brand'";
     $result_brand=mysqli_query($connection,$select_brand);
     $row_d=mysqli_fetch_assoc($result_brand);
     $brand_name=$row_d['brand_title'];
     $image_path = "../admin side/product images/$image_name";
    }
?>