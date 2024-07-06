<?php
 function getallproducts(){
    $connection = mysqli_connect('localhost','root','','twa');
    $select_category="SELECT * FROM product_table";
            $result_category=mysqli_query($connection,$select_category);
            
                
            while($row_data=mysqli_fetch_assoc($result_category))
            {
                $product_title=$row_data['product_title'];
                $product_price=$row_data['product_price'];
                
                $product_brand=$row_data['brand_id'];
                $image_name = $row_data['product_image1'];
                $product_id=$row_data['product_id'];
                $product_stock=$row_data['product_stock'];
                $product_sales=$row_data['product_sales'];
                $status=$row_data['status'];
                $select_brand="SELECT * FROM brands where brand_id='$product_brand'";
                $result_brand=mysqli_query($connection,$select_brand);
                $row_d=mysqli_fetch_assoc($result_brand);
                 $brand_name=$row_d['brand_title'];
                $image_path = "product images/$image_name";
                echo "<div class='products-row'>
                <div class='product-cell price'><span class='cell-label'>Edit:</span>
                <a href ='product_update.php?prd=$product_id' style='text-decoration:none;color:white' ><img src='edit.png'></a></div>
                <div class='product-cell stock'><span class='cell-label'>Stock:</span>$product_id</div>
                  <div class='product-cell image'>
                    <img src='$image_path' alt='product'>
                    <span>$product_title</span>
                  </div>
                <div class='product-cell category'><span class='cell-label'>Brand:</span>$brand_name</div>
                <div class='product-cell status-cell'>
                  <span class='cell-label'>Status:</span>
                  <span class='status active'>$status</span>
                </div>
                <div class='product-cell sales'><span class='cell-label'>Sales:</span>$product_sales</div>
                <div class='product-cell stock'><span class='cell-label'>Stock:</span>$product_stock</div>
                <div class='product-cell price'><span class='cell-label'>Price:</span>₹$product_price</div>
                
                <div class='product-cell price'><span class='cell-label'>Delete:</span><form action='product_delete.php' method='post'>
                <input type='text' name='product_id' value='$product_id' style='display:none;'><button type='submit' name='delete_product' onClick='alert('Confirm Delete')' style='cursor:pointer;background:none;padding-right:1px;'><img src='delete.png'></button></form></div>
              </div>";
            }
 }


 function get_customers_data(){
    $connection = mysqli_connect('localhost','root','','twa');
    $select_category="SELECT * FROM usertb";
    $result_category=mysqli_query($connection,$select_category);
     while($row=mysqli_fetch_assoc($result_category))
            {
                $userid=$row['id'];
                $address=$row['address'];
                $mobile=$row['mobile'];
                $image_name = $row['image'];
                $image_path = "../user images/$image_name";
                $name=$row['name'];
                $email=$row['email'];
                $purchase=$row['total_purchase'];
          
                
                
                $totalprd=$row['total_orders'];
    
                echo "<div class='products-row'>
                <div class='product-cell id'><span'>$userid</span></div>
                <div class='product-cell '>
                    <img src='$image_path' >
                  </div>
                  <div class='product-cell'><span>$name</span>
                  </div>
                <div class='product-cell category'><span class='cell-label'>Brand:</span>$email</div>
                
                <div class='product-cell stock'><span class='cell-label'>Stock:</span>$totalprd</div>
                <div class='product-cell price'><span class='cell-label'>Price:</span>₹$purchase</div>
                
                
              </div>";
            }
 }

 function search_products(){
    $connection = mysqli_connect('localhost','root','','twa');
    if(isset($_GET['search_data'])){
        $value=$_GET['search_data'];
        // condition set or not
        $search_qry="SELECT * FROM `product_table` WHERE product_keyword LIKE '%$value%' or product_title LIKE '%$value%' or product_id='$value' ";
        $result_search=mysqli_query($connection,$search_qry);
        while($row_data=mysqli_fetch_assoc($result_search))
        {
          $product_title=$row_data['product_title'];
          $product_price=$row_data['product_price'];
          $product_brand=$row_data['brand_id'];
          $image_name = $row_data['product_image1'];
          $product_id=$row_data['product_id'];
          $product_stock=$row_data['product_stock'];
          $product_sales=$row_data['product_sales'];
          $status=$row_data['status'];
          $select_brand="SELECT * FROM brands where brand_id='$product_brand'";
          $result_brand=mysqli_query($connection,$select_brand);
          $row_d=mysqli_fetch_assoc($result_brand);
           $brand_name=$row_d['brand_title'];
          $image_path = "product images/$image_name";
          echo "<div class='products-row'>
          <div class='product-cell price'><span class='cell-label'>Edit:</span>
          <a href ='product_update.php?prd=$product_id' style='text-decoration:none;color:white' ><img src='edit.png'></a></div>
          <div class='product-cell stock'><span class='cell-label'>Stock:</span>$product_id</div>
            <div class='product-cell image'>
              <img src='$image_path' alt='product'>
              <span>$product_title</span>
            </div>
          <div class='product-cell category'><span class='cell-label'>Brand:</span>$brand_name</div>
          <div class='product-cell status-cell'>
            <span class='cell-label'>Status:</span>
            <span class='status active'>$status</span>
          </div>
          <div class='product-cell sales'><span class='cell-label'>Sales:</span>$product_sales</div>
          <div class='product-cell stock'><span class='cell-label'>Stock:</span>$product_stock</div>
          <div class='product-cell price'><span class='cell-label'>Price:</span>₹$product_price</div>
          
          <div class='product-cell price'><span class='cell-label'>Delete:</span><form action='product_delete.php' method='post'>
          <input type='text' name='product_id' value='$product_id' style='display:none;'><button type='submit' name='delete_product' onClick='alert('Confirm Delete')' style='cursor:pointer;background:none;padding-right:1px;'><img src='delete.png'></button></form></div>
        </div>";
        }
    }
}

