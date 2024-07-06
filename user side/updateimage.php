<?php 
    include('../include/information.php');
    include('../functions/common_function.php'); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toy Factory-Home</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/form.css">
    <link rel="stylesheet" href="../css/body.css">
    <link rel="stylesheet" href="../css/footer.css">

    <style>
        li::first-letter {
        text-transform: capitalize;
        }
        #search-nav{
            background: none;
        }
        .search{
            padding-top: 10px;
        }
        .search input{
            border-radius: 6px;
            width: 300px;
        }
        .search input:focus{
            border: none;
            padding: none;
            margin: none;   
        }
        .searchbtn{
            padding-top: 10px;
            margin-right: 100px;
        }
        .searchbtn input{
            border-radius: 6px;
            background: lightgray;
        }
        #srh-btn{
            display: none;
        }
        .ot-box{
           display: column;
           
           padding-left: 500px;
        }
        .in-boxx{
            display: flex;
            border:1px solid ;
            border-radius: 5px;
        }
        
        .inner-box{
            padding-left: 25px;
            padding-top: 15px; 
            width: 500px;
        }
        
        .width{
            width: 650px;
            align-self: center;
            padding-bottom: 20px;
        }
    

        .ot-box button{
            border: 1px solid black;
            color: black;
            font-weight: 400;
            border-radius: 3px;
            background: rgb(210, 231, 237);
        }
        .btn-box1{
            padding-top: 25px;
        }
        
        @media (max-width:600px){
            #srh-btn{
                display: block;
                width: fit-content;
                margin-left: 60px;
            }
            .ot-box{
                overflow-x: auto;
                padding-left: 0px;
            }
        }
        footer{
    padding: 20px;
    margin-top: 300px;
    position:relative;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
  }
    </style>
</head>
<body>
<div id="navbody">
    <div class="container1">
        <nav class="navbar navbar-inverse">
          <div class="navbar-header">
              <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".js-navbar-collapse">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="user_index.php">My Store</a>
          </div>
          
          <div class="collapse navbar-collapse js-navbar-collapse">
              <ul class="nav navbar-nav">
                  <li class="dropdown mega-dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">Category <span class="caret"></span></a>				
                      <ul class="dropdown-menu mega-dropdown-menu">
                          <li class="col-sm-3">
                              <ul>
                                  <li class="dropdown-header">Categories</li>
                                  <?php
                                  getcategory();
                                  ?>
                              </ul>
                          </li>
                          <li class="col-sm-3">
                              <ul>
                                  <li class="dropdown-header">Brands</li>
                                  <?php
                                    getbrands()?>
                                  							
                              </ul>
                          </li>
                          <li class="col-sm-3">
                              <ul>
                                  <li class="dropdown-header">Characters</li>
                                  <?php
                                    getcharacters()?>           
                              </ul>
                          </li>
                      </ul>				
                  </li>
                  <li><a href="shop.php">Shop</a></li>
              </ul>
              <ul class="nav navbar-nav navbar-right">
            
                <li class="search"><form action="searchresult.php" method="get" id="search-nav">
                <input type="text" placeholder="search" name="search_data"/></li>
                <li class="searchbtn"><input type="submit" value="search"  id="srh-btn" name="search_data_product">  </form></li>
           
              <li class="dropdown">
                <a href="myaccount.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><?php echo "<img src='$image_path' class='profile' height='30px' width='30px' style='border-radius:15px;margin-right:4px;'>";?><?php echo $name;?> <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="myaccount.php">Your Account</a></li>
                  <li><a href="#">Your Orders</a></li>
                  <li><a href="yourinfo.php">Login & Security</a></li>
                  <li><a href="#">Your Wishlist</a></li>
                  <li><a href="youraddress.php">Your Address</a></li>
                  <li class="divider"></li>
                  <li><a href="logout.php" onclick="return confirm('Are you sure you want to Logout?');">Logout</a></li>
                </ul>
              </li>
              <li><a href="mycart.php">My cart (<?php cartitem();?>) items</a></li>
            </ul>
          </div><!-- /.nav-collapse -->
        </nav>
      </div>
    </div>
</div>
    <!-- navbar the end -->

    <!-- body start -->
    <div class="acc">
        <div class="h-d"><h2>Change your name</h2></div>
        <div class="ot-box"> 
            <div class="in-boxx width">
                
                <div class="inner-box">
                    <strong>New Image:</strong><form action="" method="post"  enctype="multipart/form-data" style="height:45px; width:400px">
                    <input type="file" placeholder="Choose-image" name="image" required="required"style="width:300px;padding-bottom:35px"/>
                </div>
                <div class="btn-box1">
                    <button type="submit" name="change_image">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <footer id="section-p1">
            <div class="col">
            <h3>My Store</h3>
            <h4 style="margin-top:20px">Follow us</h4>
                    <div class="icon">
                        <a href="wwww.facebook.com"><img src="symbols/facebook.png" alt="" height="25px" width="25px"></a>
                        <a href="www.instagram.com"><img src="symbols/instagram.png" alt="" height="25px" width="25px"></a>
                        <a href="www.twitter.com"><img src="symbols/twitter1.png" alt="" height="25px" width="25px"></a>
                        <a href="www.youtube.com"><img src="symbols/youtube.png" alt="" height="25px" width="25px"></a>
                    </div>
            </div>
            <div class="col">
                <h4>Contact</h4>
                <p><strong>Address:</strong>Tolani foundation Gandhidham polytechnic Adipur</p>
                <p><strong>Phone:</strong>1234567891</p>
                <p><strong>Hours:</strong>10:00 - 18:00, Mon - Sat</p>
                
                
                
            </div>
            <div class="col">
                <h4>Quick links</h4>
                <a href="user_index.php">Home</a>
                <a href="shop.php">Shop</a>
                <a href="mycart.php">My cart</a>
            </div>
            <div class="col">
                <h4>About</h4>
                <a href="#">About us</a>
                <a href="#">Privacy Policy</a>
                <a href="#">Terms & Conditions</a>
                <a href="../contactus.php">Contact us</a>
            </div>
            <div class="col">
                <h4>My Account</h4>
                <a href="myaccount.php">Your Account</a>
                <a href="yourinfo.php">Login & security</a>
                <a href="mycart.php">View Cart</a>
                <a href="#">My Wishlist</a>
                <a href="#">Help</a>
            </div>
            
            <div class="copyright">
                <p>&copy; 2023,Mohit verma etc -Eccomerce website demo.</p>
            </div>
        </footer>
    <script> </script>
    <script src="../js/script.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</body>
</html>
<?php
    $connection = mysqli_connect('localhost','root','','twa');
    
    $email=$_SESSION['user_email'];
    if(isset($_POST['change_image'])){
        $image_up=$_FILES['image']['name'];
        $temp_image=$_FILES['image']['tmp_name'];
        move_uploaded_file($temp_image,"../user images/$image_up");
        $update_image="UPDATE `usertb` SET `image`='$image_up' WHERE email='$email'";
        if(mysqli_query($connection,$update_image)){
        echo "<script>alert('image updated');window.location.href ='yourinfo.php'</script>";
        }else{
            echo"<script>alert(your name is not changed)</script>";
    }
    }
?>