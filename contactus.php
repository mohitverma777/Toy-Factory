<?php 
    include('common_function.php');  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toy Factory-Home</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
   
    
    <link rel="stylesheet" href="css/navbar2.css">
    <link rel="stylesheet" href="css/form.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/body.css">
    <link rel="stylesheet" href="css/footer.css">

    <style>

.pro a:hover{
        text-decoration: underline;
      }
      .search{
    margin-left: 210px;
}
     
.search input{
    padding-left: 10px;
    border-radius: 10px;
    font-size: medium;
    width: 350px;
    height: 35px;
}
a{
    text-decoration: none;
}
        .contact-form {
            justify-content: center;
      padding: 50px;
      text-align: center;
      background-color: rgba(255, 255, 255, 0.8);
    }
    
    .contact-form h1 {
      margin-bottom: 20px;
    }
    
    .contact-form label {
      margin-right: 300px;
        margin-bottom: 1px;
      margin-top: 10px;
    }
    
    .contact-form input[type=text], .contact-form input[type=email], .contact-form textarea {
      width: 25%;
      padding: 12px;
      border: 1px solid #ccc;
      border-radius: 4px;
      resize: vertical;
    }
    
    .contact-form input[type=submit] {
      background-color: #333;
      color: #fff;
      border: none;
      width: 25%;
      padding: 12px 20px;
      border-radius: 4px;
      cursor: pointer;
    }
    
    .contact-form input[type=submit]:hover {
      background-color: #ddd;
      color: black;
    }
    
    </style>
</head>
<body>
<?php 
    include('navbar2.php');  
?>
        <!-- navbar the end -->
        <div class="contact-form section-p1" >
    <h1>Contact Us</h1>
    <form action="" method="POST">
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" placeholder="Enter your name" required>
      
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" placeholder="Enter your email" required>
      
      <label for="message">Message:</label>
      <textarea id="message" name="message" placeholder="Enter your message" required></textarea>
      
      <input type="submit" value="Submit" name="send">
    </form>
  </div>
  <?php 
    include('footer.php');  
?>  
    <script src="js/script.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</body>
</html>
<?php
    $connection = mysqli_connect('localhost','root','','twa');
    if(isset($_POST['send'])){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $message=$_POST['message'];
        $insert="INSERT INTO `contact_us`( `contact_name`, `contact_email`, `contact_message`) VALUES ('$name','$email','$message')";
        if(mysqli_query($connection,$insert)){
            echo"<script>alert('message sent');</script>";
        }else{
            echo"<script>alert('message was not sent');</script>";
        }
    }
?>
