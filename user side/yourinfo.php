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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link rel="stylesheet" href="../css/navbar2.css">
    <link rel="stylesheet" href="../css/body.css">
    <link rel="stylesheet" href="../css/footer.css">
    <style>
       @import url(http://fonts.googleapis.com/css?family=Open+Sans:400,700);
      .pro a:hover{
        text-decoration: underline;
      }
      .search{
    margin-left: 200px;
}
     
.search input{
    padding-left: 10px;
    border-radius: 10px;
    font-size: medium;
    width: 310px;
    height: 35px;
}
a{
    text-decoration: none;
}

.dropdown {
 
		}
		
		.dropdown-content {
      background: #fff;
			display: none;
			position: absolute;
			z-index: 1;
		}
		
		.dropdown:hover .dropdown-content {
			display: block;
		}
		
		.dropdown-content a {
			color: black;
			padding: 12px 16px;
			text-decoration: none;
			display: block;
      text-transform: capitalize;
    
    font-size: 0.95rem;
		}
		
		.dropdown-content a:hover {
			background-color: #f1f1f1;
		}

    .na{
      font-size: 13.0px;
      font-family: 'Roboto', sans-serif;
      text-transform: capitalize;
      font-weight: 600;
      padding-top: 6px;
    }
    .acc{
        margin-top:20px;
    }
   .acc button{
    border: none;
    background: #088178;
    border-radius: 4px;
    color: #fff;
    padding: 10px;
    margin-right: 5px;
    cursor: pointer;
   }
        .ot-box{
           display: column;
           
           padding-left: 500px;
        }
        .in-boxx{
            display: flex;
            border:1px solid ;
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
        }
        .in-boxx1{
            display: flex;
            border-left:1px solid ;
            border-right:1px solid ;
            border-bottom: 1px solid;
        }
        .in-boxx2{
            display: flex;
            border-left:1px solid ;
            border-right:1px solid ;
            border-bottom: 1px solid;
            
        }
        .in-boxx3{
            display: flex;
            border-bottom: 1px solid;
            border-left:1px solid ;
            border-right:1px solid ; 
        }
        .in-boxx4{
            display: flex;
            border-bottom:1px solid ;
            border-left:1px solid ;
            border-right:1px solid ;
            border-bottom-left-radius: 5px;
            border-bottom-right-radius: 5px;
        }
        .inner-box{
            padding-left: 25px;
            padding-top: 15px; 
            width: 500px;
        }
        .inner-box1{
            padding-left: 25px;
            padding-top: 15px; 
            width: 500px;
        }
        .inner-box2{
            padding-left: 25px;
            padding-top: 15px; 
            width: 500px;
        }
        .inner-box3{
            padding-left: 25px;
            padding-top: 15px;
            width: 500px;
            
        }
        .inner-box4{
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
            padding-top: 15px;
        }
        .btn-box2{
            padding-top: 15px;
        }
        .btn-box3{
            padding-top: 15px;
        }
        .btn-box4{
            padding-top: 15px;
        }
    
        @media (max-width:600px){
           
            .ot-box{
                overflow-x: auto;
                padding-left: 0px;
            }
        }

    </style>
</head>
<body>
<?php
      include("navbar2.php");
    ?>    <!-- navbar the end -->

    <!-- body start -->
    <div class="acc">
        <div class="h-d" style="margin-left:50%;"><h2>Login & security</h2></div>
        <div class="ot-box"> 
            <div class="in-boxx width">
                <div class="inner-box">
                    <strong>Profile image:</strong>
                    <?php echo "<img src='$image_path' class='profile' height='50px' width='50px'>";?>
                </div>
                <div class="btn-box4">
                    <button onclick="window.location.href ='updateimage.php'">Edit</button>
                </div>
            </div>
            <div class="in-boxx1 width">
                <div class="inner-box1">
                    <strong>Name:</strong>
                <h6><?php echo "$name";?></h6>
                </div>
                <div class="btn-box1">
                    <button onclick="window.location.href ='updatename.php'">Edit</button>
                </div>
            </div>
            <div class="in-boxx2 width">
                <div class="inner-box2">
                    <strong>Mobile:</strong>
                <h6><?php echo "$mobile";?></h6>
                </div>
                <div class="btn-box2">
                    <button onclick="window.location.href ='updatemobile.php'">Edit</button>
                </div>
            </div>
            <div class="in-boxx3 width">
                <div class="inner-box3">
                    <strong>Email:</strong>
                <h6><?php echo "$email";?></h6>
                </div>
                <div class="btn-box3">
                    <button onclick="window.location.href ='updateemail.php'">Edit</button>
                </div>
            </div>
            <div class="in-boxx4 width">
                <div class="inner-box4">
                    <strong>Password:</strong>
                <h6><?php echo "$password";?></h6>
                </div>
                <div class="btn-box4">
                    <button onclick="window.location.href ='updatepassword.php'">Edit</button>
                </div>
            </div>
        </div>
    </div>
        <?php
            include("footer.php");
        ?>
    <script src="../js/script.js"></script>
    
</body>
</html>