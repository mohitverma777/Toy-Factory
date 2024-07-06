<?php
function get_ip_address() {
    
    if (!empty($_SERVER['HTTP_CLIENT_IP']) && filter_var($_SERVER['HTTP_CLIENT_IP'], FILTER_VALIDATE_IP)) {
        return $_SERVER['HTTP_CLIENT_IP'];
    }

    if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        
        $ip_list = explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']);

        foreach ($ip_list as $ip) {
            $ip = trim($ip);
            if (filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE)) {
                return $ip;
            }
        }
    }
    return $_SERVER['REMOTE_ADDR'];
}

//getting products navbar
function getnavproducts()
{
    $connection = mysqli_connect('localhost','root','','twa');
    $select_category="SELECT * FROM product_table ORDER BY RAND() limit 0,4 ";
            $result_category=mysqli_query($connection,$select_category);
            
                
            while($row_data=mysqli_fetch_assoc($result_category))
            {
                $product_title=$row_data['product_title'];
                $product_price=$row_data['product_price'];
                $product_brand=$row_data['brand_id'];
                $image_name = $row_data['product_image1'];
                $product_id=$row_data['product_id'];
                $select_brand="SELECT * FROM brands where brand_id='$product_brand'";
                $result_brand=mysqli_query($connection,$select_brand);
                $row_d=mysqli_fetch_assoc($result_brand);
                 $brand_name=$row_d['brand_title'];
                $image_path = "../admin side/product images/$image_name";
                echo "<div class='pro'>
                <a href='productdetail.php?product_id=$product_id'><img src='$image_path'  alt='product' class='pro-img' ></a>
                <div class='des'>
                <span>$brand_name</span>
                <a href='productdetail.php?product_id=$product_id'><h5>$product_title</h5> </a>
                <h4>₹$product_price </h4>                
                </div>
                <a href='productdetail.php?add_to_cart=$product_id'><img src='3737372.png'  class='cart'></a>
                </div>";
            }
            
}

//getting categories
function getcategory(){
    $connection = mysqli_connect('localhost','root','','twa');
    $select_category="SELECT * FROM categories";
    $result_category=mysqli_query($connection,$select_category);
    while($row_data=mysqli_fetch_assoc($result_category)){
        $category_title=$row_data['category_title'];
        $category_id=$row_data['category_id'];
        echo "<li><a href='productpage.php?category=$category_id'>$category_title</a></li>";
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
        echo "<li><a href='productpage.php?brand=$brand_id'>$brand_title</a></li>";
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
        echo "<li><a href='productpage.php?character=$character_id'>$character_title</a></li>";
    }
}
function getbrandtitle(){
    $connection = mysqli_connect('localhost','root','','twa');
    $select_brand="SELECT * FROM brands ";
    $result_brand=mysqli_query($connection,$select_brand);
    $row_data=mysqli_fetch_assoc($result_brand);
        $brand_title=$row_data['brand_title'];
        $brand_id=$row_data['brand_id'];
        echo "<li><a href='#'>$brand_title</a></li>";
}

//get products

