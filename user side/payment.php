<?php 
    include('../include/information.php');
    include('../functions/common_function.php');
    $connection = mysqli_connect('localhost','root','','twa');
    $email=$_SESSION['user_email'];
    $select_address="SELECT * FROM `user_address` WHERE `user_email`='$email'";  
    $result_address = mysqli_query($connection, $select_address);
    $row_add = mysqli_fetch_assoc($result_address);
    $user_address=$row_add['address_details'];
    $user_city=$row_add['city'];
    $user_state=$row_add['state'];
    $user_pincode=$row_add['pincode'];
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
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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
                    <p><?php echo $user_address . ", " . $user_city . " " . $user_pincode . ", " . $user_state;?></p>
                </div>
                <div class="pay-box">
                    <a href="youraddress.php<?php 
                    if(isset($_GET['pay'])){
                    echo "?pay=".$_GET['pay'];}
                    else{
                        echo "?pay=payment";
                    }
                        ?>"><button>Change</button></a>
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
    <div id='loading_wrap' style='position:fixed; height:100%; width:100%; overflow:hidden; top:0; left:0;'>Loading, please wait.</div>
    <script>
        function enblbtn() {
            const btn =document.getElementById('btn');
            document.querySelector("#btn").disabled = false;
            btn.style.background=('red');
        }
        $('#loading_wrap').remove();
        
    </script>
       
       
    <script src="../js/script.js"></script>
</body>
</html>