function getcategory(){
  $connection = mysqli_connect('localhost','root','','twa');
  $select_category="SELECT * FROM categories";
  $result_category=mysqli_query($connection,$select_category);
  while($row_data=mysqli_fetch_assoc($result_category)){
      $category_title=$row_data['category_title'];
      $category_id=$row_data['category_id'];
      echo "<li>$category_title</li>";
  }
}

// getting brands 
function getbrands(){
  $connection = mysqli_connect('localhost','root','','twa');
  $select_brand="SELECT * FROM brands";
  $result_brand=mysqli_query($connection,$select_brand);
  while($row_data=mysqli_fetch_assoc($result_brand)){
      $brand_title=$row_data['brand_title'];
      $brand_id=$row_data['brand_id'];
      echo "<li>$brand_title<a href ='brand_update.php?brand=$brand_id' style='text-decoration:none;color:white;' ><img src='edit.png' height='20px' width='20px'></a></li>";
  }
}

//getting charachters
function getcharacters(){
  $connection = mysqli_connect('localhost','root','','twa');
  $select_character="SELECT * FROM characters";
  $result_character=mysqli_query($connection,$select_character);
  while($row_data=mysqli_fetch_assoc($result_character)){
      $character_title=$row_data['charachter_title'];
      $character_id=$row_data['character_id'];
      echo "<li>$character_title <a href ='character_update.php?chr=$character_id' style='text-decoration:none;color:white;' ><img src='edit.png' height='20px' width='20px'></a></li>";
  }
}

function get_contactus_data(){
  $connection = mysqli_connect('localhost','root','','twa');
    $select_category="SELECT * FROM `contact_us`";
    $result_category=mysqli_query($connection,$select_category);
     while($row=mysqli_fetch_assoc($result_category))
            {
                $userid=$row['contact_id'];
                $name=$row['contact_name'];
                $email=$row['contact_email'];
                $message=$row['contact_message'];
    
                echo "<div class='products-row'>
                <div class='product-cell id'><span'>$userid</span></div>
                <div class='product-cell'><span>$name</span></div>
                <div class='product-cell category'><span class='cell-label'>Brand:</span>$email</div>
                <div class='product-cell'><span class='cell-label'>Sales:</span>$message</div>
              </div>";
            }
}