function getproduct(){
    $connection = mysqli_connect('localhost','root','','twa');    
    if(!isset($_GET['category'])){
        if(!isset($_GET['brand'])){
            if(!isset($_GET['character'])){
                $select_category="SELECT * FROM product_table ORDER BY RAND()";

            $result_category=mysqli_query($connection,$select_category);
            
                
            while($row_data=mysqli_fetch_assoc($result_category))
            {
                $product_title=$row_data['product_title'];
                $product_price=$row_data['product_price'];
                $product_brand=$row_data['brand_id'];
                $image_name = $row_data['product_image1'];
                $product_id=$row_data['product_id'];
                $select_brand="SELECT * FROM brands where brand_id='$product_brand'";
                $result_brand=mysqli_query($connection,$select_brand);
                $row_d=mysqli_fetch_assoc($result_brand);
                 $brand_name=$row_d['brand_title'];
                $image_path = "../admin side/product images/$image_name";
                echo "<div class='pro'>
                <a href='productdetail.php?product_id=$product_id'><img src='$image_path'  alt='product' class='pro-img' ></a>
                <div class='des'>
                <span>$brand_name</span>
                <a href='productdetail.php?product_id=$product_id'><h5>$product_title</h5> </a>
                <h4>₹$product_price </h4>                
                </div>
                <a href='productpage.php?add_to_cart=$product_id'><img src='3737372.png'  class='cart'></a>
                </div>";
            }
            }elseif(isset($_GET['character']))
            {
            $character=$_GET['character'];
            $select_cha="SELECT * FROM product_table where character_id='$character'";
            $result_cha=mysqli_query($connection,$select_cha);
            $num_of_rows=mysqli_num_rows($result_cha);
            if($num_of_rows==0){
                echo "<h2>no stock available for this character</h2>";
            }
            while($row_data=mysqli_fetch_assoc($result_cha))
            {
                $product_title=$row_data['product_title'];
                $product_price=$row_data['product_price'];
                $product_brand=$row_data['brand_id'];
                $image_name = $row_data['product_image1'];
                $product_id=$row_data['product_id'];
                $select_brand="SELECT * FROM brands where brand_id='$product_brand'";
                $result_brand=mysqli_query($connection,$select_brand);
                $row_d=mysqli_fetch_assoc($result_brand);
                $brand_name=$row_d['brand_title'];
                $image_path = "../admin side/product images/$image_name";
                echo "<div class='pro'>
                <a href='productdetail.php?product_id=$product_id'><img src='$image_path'  alt='product' class='pro-img' ></a>
                <div class='des'>
                <span>$brand_name</span>
                <a href='productdetail.php?product_id=$product_id'><h5>$product_title</h5> </a>
                <h4>₹$product_price </h4>                
                </div>
                <a href='productpage.php?add_to_cart=$product_id'><img src='3737372.png'  class='cart'></a>
                </div>";
            }
            }    
        } elseif(isset($_GET['brand']))
        {
            $brand=$_GET['brand'];
                $select_cate="SELECT * FROM product_table where brand_id='$brand'";
                $result_cate=mysqli_query($connection,$select_cate);
                $num_of_rows=mysqli_num_rows($result_cate);
                $select_brand="SELECT * FROM brands where brand_id='$brand'";
                $result_brand=mysqli_query($connection,$select_brand);
                $row_d=mysqli_fetch_assoc($result_brand);
                 $brand_name=$row_d['brand_title'];
                if($num_of_rows==0){
                    echo "<h2>no stock available for this brand</h2>";
                }
                while($row_data=mysqli_fetch_assoc($result_cate))
                {
                    $product_title=$row_data['product_title'];
                    $product_price=$row_data['product_price'];
                    $product_brand=$row_data['brand_id'];
                    $image_name = $row_data['product_image1'];
                    $product_id=$row_data['product_id'];
                    $image_path = "../admin side/product images/$image_name";
                    echo "<div class='pro'>
                    <a href='productdetail.php?product_id=$product_id'><img src='$image_path'  alt='product' class='pro-img' ></a>
                    <div class='des'>
                    <span>$brand_name</span>
                    <a href='productdetail.php?product_id=$product_id'><h5>$product_title</h5> </a>
                    <h4>₹$product_price </h4>                
                    </div>
                    <a href='productpage.php?add_to_cart=$product_id'><img src='3737372.png'  class='cart'></a>
                    </div>";
                }
        }    
    }elseif (isset($_GET['category'])) 
    {
            $category=$_GET['category'];
            $select_cate="SELECT * FROM product_table where category_id='$category'";
            $result_cate=mysqli_query($connection,$select_cate);
            $num_of_rows=mysqli_num_rows($result_cate);
            if($num_of_rows==0){
                echo "<h2>no stock available for this category</h2>";
            }
            while($row_data=mysqli_fetch_assoc($result_cate))
            {
                $product_title=$row_data['product_title'];
                $product_price=$row_data['product_price'];
                $product_brand=$row_data['brand_id'];
                $image_name = $row_data['product_image1'];
                $product_id=$row_data['product_id'];
                $select_brand="SELECT * FROM brands where brand_id='$product_brand'";
                $result_brand=mysqli_query($connection,$select_brand);
                $row_d=mysqli_fetch_assoc($result_brand);
                $brand_name=$row_d['brand_title'];
                $image_path = "../admin side/product images/$image_name";
                echo "<div class='pro'>
                <a href='productdetail.php?product_id=$product_id'><img src='$image_path'  alt='product' class='pro-img' ></a>
                <div class='des'>
                <span>$brand_name</span>
                <a href='productdetail.php?product_id=$product_id'><h5>$product_title</h5> </a>
                <h4>₹$product_price </h4>                
                </div>
                <a href='productpage.php?add_to_cart=$product_id'><img src='3737372.png'  class='cart'></a>
                </div>";
            }
    }
}


