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
    <title>Payment</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link rel="stylesheet" href="../css/navbar2.css">
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/mycart.css">
    <link rel="stylesheet" href="../css/footer.css">
    <style>
           
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
        .pro{
            border:1px solid;
            padding: 10px;
            width:150px;
            margin-bottom: 3px;
            
        }
        .pro-img{
    width: 100%;
    border-radius: 20px;
}
.des{
    text-align: left;
    padding: 10px 0;
}
.des span{
    color: #606063;
    font-size: 12px;
}
.des h5{
    padding-top: 7px;
    color: #1a1a1a;
    font-size: 14px;
}
.des h4{
    padding-top: 7px;
    font-size: 15px;
    font-weight: 700;
    color: #088178;
}

        .pay-container{
            
            margin-top: 40px;
            
        }
        .pay-container button{
            border: 1px solid black;
            color: black;
            font-weight: 400;
            border-radius: 3px;
            background: rgb(210, 231, 237);
        }
        .section-p1 button{
            border: 1px solid black;
            color: black;
            font-weight: 400;
            border-radius: 3px;
            background: rgb(210, 231, 237);
        }
        .pay-add{
            display: flex;
            
        }
        .fw{
            
            
        }
        .pay-box{
            width:100%;
        }
        .pay-opt {
            width: 715px;
            
        }
        .pay-opt input{
            width: 20px;
        }
        .pay-container strong{
            padding: 0 10px;
        }
        
        .pay-add .rd{
            margin: 10px;
            width: 700px;
            padding:10px;
            border: 1px solid;
            border-radius: 6px ;
        }
        .pay-sum{
            height: 200px;
            margin-left:40px;
            padding:20px;
            border: 1px solid;
            border-radius: 6px;
        }
    </style>
</head>
<body>
<?php
      include("navbar2.php");
    ?>
        <!-- navbar the end -->
    <section class= "section-p1">
        <h2 style="margin-left:48%;">Checkout</h2><br>
        
        <div style="display:flex;margin-right:180px;margin-left: 100px;">
        <div style="margin-left:90px;display:flex;flex-wrap:wrap;">
            <h4>Products your are buying</h4>
            <?php
            checkout_products();
            ?>
        </div>
        <div class="pay-container">
            <div class="pay-add">
                <div class="pay-box">
                    <h4><strong>1</strong> Delivery Address</h4>
                </div>
                <div class=" fw">
                    <h5><?php echo $address;?></h5>
                </div>
                <div class="pay-box">
                    <a href="youraddress.php"><button>Change</button></a>
                </div>
            </div>
            <div class="pay-add">
                <div class="pay-opt">
                    <h4><strong>2</strong>Select a payment option</h4>
                    <div class="rd">
                        <input type="radio" name="cod"  id="cod" onchange="enblbtn()">
                        <label >cash on delivery</label>
                    </div>
                </div>
                
            </div>
        </div>
        <div class="pay-sum">
            <h4>Order summary</h4>
            <table>
           <?php getpay_price();?>
            </table>
            <form action="" method="post">
                <button disabled id="btn" name="sub" type="submit" style="background:none;">Place order</button>
            </form>
            
        </div>
        </div>
    </section>
    <?php
      include("footer.php");
    ?>
    <script>
        function enblbtn() {
            const btn =document.getElementById('btn');
            
            document.querySelector("#btn").disabled = false;
            btn.style.background=('red');
            
            
        }
       
    </script>
    <script src="../js/script.js"></script>
</body>
</html>

<?php
    $connection = mysqli_connect('localhost','root','','twa');
    $email=$_SESSION['user_email']; 
    $query = "SELECT * FROM usertb WHERE email = '$email'";
    $result = mysqli_query($connection, $query);
    $row_user = mysqli_fetch_assoc($result);
    $address=$row_user['address'];
    
    if(isset($_POST['sub'])){
        if(empty($address)){
            echo"<script>alert('address is empty!')</script>";
        }else{
        $id=$_SESSION['userid'];
        $prd_id=$_POST['sub'];
        $prdprice="SELECT * FROM `Product_table` WHERE product_id='$prd_id'";
        $result_product=mysqli_query($connection,$prdprice);
        $row = mysqli_fetch_assoc($result_product);
        $prd_price=$row['product_price'];
        
        }
    }
?>