function show_order_data(){
  $connection = mysqli_connect('localhost','root','','twa');
  $select_category = "SELECT * FROM `user_orders`";
  $result_bran=mysqli_query($connection,$select_category);
  $num_of_rows=mysqli_num_rows($result_bran);
  if($num_of_rows==0){
      echo "<h4><h4 style='color:white;'>No orders received yet.</h4></h4>";
  }else{
  while($row=mysqli_fetch_array($result_bran)){
      $total_prd=$row['total_products'];
      $amount=$row['amount_due'];
      $invoice=$row['invoice_number'];
      $date=$row['order_date'];
      $status=$row['order_status'];
      $user_id=$row['user_id'];
      $order_id=$row['order_id'];
      $productid=$row['product_id'];
    
    if($status=='pending'){
      $disp='block';
    }else{
      $disp='none';
    }

    $select_user = "SELECT * FROM `usertb` WHERE id='$user_id'";
  $result_bra=mysqli_query($connection,$select_user);
  $row_bra=mysqli_fetch_array($result_bra);
  $user_email=$row_bra['email'];
 $user_name=$row_bra['name'];
      //$email=$_SESSION['user_email'];
    $select_address="SELECT * FROM `user_address` WHERE `user_email`='$user_email'";  
    $result_address = mysqli_query($connection, $select_address);
    $row_add = mysqli_fetch_assoc($result_address);
    $user_address=$row_add['address_details'];
    $user_city=$row_add['city'];
    $user_state=$row_add['state'];
    $user_pincode=$row_add['pincode'];
    
               
              
          echo "<div class='products-row'>
          <div class='product-cell sales'><span class='cell-label'>Sales:</span>$order_id</div>
          <div class='product-cell stock'><span class='cell-label'>Stock:</span>$user_id</div>
          <div class='product-cell stock'><span class='cell-label'>Stock:</span>$productid</div>
          <div class='product-cell price'><span class='cell-label'>Price:</span>$total_prd</div>
          <div class='product-cell sales'><span class='cell-label'>Sales:</span>$invoice</div>
          <div class='product-cell stock'><span class='cell-label'>Stock:</span>$date</div>
          <div class='product-cell price'><span class='cell-label'>Price:</span>$user_address ,$user_city  $user_pincode , $user_state</div>
          <div class='product-cell price'><span class='cell-label'>Price:</span>₹$amount</div>
          <div class='product-cell price'><span class='cell-label'>Price:</span><span class='status active'>$status</span></div>
          <div class='product-cell price'><span class='cell-label'>Delete:</span>
          <a href ='orders.php?ship=$order_id' style='text-decoration:none;color:white;background:green;padding:2px;display:$disp;'>Dispatch</a></div>
          </div>
          ";
  }
  }
}

function partner_home(){
  $connection = mysqli_connect('localhost','root','','twa');
  
  $email=$_SESSION['partner_email'];
  $select_query="SELECT * FROM `partner_table` WHERE `partner_email`='$email'";
  $result=mysqli_query($connection,$select_query);
  $row_data=mysqli_fetch_assoc($result);
  $pincode=$row_data['zipcode'];
  $city=$row_data['city'];
  $state=$row_data['state'];
  if (is_null($pincode)) {
    // All three cells are empty
   echo "<section class='shipping'>
   <center>    
 <h1>GET STARTED</h1>
 <p>Please enter your address details.</p>
 </center>
 
   <div class='form'>
   <form autocomplete='off' method='post' action='address_form.php'>
 <div class='fields fields--3'>
   <label class='field'>
     <span class='field__label' for='zipcode'>Zip code</span>
     <input class='field__input' type='text' id='pincode' name='pincode' oninput='get_details()' required='required' value=''/>
   </label>
   <label class='field'>
     <span class='field__label' for='city'>City</span>
     <input class='field__input' type='text' id='city' name='city'  required='required' value=''/>
   </label>
   <label class='field'>
     <span class='field__label' for='state'>State</span>
     <input  class='field__input' id='state' name='state' required='required' value=''/>
   </label>
 </div>
 <hr>
 <button type='submit' class='button' name='save_address'>Save</button>
</form>
</div>
   </section>";
} 
}