function hd(){
    $connection = mysqli_connect('localhost','root','','twa');
    if (isset($_GET['category'])) 
    {
            $category=$_GET['category'];
            $select_brand="SELECT * FROM categories where category_id='$category'";
            $result_brand=mysqli_query($connection,$select_brand);
            $row_data=mysqli_fetch_assoc($result_brand);
            $category_title=$row_data['category_title'];
            echo "<h2>$category_title</h2>";        
    }elseif (isset($_GET['brand'])) {
            $brand=$_GET['brand'];
            $select_brand="SELECT * FROM brands where brand_id='$brand'";
            $result_brand=mysqli_query($connection,$select_brand);
            $row_data=mysqli_fetch_assoc($result_brand);
                $brand_title=$row_data['brand_title'];
                
            echo "<h2>$brand_title</h2>";
    }
}


function getproductdetails(){
    $connection = mysqli_connect('localhost','root','','twa');
    if(isset($_GET['product_id'])){
        $product_id=$_GET['product_id'];
        $select_category="SELECT * FROM product_table where product_id='$product_id'";
        $result_category=mysqli_query($connection,$select_category);
        $row_data=mysqli_fetch_assoc($result_category);
        $product_title=$row_data['product_title'];
        $product_price=$row_data['product_price'];
        $product_stock=$row_data['product_stock'];
        $product_description=$row_data['product_description'];
        $product_brand=$row_data['brand_id'];
        $select_brand="SELECT * FROM brands where brand_id='$product_brand'";
        $result_brand=mysqli_query($connection,$select_brand);
        $row_d=mysqli_fetch_assoc($result_brand);
        $brand_name=$row_d['brand_title'];
        $image1 = $row_data['product_image1'];
        $image_path1 = "../admin side/product images/$image1";
        $image2 = $row_data['product_image2'];
        $image_path2 = "../admin side/product images/$image2";
        $image3 = $row_data['product_image3'];
        $image_path3 = "../admin side/product images/$image3";
        $image4 = $row_data['product_image4'];
        $image_path4 = "../admin side/product images/$image4";
        $image5 = $row_data['product_image5'];
        $image_path5 = "../admin side/product images/$image5";
        if($product_stock==0){
            echo "<div class='single-pro-img'>
        <img src='$image_path1' width='100%'alt='' id='mainimg'>
    
        <div class='small-img-group'>
            <div class='small-img-col'>
                <img src='$image_path1' width='100%' class='small-img' alt=''>
            </div> 
            <div class='small-img-col'>
                <img src='$image_path2' width='100%' class='small-img' alt=''>
            </div> 
            <div class='small-img-col'>
                <img src='$image_path3' width='100%' class='small-img' alt=''>
            </div> 
            <div class='small-img-col'>
                <img src='$image_path4' width='100%' class='small-img' alt=''>
            </div> 
            <div class='small-img-col'>
                <img src='$image_path5' width='100%' class='small-img' alt=''>
            </div>  
        </div>
    </div>
    <div class='single-prp-details'>
        <h6>$brand_name</h6>
        <h4>$product_title</h4>
        <h3>₹$product_price</h3>
        <h2>out of stock</h2>
        
        <p>$product_description</p>
    </div>";
        }else{
        echo "<div class='single-pro-img'>
        <img src='$image_path1' width='100%'alt='' id='mainimg'>
    
        <div class='small-img-group'>
            <div class='small-img-col'>
                <img src='$image_path1' width='100%' class='small-img' alt=''>
            </div> 
            <div class='small-img-col'>
                <img src='$image_path2' width='100%' class='small-img' alt=''>
            </div> 
            <div class='small-img-col'>
                <img src='$image_path3' width='100%' class='small-img' alt=''>
            </div> 
            <div class='small-img-col'>
                <img src='$image_path4' width='100%' class='small-img' alt=''>
            </div> 
            <div class='small-img-col'>
                <img src='$image_path5' width='100%' class='small-img' alt=''>
            </div>  
        </div>
    </div>
    <div class='single-prp-details'>
        <h6>$brand_name</h6>
        <h4>$product_title</h4>
        <h3>₹$product_price</h3>
        <a href='payment.php?pay=$product_id'>
        <button class='normal' style='background:red'>Buy</button></a>
        <a href='productdetail.php?add_to_cart=$product_id'>
        <button class='normal'>Add to cart</button></a>
        
        <p>$product_description</p>
    </div>";
        }
    }else{
       echo"<h3>this product is no more available</h3>";
    }
}

