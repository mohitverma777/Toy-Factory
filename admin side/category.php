<?php
     $connection = mysqli_connect('localhost','root','','twa');
     $value = $_POST['category'];

     // Check if the value is already in use
     $query = "SELECT * FROM categories WHERE category_title = '$value'";
     $result = mysqli_query($connection, $query);
  
     if (mysqli_num_rows($result) > 0) {
        // The value is already in use, display an error message
        echo " <script>alert('$value category is already in use insert new category .'); // Go back to the previous page
        history.back();
        </script>";
     }else{
  
     if(isset($_POST['insertcategory'])){
        $category_title = $_POST['category'];
        
        //insert query
        $request = " insert into categories(category_title) values('$category_title') ";
        $result_query=mysqli_query($connection, $request);
        if($result_query){
           echo"<script>alert('$category_title is successfully inserted');history.back()</script>";
          
        }
        
     echo "confirmed"; 
  
     }else{
        echo 'something went wrong please try again!';
     }
  }
  
?>