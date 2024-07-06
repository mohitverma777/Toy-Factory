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
    <title>Mycart</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link rel="stylesheet" href="../css/mycart.css">
    <link rel="stylesheet" href="../css/navbar2.css">
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
 
        .section-p1 {
            padding: 30px 80px 0 80px; 
        }
        #cart table a{
            text-decoration: none;
            color: black;
        }
        #cart table a:hover{
            text-decoration: underline;
        }
        #cart table{
            
            width:100%;
            border-collapse: collapse;
            table-layout: fixed;
            white-space: nowrap;
        }
        #cart table button{
            background-color: #088178;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 12px 8px;
        }
        #cart table img{
            width: 120px;
        }
        #cart table td:nth-child(1){
            width: 100px;
            text-align: center;
        }
        #cart table td:nth-child(2){
            width: 150px;
            text-align: center;
        }
        #cart table td:nth-child(3){
            width: 250px;
            text-align: center;
        }
        #cart table td:nth-child(4),
        #cart table td:nth-child(5),
        #cart table td:nth-child(6){
            width: 150px;
            text-align: center;
        }
        #cart table td:nth-child(5) input{
            padding: 10px 5px 10px 15px;
        }
        #cart table thead{
            border: 1px solid #e2e9e1;
            border-left: none;
            border-right: none;
        }
        #cart table thead td{
            font-weight: 700;
            text-transform: uppercase;
            font-size: 13px;
            padding: 18px 0;
        }
        #cart table tbody tr td{
            padding-top: 15px;
        }
        #cart table thead td{
            font-size: 13px;
        }
        #cart-add {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }
        #coupon{
            width: 50%;
            margin-bottom: 30px;
        }
        #coupon h3,#subtotal h3{
            padding-bottom: 15px;
        }
        #coupon input{
            padding: 10px 20px;
            outline: none;
            width: 60%;
            margin-right: 10px;
            border: 1px solid #e2e9e1;
        }
        #coupon button{
            background-color: #088178;
            color: white;
            border: none;
            border-radius: 5px;
            width: 100px;
            padding: 12px 8px;
        }
        #subtotal{
            width: 50%;
            margin-bottom: 30px;
            border:  1px solid #e2e9e1;
            padding: 30px;
        }
        #subtotal table{
            border-collapse: collapse;
            width: 100%;
            margin-bottom: 20px;
        }
        #subtotal table td{
            width: 50%;
            border: 1px solid #e2e9e1;
            padding: 10px;
            font-size: 13px;
        }
        #cart-add .normal{
            background-color: #088178;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 12px 8px;
        }
        @media (max-width:477px){
            #cart{
                overflow-x: auto;
            }
            #cart-add{
                
                flex-direction: column;
                
            }
            #coupon{
                width: 100%;
            }
            #subtotal{
                width: 100%;
                padding: 20px;
            }
        }
        /* gh */
        #snackbar {
  visibility: hidden;
  min-width: 250px;
  margin-left: -125px;
  background-color: white;
  color: green;
  text-align: center;
  border:1px solid green;
  border-radius: 8px;
  padding: 10px;
  position: fixed;
  z-index: 1;
  left: 50%;
  top: 30px;
  font-size: 17px;
}

#snackbar.show {
  visibility: visible;
  -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
  animation: fadein 0.5s, fadeout 0.5s 2.5s;
}

@-webkit-keyframes fadein {
  from {top: 0; opacity: 0;} 
  to {top: 30px; opacity: 8;}
}

@keyframes fadein {
  from {top: 0; opacity: 0;}
  to {top: 30px; opacity: 8;}
}

@-webkit-keyframes fadeout {
  from {top: 30px; opacity: 8;} 
  to {top: 0; opacity: 0;}
}

@keyframes fadeout {
  from {top: 30px; opacity: 8;}
  to {top: 0; opacity: 0;}
}

    </style>
</head>
<body>

<?php
      include("navbar2.php");
    ?>
<div id="snackbar">item deleted..</div>
    <section id="cart" class="section-p1">
        <table width="100%">
            <thead>
                <tr>
                    <td>Remove</td>
                    <td>Image</td>
                    <td>Product</td>
                    <td>Price</td>
                    <td>Quantity</td>
                    <td>Subtotal</td>
                </tr>
            </thead>
            <tbody>
            <?php
                showcartdata();
            ?>
            </tbody>
        </table>
    </section>
    <section id="cart-add" class="section-p1">
        <div id="coupon">
           
        </div>
        <div id="subtotal">
            <h3>Cart Total</h3>
            <table>
                <tr>
                    <td>Cart Subtotal</td>
                    <td><?php total_cart_price();?></td>
                </tr>
                <tr>
                    <td>Shipping</td>
                    <td>Free</td>
                </tr>
                <tr>
                    <td><strong>Total</strong></td>
                    <td><strong><?php total_cart_price();?></strong></td>
                </tr>
            </table>
            <a href="payment.php"><button class="normal">Proceed to Checkout</button></a>
        </div>
    </section>
    <?php
      include("footer.php");
    ?>
        <script>
            function myFunction() {
  var x = document.getElementById("snackbar");
  x.className = "show";
  setTimeout(function(){ x.className = x.className.replace("show", ""); }, 10000);
}
        </script>
    <script src="../js/script.js"></script>
</body>
</html>
<?php
    $connection = mysqli_connect('localhost','root','','twa');
    if(isset($_POST['update_cart'])){
        session_start();
        
        $email=$_SESSION['user_email'];
        $quantity=$_POST['quantity'];
        $product_id=$_POST['product_id'];
        $select_product="SELECT * FROM `Product_table` WHERE product_id='$product_id'";
        $result_product=mysqli_query($connection,$select_product);
        $row_d=mysqli_fetch_assoc($result_product);
        $product_price=$row_d['product_price'];
        $subtotal=$product_price*$quantity;
        $insert_qry="UPDATE `cart_details` SET `quantity`='$quantity' ,`subtotal`='$subtotal' where user_email='$email' and product_id='$product_id'";
        $result_brand=mysqli_query($connection,$insert_qry);
        echo "<script>history.back();</script>";
    }
    if(isset($_POST['delete_cart'])){
        session_start();
        $email=$_SESSION['user_email'];
        $quantity=$_POST['quantity'];
        $product_id=$_POST['product_id'];
        $insert_qry="DELETE FROM `cart_details` where user_email='$email' and product_id='$product_id'";
        $result_brand=mysqli_query($connection,$insert_qry);
        echo "<script >history.back();</script>";
    }
?>