function cart(){
    if(isset($_GET['add_to_cart'])){
        $connection = mysqli_connect('localhost','root','','twa');
        $email=$_SESSION['user_email'];
        $get_ip_add=get_ip_address();
        
        $get_product_id=$_GET['add_to_cart'];
        $select_product="SELECT * FROM `Product_table` WHERE product_id='$get_product_id'";
        $result_product=mysqli_query($connection,$select_product);
        $row_d=mysqli_fetch_assoc($result_product);
        $product_price=$row_d['product_price'];
        $product_stock=$row_d['product_stock'];
        $select_category = "SELECT * FROM `cart_details` WHERE user_email='$email' AND product_id=$get_product_id";
        $result_brand=mysqli_query($connection,$select_category);
        $num_of_rows=mysqli_num_rows($result_brand);
        if($product_stock==0){
            echo "<script>alert('this product is out of stock');history.back();</script>";
        }else{
                if($num_of_rows>0){
                    echo "<script>alert('this product is already present inside cart');history.back();</script>";
                }else{
                    $inser_query = "INSERT INTO `cart_details` (product_id, ip_address, user_email, quantity,subtotal) VALUES ('$get_product_id', '$get_ip_add', '$email', 1,'$product_price')";
                    $result_brand=mysqli_query($connection,$inser_query);
                    
                    echo "<script>alert('Added to cart');history.back();</script>";
                }
        }
    }
}

function cartitem(){
    if(isset($_GET['add_to_cart'])){
        $connection = mysqli_connect('localhost','root','','twa');
        $email=$_SESSION['user_email'];
        $get_ip_add=get_ip_address();
        $select_category = "SELECT * FROM `cart_details` WHERE user_email='$email'";
        $result_brand=mysqli_query($connection,$select_category);
        $count_cart_items=mysqli_num_rows($result_brand);
        
    }else{
        $connection = mysqli_connect('localhost','root','','twa');
        $email=$_SESSION['user_email'];
        $get_ip_add=get_ip_address();
        $select_category = "SELECT * FROM `cart_details` WHERE user_email='$email'";
        $result_brand=mysqli_query($connection,$select_category);
        $count_cart_items=mysqli_num_rows($result_brand);
    }
    echo  $count_cart_items;
}

function total_cart_price(){
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
            $product_pr=array($row['subtotal']);
                $product_value=array_sum($product_pr);
                $total_price += $product_value;
           
        }
        echo "₹$total_price";
    }
}


