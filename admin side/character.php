<?php
     $connection = mysqli_connect('localhost','root','','twa');
     $value = $_POST['character'];

     // Check if the value is already in use
     $query = "SELECT * FROM characters WHERE charachter_title = '$value'";
     $result = mysqli_query($connection, $query);
  
     if (mysqli_num_rows($result) > 0) {
        // The value is already in use, display an error message
        echo " <script>alert('$value character is already in use insert new character .'); // Go back to the previous page
        history.back();
        </script>";
     }else{
  
     if(isset($_POST['insertcharacter'])){
        $character_title = $_POST['character'];
        $character_image=$_FILES['character-image']['name'];
        
       $char_temp_image1=$_FILES['character-image']['tmp_name'];
      move_uploaded_file( $char_temp_image1,"character img/$character_image");
        //insert query
        $request = " INSERT INTO `characters`( `charachter_title`, `character_image`) VALUES ('$character_title','$character_image')";
        $result_query=mysqli_query($connection, $request);
        if($result_query){
           echo"<script>alert('$character_title is successfully inserted');history.back()</script>";
          
        }
        
     echo "confirmed"; 
  
     }else{
        echo 'something went wrong please try again!';
     }
  }
  
?>