<?php
    $connection = mysqli_connect('localhost','root','','twa');
    $email=$_SESSION['user_email']; 
    
    $select_address="SELECT * FROM `user_address` WHERE `user_email`='$email'";  
    $result_address = mysqli_query($connection, $select_address);
    $row_add = mysqli_fetch_assoc($result_address);
    $user_address=$row_add['address_details'];
    $user_city=$row_add['city'];
    $user_state=$row_add['state'];
    $user_pincode=$row_add['pincode'];
    $query = "SELECT * FROM usertb WHERE email = '$email'";

    $result = mysqli_query($connection, $query);
    $row_user = mysqli_fetch_assoc($result);
    $address=$row_user['address'];
    $username=$row_user['name'];
    $id=$_SESSION['userid'];
    if(isset($_POST['sub'])){
        if(empty($user_address)){
            echo"<script>alert('address is empty!')</script>";
        }else{
            if(isset($_GET['pay'])){
                $product_id=$_GET['pay'];
                $select_product="SELECT * FROM `Product_table` WHERE product_id='$product_id'";
                $result_product=mysqli_query($connection,$select_product);
                $row_product_price=mysqli_fetch_array($result_product);
                $amount_due=$row_product_price['product_price'];
                $product_name=$row_product_price['product_title'];
                $invoice_number=mt_rand();
                $total_products=1;
                $status="pending";
                $insert_qry="INSERT INTO `user_orders`(`user_id`, `amount_due`, `invoice_number`, `total_products`, `order_date`, `order_status`, `product_id`) 
                VALUES ('$id','$amount_due','$invoice_number','$total_products',current_timestamp(),'$status','$product_id')";
                 $result_order=mysqli_query($connection,$insert_qry);

                $select_ustb="SELECT * FROM `usertb` WHERE `id`='$id'";
                $result_ustb=mysqli_query($connection,$select_ustb);
                $row=mysqli_fetch_assoc($result_ustb);
                
                $pre_purchase=$row['total_purchase'];
                $up_totalpur=$pre_purchase+$amount_due;
                
                
                $pre_totalprd=$row['total_orders'];
                $up_totalorder=$pre_totalprd+$total_products;
                
                $update_usertb="UPDATE `usertb` SET `total_orders`='$up_totalorder',`total_purchase`=' $up_totalpur' WHERE `id`=$id";
                $result_up=mysqli_query($connection,$update_usertb);
                

                 $select_category="SELECT * FROM product_table where `product_id`='$product_id' ";
                $result_cat=mysqli_query($connection,$select_category);
                $result_category=mysqli_fetch_assoc($result_cat);
                $pre_stock=$result_category['product_stock'];
                $pre_sales=$result_category['product_sales'];
                 $stock=$pre_stock-$total_products;
                 $sales=$pre_sales+$total_products;
                 $up_prducttb="UPDATE `product_table` SET `product_stock`='$stock',`product_sales`='$sales' where `product_id`=$product_id";
                 $result_prdtb=mysqli_query($connection,$up_prducttb);
                 echo"<script>alert('your order is placed.');window.location.href ='orders.php'</script>";


                 //email data
                 $select_order="SELECT * FROM `user_orders` WHERE invoice_number='$invoice_number'";
                 $result_order=mysqli_query($connection,$select_order);
                 $row_order=mysqli_fetch_array($result_order);  
                 $order_id=$row_order['order_id'];
                 $order_date=$row_order['order_date'];

                 $address_user = $user_address . ", " . $user_city . " " . $user_pincode . ", " . $user_state;

                 
            //inserting in invoice table
            $insert_invoice="INSERT INTO `invoice_order`(`order_id`, `user_id`,`product`,`invoice`, `order_date`, `order_receiver_name`, `order_receiver_address`, `order_total_before_tax`, 
            `quantity`, `order_total_amount_due`) 
            VALUES ('$order_id','$id','$product_name','$invoice_number','$order_date','$username','$address_user','$amount_due','$total_products',' $amount_due')";
            mysqli_query($connection,$insert_invoice);


            // $insert_invoice="INSERT INTO `invoice_order`(`order_id`, `user_id`,`product`,`invoice`, `order_date`, `order_receiver_name`, `order_receiver_address`, `order_total_before_tax`, 
            // `quantity`, `order_total_amount_due`) 
            // VALUES ('$order_id','$id','$product_name',`$invoice_number`,'$order_date','$username','$address_user','$amount_due','1','$amount_due')";
            // mysqli_query($connection,$insert_invoice);

                    include('../smtp/PHPMailerAutoload.php');
                
			// Create a new PHPMailer instance
                    $mail = new PHPMailer;
                    //$mail->SMTPDebug  = 3;
                    // SMTP settings
                    $mail->isSMTP();

                    $mail->Host = 'smtp.gmail.com';
                    $mail->Port = 587;
                    $mail->SMTPSecure = 'tls';
                    $mail->SMTPAuth = true;
                    $mail->Username = 'myfactoryinfo7@gmail.com';
                    $mail->Password = 'anvegswsghtktbir';

                    // Sender and recipient
                    $mail->setFrom('myfactoryinfo7@gmail.com', 'ToyFactory');
                    $mail->addAddress($email);

                    // Email subject and body
                    $mail->Subject = "Your Order Confirmation - $order_id";
                    $mail->Body = "Dear $username,
Thank you for shopping with ToyFactory! We're excited to let you know that your order has been successfully placed and is currently being processed.
                    
Here are the details of your order:
                    
Order Number: $order_id
Order Date: $order_date
Shipping Address: $address
Payment Method: cash on delivery(COD)
                    
Order Summary:              
$product_name
                    
We will send you an email as soon as your order is shipped with a tracking number, so you can keep an eye on your package as it makes its way to you. If you have any questions or concerns, please don't hesitate to contact our customer service team at myfactoryinfo7@gmail.com.
Thank you again for choosing ToyFactory. We appreciate your business and hope you enjoy your purchase!
                    
Best regards,
Mohit Verma
ToyFactory Team";

                    // Send email
                    if (!$mail->send()) {
                        echo 'Error sending email: ' . $mail->ErrorInfo;
                    } else{
                        $block='none';
                        $none='block';
                    }

                 
               
                
            }else{
                $connection = mysqli_connect('localhost','root','','twa');
            $email=$_SESSION['user_email'];
            $get_ip_add=get_ip_address();
            $select_category = "SELECT * FROM `cart_details` WHERE user_email='$email'";
            $result_brand=mysqli_query($connection,$select_category);
            $num_of_rows=mysqli_num_rows($result_brand);
            
            if($num_of_rows==0){
                echo "0";
            }else{
                $total_price = 0; // Initialize $total_price outside the loop
                while($row=mysqli_fetch_array($result_brand)){
                    $subtotal=$row['subtotal'];
                    $product_id=$row['product_id'];
                    $product_pr=$row['subtotal'];
                    $product_quantity=$row['quantity'];
                        
                       
                         $invoice_number=mt_rand();
                         $status="pending";
                                 $insert_qry="INSERT INTO `user_orders`(`user_id`, `amount_due`, `invoice_number`, `total_products`, `order_date`, `order_status`,`product_id`) 
                                 VALUES ('$id','$product_pr','$invoice_number','$product_quantity',current_timestamp(),'$status','$product_id')";
                                  $result_order=mysqli_query($connection,$insert_qry);
                                  $select_ustb="SELECT * FROM `usertb` WHERE `id`='$id'";
                                  $result_ustb=mysqli_query($connection,$select_ustb);
                                  $row=mysqli_fetch_assoc($result_ustb);
                                               
                                  $pre_purchase=$row['total_purchase'];
                                  $up_totalpur=$pre_purchase+$product_pr;
                                  
                                  
                                  $pre_totalprd=$row['total_orders'];
                                  $up_totalorder=$pre_totalprd+$product_quantity;
                                  
                                  $update_usertb="UPDATE `usertb` SET `total_orders`='$up_totalorder',`total_purchase`=' $up_totalpur' WHERE `id`=$id";
                                  $result_up=mysqli_query($connection,$update_usertb);
                                  
                  
                                   $select_category="SELECT * FROM product_table where `product_id`='$product_id' ";
                                  $result_cat=mysqli_query($connection,$select_category);
                                  $result_category=mysqli_fetch_assoc($result_cat);
                                  $pre_stock=$result_category['product_stock'];
                                  $pre_sales=$result_category['product_sales'];
                                  $product_price=$result_category['product_price'];
                                  $product_title=$result_category['product_title'];
                                   $stock=$pre_stock-$product_quantity;
                                   $sales=$pre_sales+$product_quantity;
                                   $up_prducttb="UPDATE `product_table` SET `product_stock`='$stock',`product_sales`='$sales' where `product_id`=$product_id";
                                   $result_prdtb=mysqli_query($connection,$up_prducttb);
                                   $address_user = $user_address . ", " . $user_city . " " . $user_pincode . ", " . $user_state;

                 
                        //inserting in invoice table
                        $select_order="SELECT * FROM `user_orders` WHERE invoice_number='$invoice_number'";
                        $result_order=mysqli_query($connection,$select_order);
                        $row_order=mysqli_fetch_array($result_order);  
                        $order_id=$row_order['order_id'];
                        $order_date=$row_order['order_date'];
                        $insert_invoice="INSERT INTO `invoice_order`(`order_id`, `user_id`,`product`,`invoice`, `order_date`, `order_receiver_name`, `order_receiver_address`, `order_total_before_tax`, 
                        `quantity`, `order_total_amount_due`) 
                        VALUES ('$order_id','$id','$product_title','$invoice_number','$order_date','$username','$address_user','$product_price',' $product_quantity',' $subtotal')";
                        mysqli_query($connection,$insert_invoice);
                       
                        
                }
               
                
               
        
                        
                $select_order="SELECT * FROM `user_orders` WHERE invoice_number='$invoice_number'";
                $result_order=mysqli_query($connection,$select_order);
                $row_order=mysqli_fetch_array($result_order);  
                $order_id=$row_order['order_id'];
                $order_date=$row_order['order_date'];

               // deleting cart data

               $dlt_cart="DELETE FROM `cart_details` WHERE `user_email`='$email'";
               $rslt_dlt=mysqli_query($connection,$dlt_cart);
                         //email data
                        
                        

                        
            
                            include('../smtp/PHPMailerAutoload.php');
                        
                    // Create a new PHPMailer instance
                            $mail = new PHPMailer;
                            //$mail->SMTPDebug  = 3;
                            // SMTP settings
                            $mail->isSMTP();
        
                            $mail->Host = 'smtp.gmail.com';
                            $mail->Port = 587;
                            $mail->SMTPSecure = 'tls';
                            $mail->SMTPAuth = true;
                            $mail->Username = 'myfactoryinfo7@gmail.com';
                            $mail->Password = 'anvegswsghtktbir';
        
                            // Sender and recipient
                            $mail->setFrom('myfactoryinfo7@gmail.com', 'ToyFactory');
                            $mail->addAddress($email);
        
                            // Email subject and body
                            $mail->Subject = "Your Order Confirmation - $order_id";
                            $mail->Body = "Dear $username,
Thank you for shopping with ToyFactory! We're excited to let you know that your order has been successfully placed and is currently being processed.
                            
Here are the details of your order:
                            
Order Number: $order_id
Order Date: $order_date
Shipping Address: $address
Payment Method: cash on delivery(COD)
                            
Order Summary:              
Total order:$product_quantity
                            
We will send you an email as soon as your order is shipped with a tracking number, so you can keep an eye on your package as it makes its way to you. If you have any questions or concerns, please don't hesitate to contact our customer service team at myfactoryinfo7@gmail.com.
Thank you again for choosing ToyFactory. We appreciate your business and hope you enjoy your purchase!
                            
Best regards,
Mohit Verma
ToyFactory Team";
        
                            // Send email
                            if (!$mail->send()) {
                                echo 'Error sending email: ' . $mail->ErrorInfo;
                            } else{
                                $block='none';
                                $none='block';
                            }
        
            }
             echo"<script>alert('your order is placed.');window.location.href ='orders.php'</script>";
            
            }
        }
    }
?>