function showcartdata(){
    $connection = mysqli_connect('localhost','root','','twa');
    $email=$_SESSION['user_email'];
    $get_ip_add=get_ip_address();
    $select_category = "SELECT * FROM `cart_details` WHERE user_email='$email'";
    $result_bran=mysqli_query($connection,$select_category);
    $num_of_rows=mysqli_num_rows($result_bran);
    if($num_of_rows==0){
        echo "<tr><td>Your cart is empty.</td></tr>";
    }else{
    while($row=mysqli_fetch_array($result_bran)){
        $subtotal=$row['subtotal'];
        $product_id=$row['product_id'];
        $subtotal=$row['subtotal'];
        $cart_quantity=$row['quantity'];
        $select_product="SELECT * FROM `Product_table` WHERE product_id='$product_id'";
        $result_product=mysqli_query($connection,$select_product);
        while($row_product_price=mysqli_fetch_array($result_product)){
            $product_table=array($row_product_price['product_price']);
            $product_price=$row_product_price['product_price'];
            
            $product_title=$row_product_price['product_title'];
            $product_brand=$row_product_price['brand_id'];
            $select_brand="SELECT * FROM brands where brand_id='$product_brand'";
        $result_brand=mysqli_query($connection,$select_brand);
        $row_d=mysqli_fetch_assoc($result_brand);
        $brand_name=$row_d['brand_title'];
            $image1 = $row_product_price['product_image1'];
            $image_path1 = "../admin side/product images/$image1";
            echo "<form action='' method='post'>
            <tr>
                <td><button type='submit' name='delete_cart' class='btndlt' onclick='myFunction()'>x</button></td>
                <td><a href='productdetail.php?product_id=$product_id'><img src='$image_path1'  alt='product' class='pro-img' ></a></td>
                <td><a href='productdetail.php?product_id=$product_id'>$product_title</a></td>
                <td>₹$product_price</td>
                <td><input type='number' value='$cart_quantity' name='quantity' min='1' max='5' style='padding: 10px 1px;width: 50px;' onChange='showupbtn()'>
                <input type='text'value='$product_id'  name='product_id'  style='display:none'>
                <button type='submit' name='update_cart' id='updatebtn'>update</button></td>
                <td>₹$subtotal</td>
            </tr>
            </form>
            ";
        }
    }
}
}

function search_products(){
    $connection = mysqli_connect('localhost','root','','twa');
    if(isset($_GET['search_data'])){
        $value=$_GET['search_data'];
        // condition set or not
        $search_qry="SELECT * FROM `product_table` WHERE product_keyword LIKE '%$value%' or product_title LIKE '%$value%' or 
        product_description LIKE '%$value%'";
        $result_search=mysqli_query($connection,$search_qry);
        while($row=mysqli_fetch_assoc($result_search))
        {
            $product_title=$row['product_title'];
            $product_price=$row['product_price'];
            $product_brand=$row['brand_id'];
            $image_name = $row['product_image1'];
            $product_id=$row['product_id'];
            $select_brand="SELECT * FROM brands where brand_id='$product_brand'";
            $result_brand=mysqli_query($connection,$select_brand);
            $row_d=mysqli_fetch_assoc($result_brand);
            $brand_name=$row_d['brand_title'];
            $image_path = "../admin side/product images/$image_name";
            echo "<div class='pro'>
            <a href='productdetail.php?product_id=$product_id'><img src='$image_path'  alt='product' class='pro-img' ></a>
            <div class='des'>
            <span>$brand_name</span>
            <a href='productdetail.php?product_id=$product_id'><h5>$product_title</h5> </a>
            <h4>₹$product_price </h4>                
            </div>
            <a href='searchresult.php?add_to_cart=$product_id'><img src='3737372.png'  class='cart'></a>
            </div>";
        }
    }
} 
function printhd(){
    $connection = mysqli_connect('localhost','root','','twa');
    if (isset($_GET['search_data'])) 
    {
            $value=$_GET['search_data'];
            echo "<h3>Here is Your search result About <strong>$value</strong></h3>";        
    } else {
        echo "<h2>no product found according to your search</h2>";
    }
}