function partner_order_data(){
  $connection = mysqli_connect('localhost','root','','twa');
  
 $partnerid=$_SESSION['partner_id'];
  $select_orders="SELECT * FROM `user_orders` WHERE `partner_id`='$partnerid'";
  $result_order=mysqli_query($connection,$select_orders);
  while($row=mysqli_fetch_assoc($result_order)){
    $total_prd=$row['total_products'];
    $amount=$row['amount_due'];
    $invoice=$row['invoice_number'];
    $date=$row['order_date'];
    $status=$row['order_status'];
    $user_id=$row['user_id'];
    $order_id=$row['order_id'];
    $productid=$row['product_id'];
    
  
    
  $select_user = "SELECT * FROM `usertb` WHERE id='$user_id'";
  $result_bra=mysqli_query($connection,$select_user);
  $row_bra=mysqli_fetch_array($result_bra);
  $user_email=$row_bra['email'];
 $user_name=$row_bra['name'];
  
  $select_address="SELECT * FROM `user_address` WHERE `user_email`='$user_email'";  
     $result_address = mysqli_query($connection, $select_address);
     $row_add = mysqli_fetch_assoc($result_address);
     $user_address=$row_add['address_details'];
     $user_city=$row_add['city'];
     $user_state=$row_add['state'];
     $user_pincode=$row_add['pincode'];
     $info='';
    if($status=='shipped'){
      $info=" <form action='outfordlvry.php' method='post'><input type='hidden' value='$user_email' name='user_email' />
      <input type='hidden' value='$order_id' name='order_id''/>
      <input type='submit' name='cnf' value='confirm' style='background:black;color:white;cursor:pointer';/></form>";
    
    }elseif($status=='outfordelivery'){
      $info=" <form action='outfordlvry.php' method='post'><input type='text' placeholder='enter otp' name='user_otp' width:5rem;' oninput='this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');' required/>
      <input type='hidden' value='$order_id' name='order_id''/>
      <input type='submit' value='verify' name='verify' style='background:black;color:white;cursor:pointer;'></form>";
     
    }else{
     $info=$status;
      
    }
    echo "
    <tr>
        <td>$order_id</td>
        <td>$user_name</td>
        <td> $user_address ,$user_city  $user_pincode , $user_state</td>
        <td>₹$amount</td>
        <td>$invoice</td>
        <td>$info</td>
       
    </tr>
    ";
  }
}
function totalperc(){
        $connection = mysqli_connect('localhost','root','','twa');
     $select_category="SELECT * FROM product_table";
             $result_category=mysqli_query($connection,$select_category);
             
                 $total_stock=0;
                 $total_sales=0;
             while($row_data=mysqli_fetch_array($result_category))
             {
                 $product_title=$row_data['product_title'];
                 $product_price=$row_data['product_price'];
                 
                 $product_brand=$row_data['brand_id'];
                 $image_name = $row_data['product_image1'];
                 $product_id=$row_data['product_id'];
                 $product_stock=$row_data['product_stock'];
                 $product_sales=$row_data['product_sales'];
                 $status=$row_data['status'];
                 $product_stoc=array($row_data['product_stock']);
            
                 $product_stock=array_sum($product_stoc);
                 $total_stock += $product_stock;

                 $product_sal=array($row_data['product_sales']);
            
                 $product_sales=array_sum($product_sal);
                 $total_sales += $product_sales;
                 
             }
             $count1 = $total_sales / $total_stock;
                $count2 = $count1 * 100;
            $count = number_format($count2, 0);
            echo $count.'%';
            }


function customers_home(){



  $connection = mysqli_connect('localhost','root','','twa');
  $select_category="SELECT * FROM usertb";
  $result_category=mysqli_query($connection,$select_category);
   while($row=mysqli_fetch_assoc($result_category))
          {
              $userid=$row['id'];
              $address=$row['address'];
              $mobile=$row['mobile'];
              $image_name = $row['image'];
              $image_path = "../user images/$image_name";
              $name=$row['name'];
              $email=$row['email'];
              $purchase=$row['total_purchase'];
        
              
              
              $totalprd=$row['total_orders'];
  
              echo"<div class='applicant-line'>
              <img src='$image_path' alt='profile'>
              <div class='applicant-info'>
                <span>$name </span>
                <p>$email </p>
                <p><strong>Orders:</strong>$totalprd <strong>Total purchase:</strong>₹$purchase</p>
              </div>
            </div>
            ";
          }
  
}

function producthome(){
  $connection = mysqli_connect('localhost','root','','twa');
  $select_category="SELECT * FROM product_table ";
          $result_category=mysqli_query($connection,$select_category);
          
              
          while($row_data=mysqli_fetch_assoc($result_category))
          {
              $product_title=$row_data['product_title'];
              $product_price=$row_data['product_price'];
              
              $product_brand=$row_data['brand_id'];
              $image_name = $row_data['product_image1'];
              $product_id=$row_data['product_id'];
              $product_stock=$row_data['product_stock'];
              $product_sales=$row_data['product_sales'];
              $status=$row_data['status'];
              $select_brand="SELECT * FROM brands where brand_id='$product_brand'";
              $result_brand=mysqli_query($connection,$select_brand);
              $row_d=mysqli_fetch_assoc($result_brand);
               $brand_name=$row_d['brand_title'];
              $image_path = "product images/$image_name";
              echo "<div class='products-row'>
              <div class='product-cell stock'><span class='cell-label'>Stock:</span>$product_id</div>
                <div class='product-cell image'>
                  <img src='$image_path' alt='product'>
                  <span>$product_title</span>
                </div>
              <div class='product-cell category'><span class='cell-label'>Brand:</span>$brand_name</div>
              <div class='product-cell status-cell'>
                <span class='cell-label'>Status:</span>
                <span class='status active'>$status</span>
              </div>
              <div class='product-cell sales'><span class='cell-label'>Sales:</span>$product_sales</div>
              <div class='product-cell stock'><span class='cell-label'>Stock:</span>$product_stock</div>
              <div class='product-cell price'><span class='cell-label'>Price:</span>₹$product_price</div>
            </div>";
          }
}

