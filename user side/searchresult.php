<?php 
    include('../functions/common_function.php');
    include('../include/information.php');  
    cart();
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
    #product1{
        margin-top:20px;
    }
   
    </style>
</head>
<body>
<?php
      include("navbar2.php");
    ?>
    <section id="product1" class="section-p1">
            <h2><?php printhd();?></h2>
            <div class="pro-container">
                                <?php
                                    
                                    search_products();
                                ?>
            </div>
        </section>
 
        <?php
      include("footer.php");
    ?>
    <script src="../js/script.js"></script>
    
</body>
</html>