function checkout_products(){
    $connection = mysqli_connect('localhost','root','','twa');
    if(isset($_GET['pay']))
    {
        $product_id=$_GET['pay'];
    $select_category="SELECT * FROM product_table where product_id=$product_id";
            $result_category=mysqli_query($connection,$select_category);
            
                
            while($row_data=mysqli_fetch_assoc($result_category))
            {
                $product_title=$row_data['product_title'];
                $product_price=$row_data['product_price'];
                $product_brand=$row_data['brand_id'];
                $image_name = $row_data['product_image1'];
                $product_id=$row_data['product_id'];
                $select_brand="SELECT * FROM brands where brand_id='$product_brand'";
                $result_brand=mysqli_query($connection,$select_brand);
                $row_d=mysqli_fetch_assoc($result_brand);
                 $brand_name=$row_d['brand_title'];
                $image_path = "../admin side/product images/$image_name";
                echo "<div class='pro'>
                <a href='productdetail.php?product_id=$product_id'><img src='$image_path'  alt='product' class='pro-img' ></a>
                <div class='des'>
                <span>$brand_name</span>
                <a href='productdetail.php?product_id=$product_id'><h5>$product_title</h5> </a>
                <h4>₹$product_price </h4>                
                </div>
                </div>";
            }
    } else{
        $connection = mysqli_connect('localhost','root','','twa');
    $email=$_SESSION['user_email'];
    $get_ip_add=get_ip_address();
    $select_category = "SELECT * FROM `cart_details` WHERE user_email='$email'";
    $result_bran=mysqli_query($connection,$select_category);
    while($row=mysqli_fetch_array($result_bran)){
        $subtotal=$row['subtotal'];
        $product_id=$row['product_id'];
        $subtotal=$row['subtotal'];
        $cart_quantity=$row['quantity'];
        $select_product="SELECT * FROM `Product_table` WHERE product_id='$product_id'";
        $result_product=mysqli_query($connection,$select_product);
        while($row_product_price=mysqli_fetch_array($result_product)){
            $product_table=array($row_product_price['product_price']);
            $product_price=$row_product_price['product_price'];
            
            $product_title=$row_product_price['product_title'];
            $product_brand=$row_product_price['brand_id'];
            $select_brand="SELECT * FROM brands where brand_id='$product_brand'";
        $result_brand=mysqli_query($connection,$select_brand);
        $row_d=mysqli_fetch_assoc($result_brand);
        $brand_name=$row_d['brand_title'];
            $image1 = $row_product_price['product_image1'];
            $image_path1 = "../admin side/product images/$image1";
            echo "<div class='pro'>
            <a href='productdetail.php?product_id=$product_id'><img src='$image_path1'  alt='product' class='pro-img' ></a>
            <div class='des'>
            <span>$brand_name</span>
            <a href='productdetail.php?product_id=$product_id'><h5>$product_title</h5> </a>
            <h4>₹$product_price </h4>                
            </div>
            </div>";
        }
    
    }
      
    }     
}
function getpay_price(){
    $connection = mysqli_connect('localhost','root','','twa');
    if(isset($_GET['pay'])){
        $product_id=$_GET['pay'];
        $select_product="SELECT * FROM `Product_table` WHERE product_id='$product_id'";
        $result_product=mysqli_query($connection,$select_product);
        $row_product_price=mysqli_fetch_array($result_product);
        $product_price=$row_product_price['product_price'];
        echo "<tr>
        <td>Item price:</td>
        <td>₹$product_price</td>
    </tr>
    <tr>
        <td>Shipping:</td>
        <td>Free</td>
    </tr>
    <tr>
        <td><strong>Total:</strong></td>
        <td><strong>₹$product_price</strong></td>
    </tr>";
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
            $product_pr=array($row['subtotal']);
                $product_value=array_sum($product_pr);
                $total_price += $product_value;
           
        }
    }
       echo" <tr>
                 <td>Items price:</td>
                    <td>₹$total_price</td>
                </tr>
                <tr>
                    <td>Shipping:</td>
                    <td>Free</td>
                </tr>
                <tr>
                    <td><strong>Total:</strong></td>
                    <td><strong>₹$total_price</strong></td>
                </tr>";
    }
}

// get product by characters home page