function getpolicy(){
  
// Assuming you have established a MySQL connection using mysqli_connect
$connection = mysqli_connect('localhost', 'root', '', 'twa');

// Prepare the SQL statement
$sql = "SELECT * FROM PrivacyPolicy";
$result = mysqli_query($connection, $sql);

// Fetch all the rows as an associative array
$privacyPolicyData = mysqli_fetch_all($result, MYSQLI_ASSOC);
 foreach ($privacyPolicyData as $policy):
  $name=$policy['information_type']; 
  $desc=$policy['information_description'];
  $id=$policy['id'];  

  echo "<div class='products-row'>
  
              <div class='product-cell stock'><span class='cell-label'>Stock:</span> $name</div>
               
              <div class='product-cell image'><span class='cell-label'>Brand:</span>$desc</div>
             
              
              
            </div>";
  
 endforeach;
}

function home_order_data(){
  $connection = mysqli_connect('localhost','root','','twa');
  $select_category = "SELECT * FROM `user_orders`";
  $result_bran=mysqli_query($connection,$select_category);
  $num_of_rows=mysqli_num_rows($result_bran);
  if($num_of_rows==0){
      echo "<h4><h4 style='color:white;'>No orders received yet.</h4></h4>";
  }else{
  while($row=mysqli_fetch_array($result_bran)){
      $total_prd=$row['total_products'];
      $amount=$row['amount_due'];
      $invoice=$row['invoice_number'];
      $date=$row['order_date'];
      $status=$row['order_status'];
      $user_id=$row['user_id'];
      $order_id=$row['order_id'];
      $productid=$row['product_id'];
    
    if($status=='pending'){
      $disp='block';
    }else{
      $disp='none';
    }

    $select_user = "SELECT * FROM `usertb` WHERE id='$user_id'";
  $result_bra=mysqli_query($connection,$select_user);
  $row_bra=mysqli_fetch_array($result_bra);
  $user_email=$row_bra['email'];
 $user_name=$row_bra['name'];
      //$email=$_SESSION['user_email'];
    $select_address="SELECT * FROM `user_address` WHERE `user_email`='$user_email'";  
    $result_address = mysqli_query($connection, $select_address);
    $row_add = mysqli_fetch_assoc($result_address);
    $user_address=$row_add['address_details'];
    $user_city=$row_add['city'];
    $user_state=$row_add['state'];
    $user_pincode=$row_add['pincode'];
     
               if($status=="pending"){
                echo "<div class='products-row'>        
          <div class='product-cell stock'><span class='cell-label'>Stock:</span>$productid</div>
          <div class='product-cell price'><span class='cell-label'>Price:</span>$total_prd</div>
          <div class='product-cell sales'><span class='cell-label'>Sales:</span>$invoice</div>
          
          <div class='product-cell price'><span class='cell-label'>Price:</span>$user_address ,$user_city  $user_pincode , $user_state</div>
          <div class='product-cell price'><span class='cell-label'>Price:</span>₹$amount</div>
          <div class='product-cell price'><span class='cell-label'>Price:</span><span class='status active'>$status</span></div>
          <div class='product-cell price'><span class='cell-label'>Delete:</span>
          <a href ='orders.php?ship=$order_id' style='text-decoration:none;color:white;background:green;padding:2px;display:$disp;'>Dispatch</a></div>
          </div>
          ";
               }
              
          
  }
  }
}

function home_contactus(){
  $connection = mysqli_connect('localhost','root','','twa');
    $select_category="SELECT * FROM `contact_us`";
    $result_category=mysqli_query($connection,$select_category);
     while($row=mysqli_fetch_assoc($result_category))
            {
                $userid=$row['contact_id'];
                $name=$row['contact_name'];
                $email=$row['contact_email'];
                $message=$row['contact_message'];
    
                echo"<div class='applicant-line'>
              
              <div class='applicant-info'>
                
                <span>$name </span>
                <p>$message</p>
              </div>
            </div>";
            }
}
?>

