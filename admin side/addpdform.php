<?php
   include('../functions/common_function.php');
   $connection = mysqli_connect('localhost','root','','twa');

   $product_title = $_POST['title'];

   // Check if the value is already in use
   $query = "SELECT * FROM product_table WHERE product_title='$product_title'";
   $result = mysqli_query($connection, $query);

   if (mysqli_num_rows($result) > 0) {
      // The value is already in use, display an error message
      echo " <script>alert('$product_title this product title is already in use enter diffrent title.'); // Go back to the previous page
      history.back();
      </script>";
   }else{

   if(isset($_POST['insert'])){
    $product_title = $_POST['title'];
    $product_keyword = $_POST['keyword'];
    $product_description = $_POST['description'];
    $product_stock = $_POST['stock'];
    $product_category = $_POST['category'];
    $product_brand = $_POST['brand'];
    $product_character = $_POST['character'];
    $product_price = $_POST['price'];
    $product_status="true";
      //accessing image
    $product_image1=$_FILES['image-1']['name'];
    $product_temp_image1=$_FILES['image-1']['tmp_name'];
    move_uploaded_file( $product_temp_image1,"product images/$product_image1");
      
    $product_image2=$_FILES['image-2']['name'];
    $product_temp_image2=$_FILES['image-2']['tmp_name'];
    move_uploaded_file($product_temp_image2,"product images/$product_image2");

    $product_image3=$_FILES['image-3']['name'];
    $product_temp_image3=$_FILES['image-3']['tmp_name'];
    move_uploaded_file($product_temp_image3,"product images/$product_image3");

    $product_image4=$_FILES['image-4']['name'];
    $product_temp_image4=$_FILES['image-4']['tmp_name'];
    move_uploaded_file($product_temp_image4,"product images/$product_image4");

    $product_image5=$_FILES['image-5']['name'];
    $product_temp_image5=$_FILES['image-5']['tmp_name'];
    move_uploaded_file($product_temp_image5,"product images/$product_image5");
      
      //insert query
      $sel_request = "INSERT INTO `product_table` (`product_id`, `product_title`, `product_keyword`, `product_description`,`product_stock`, `category_id`, `brand_id`,`character_id`, `product_image1`, `product_image2`, `product_image3`, `product_image4`, `product_image5`, `product_price`, `date`, `status`)
       VALUES (NULL, '$product_title', '$product_keyword', '$product_description', '$product_stock', '$product_category', '$product_brand','$product_character', '$product_image1', '$product_image2', '$product_image3', '$product_image4', '$product_image5', '$product_price', current_timestamp(), '$product_status')";

      $req_query=mysqli_query($connection, $sel_request);
      if($req_query){
         echo "<script>alert('product inserted');window.location.href ='products.php';</script>";
      }
      
   echo "confirmed"; 

   }else{
      echo 'something went wrong please try again!';
   }
}

?>