function get_prd_by_char(){
    $connection = mysqli_connect('localhost','root','','twa');
    $select_character="SELECT * FROM characters";
    $result_character=mysqli_query($connection,$select_character);
    while($row_data=mysqli_fetch_assoc($result_character)){
        $character_title=$row_data['charachter_title'];
        $character_id=$row_data['character_id'];
        $image_name = $row_data['character_image'];
        $image_path = "../admin side/character img/$image_name";
        echo "<div class='fe-box'><a href='productpage.php?character=$character_id'>
        <img src='$image_path'></a>
        <a href='productpage.php?character=$character_id'><h6>$character_title</h6></a>
    </div>";
    }
}

function getfetrdpro(){
    $connection = mysqli_connect('localhost','root','','twa');
    $select_category="SELECT * FROM product_table ORDER BY RAND() limit 0,8 ";
            $result_category=mysqli_query($connection,$select_category);
            
                
            while($row_data=mysqli_fetch_assoc($result_category))
            {
                $product_title=$row_data['product_title'];
                $product_price=$row_data['product_price'];
                $product_brand=$row_data['brand_id'];
                $image_name = $row_data['product_image1'];
                $product_id=$row_data['product_id'];
                $select_brand="SELECT * FROM brands where brand_id='$product_brand'";
                $result_brand=mysqli_query($connection,$select_brand);
                $row_d=mysqli_fetch_assoc($result_brand);
                 $brand_name=$row_d['brand_title'];
                $image_path = "../admin side/product images/$image_name";
                echo "<div class='pro'>
                <a href='productdetail.php?product_id=$product_id'><img src='$image_path'  alt='product' class='pro-img' ></a>
                <div class='des'>
                <span>$brand_name</span>
                <a href='productdetail.php?product_id=$product_id'><h5>$product_title</h5> </a>
                <h4>₹$product_price </h4>                
                </div>
                <a href='productdetail.php?add_to_cart=$product_id'><img src='3737372.png'  class='cart'></a>
                </div>";
            }
}

function get_prd_by_brand(){
    $connection = mysqli_connect('localhost','root','','twa');
    $select_character="SELECT * FROM brands";
    $result_character=mysqli_query($connection,$select_character);
    while($row_data=mysqli_fetch_assoc($result_character)){
        $character_title=$row_data['brand_title'];
        $character_id=$row_data['brand_id'];
        $image_name = $row_data['brand_image'];
        $image_path = "../admin side/character img/$image_name";
        echo "<a href='productpage.php?brand=$character_id' class='item'><img class='item' src='$image_path' alt='$character_title' height='250px' width='240px'></a>";
    }
}


function showorderdata(){
    $connection = mysqli_connect('localhost','root','','twa');
    $email=$_SESSION['user_email'];
    $id=$_SESSION['userid'];
    $get_ip_add=get_ip_address();
    $select_category = "SELECT * FROM `user_orders` WHERE user_id='$id'";
    $result_bran=mysqli_query($connection,$select_category);
    $num_of_rows=mysqli_num_rows($result_bran);
    if($num_of_rows==0){
        echo "<tr><td>Your have not orderd yet.</td></tr>";
    }else{
    while($row=mysqli_fetch_array($result_bran)){
        $total_prd=$row['total_products'];
        $amount=$row['amount_due'];
        $invoice=$row['invoice_number'];
        $order_id=$row['order_id'];
        $date=$row['order_date'];
        $status=$row['order_status'];
        $product_id=$row['product_id'];
        $select_product="SELECT * FROM `Product_table` WHERE product_id='$product_id'";
        $result_product=mysqli_query($connection,$select_product);
        $row_product=mysqli_fetch_array($result_product);
        $product_title=$row_product['product_title'];
        $image1 = $row_product['product_image1'];
            $image_path1 = "../admin side/product images/$image1";
            echo "
            <tr>
                <td><a href='productdetail.php?product_id=$product_id' style='color:black;font-size:12px;'><img src='$image_path1'  alt='product' class='pro-img' ></a></td>
                <td>$total_prd</td>
                <td>₹$amount</td>
                <td>$date</td>
                <td style='color:green;'>$status</td>
                <td><a href='invoice_download.php?orderid=$order_id' target='_blank'>download</a></td>
            </tr>
            
            ";
        
    }
}
}
?>


  