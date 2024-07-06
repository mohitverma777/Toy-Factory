<?php
     $connection = mysqli_connect('localhost','root','','twa');
     $brand = $_POST['brand'];

     $query = "SELECT * FROM brands WHERE brand_title = '$brand'";
     $result = mysqli_query($connection, $query);
  
     if (mysqli_num_rows($result) > 0) {
        echo " <script>alert('$brand brand is already in use insert new brand.'); // Go back to the previous page
        history.back();
        </script>";
     }else{
  
     if(isset($_POST['insertbrand'])){
        $brand_title = $_POST['brand'];
        $character_image=$_FILES['brnad-image']['name'];
        
        $char_temp_image1=$_FILES['brnad-image']['tmp_name'];
       move_uploaded_file( $char_temp_image1,"character img/$character_image");
        //insert query
        $request = "INSERT INTO `brands`(`brand_title`, `brand_image`) VALUES ('$brand_title','$character_image') ";
        $result_query=mysqli_query($connection, $request);
        if($result_query){
           echo"<script>alert('$brand_title is successfully inserted'); history.back();</script>";
          
        }
        
     echo "confirmed"; 
  
     }else{
        echo 'something went wrong please try again!';
     }
  }
  
?>