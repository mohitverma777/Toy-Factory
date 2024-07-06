<?php
  include('admin_display.php');
  include('commonfunction.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin-Products</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="app-container">
        <div class="sidebar">
          <div class="sidebar-header">
            <div class="app-icon">
              <span><b>ToyFactory</b></span>
            </div>
          </div>
          <ul class="sidebar-list">
          <li class="sidebar-list-item ">
              <a href="home.php">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
                <span>Home</span>
              </a>
            </li>
            <li class="sidebar-list-item ">
              <a href="customer.php">
              <svg fill="#f8f7f7" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg" width="20" height="20" stroke="#f8f7f7"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>users</title> <path d="M16 21.916c-4.797 0.020-8.806 3.369-9.837 7.856l-0.013 0.068c-0.011 0.048-0.017 0.103-0.017 0.16 0 0.414 0.336 0.75 0.75 0.75 0.357 0 0.656-0.25 0.731-0.585l0.001-0.005c0.875-3.885 4.297-6.744 8.386-6.744s7.511 2.859 8.375 6.687l0.011 0.057c0.076 0.34 0.374 0.59 0.732 0.59 0 0 0.001 0 0.001 0h-0c0.057-0 0.112-0.007 0.165-0.019l-0.005 0.001c0.34-0.076 0.59-0.375 0.59-0.733 0-0.057-0.006-0.112-0.018-0.165l0.001 0.005c-1.045-4.554-5.055-7.903-9.849-7.924h-0.002zM9.164 10.602c0 0 0 0 0 0 2.582 0 4.676-2.093 4.676-4.676s-2.093-4.676-4.676-4.676c-2.582 0-4.676 2.093-4.676 4.676v0c0.003 2.581 2.095 4.673 4.675 4.676h0zM9.164 2.75c0 0 0 0 0 0 1.754 0 3.176 1.422 3.176 3.176s-1.422 3.176-3.176 3.176c-1.754 0-3.176-1.422-3.176-3.176v0c0.002-1.753 1.423-3.174 3.175-3.176h0zM22.926 10.602c2.582 0 4.676-2.093 4.676-4.676s-2.093-4.676-4.676-4.676c-2.582 0-4.676 2.093-4.676 4.676v0c0.003 2.581 2.095 4.673 4.675 4.676h0zM22.926 2.75c1.754 0 3.176 1.422 3.176 3.176s-1.422 3.176-3.176 3.176c-1.754 0-3.176-1.422-3.176-3.176v0c0.002-1.753 1.423-3.174 3.176-3.176h0zM30.822 19.84c-0.878-3.894-4.308-6.759-8.406-6.759-0.423 0-0.839 0.031-1.246 0.089l0.046-0.006c-0.049 0.012-0.092 0.028-0.133 0.047l0.004-0.002c-0.751-2.129-2.745-3.627-5.089-3.627-2.334 0-4.321 1.485-5.068 3.561l-0.012 0.038c-0.017-0.004-0.030-0.014-0.047-0.017-0.359-0.053-0.773-0.084-1.195-0.084-0.002 0-0.005 0-0.007 0h0c-4.092 0.018-7.511 2.874-8.392 6.701l-0.011 0.058c-0.011 0.048-0.017 0.103-0.017 0.16 0 0.414 0.336 0.75 0.75 0.75 0.357 0 0.656-0.25 0.731-0.585l0.001-0.005c0.737-3.207 3.56-5.565 6.937-5.579h0.002c0.335 0 0.664 0.024 0.985 0.070l-0.037-0.004c-0.008 0.119-0.036 0.232-0.036 0.354 0.006 2.987 2.429 5.406 5.417 5.406s5.411-2.419 5.416-5.406v-0.001c0-0.12-0.028-0.233-0.036-0.352 0.016-0.002 0.031 0.005 0.047 0.001 0.294-0.044 0.634-0.068 0.98-0.068 0.004 0 0.007 0 0.011 0h-0.001c3.379 0.013 6.203 2.371 6.93 5.531l0.009 0.048c0.076 0.34 0.375 0.589 0.732 0.59h0c0.057-0 0.112-0.007 0.165-0.019l-0.005 0.001c0.34-0.076 0.59-0.375 0.59-0.733 0-0.057-0.006-0.112-0.018-0.165l0.001 0.005zM16 18.916c-0 0-0 0-0.001 0-2.163 0-3.917-1.753-3.917-3.917s1.754-3.917 3.917-3.917c2.163 0 3.917 1.754 3.917 3.917 0 0 0 0 0 0.001v-0c-0.003 2.162-1.754 3.913-3.916 3.916h-0z"></path> </g></svg>
                <span>Customers</span>
              </a>
            </li>
            <li class="sidebar-list-item ">
              <a href="orders.php">
              <svg fill="#ffffff" width="20px" height="20px" viewBox="0 0 32 32" id="icon" xmlns="http://www.w3.org/2000/svg">
<g id="SVGRepo_bgCarrier" stroke-width="0"/>

<g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/>

<g id="SVGRepo_iconCarrier"> <defs> <style> .cls-1 { fill: none; } </style> </defs> <path d="M29.4819,8.624l-10-5.5a1,1,0,0,0-.9638,0l-10,5.5a1,1,0,0,0,0,1.752L18,15.5913V26.3086l-3.0362-1.6693L14,26.3912l4.5181,2.4848a.9984.9984,0,0,0,.9638,0l10-5.5A1,1,0,0,0,30,22.5V9.5A1,1,0,0,0,29.4819,8.624ZM19,5.1416,26.9248,9.5,19,13.8584,11.0752,9.5Zm9,16.7671-8,4.4V15.5913l8-4.4Z"/> <rect x="2" y="14" width="8" height="2" transform="translate(12 30) rotate(-180)"/> <rect x="4" y="22" width="8" height="2" transform="translate(16 46) rotate(-180)"/> <rect x="6" y="18" width="8" height="2" transform="translate(20 38) rotate(-180)"/> <rect id="_Transparent_Rectangle_" data-name="&lt;Transparent Rectangle&gt;" class="cls-1" width="32" height="32"/> </g>

</svg>
                <span>Orders</span>
              </a>
            </li>
            <li class="sidebar-list-item ">
              <a href="Manage.php">
              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-box">
                <rect x="4" y="4" width="16" height="16" rx="2" ry="2"></rect>
                <path d="M14.5 5.5L18 9l-9 9H6v-3.5L14.5 5.5z"></path>
              </svg>

                <span>Manage</span>
              </a>
            </li>
            <li class="sidebar-list-item active">
              <a href="products.php">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"/><line x1="3" y1="6" x2="21" y2="6"/><path d="M16 10a4 4 0 0 1-8 0"/></svg>
                <span>Products</span>
              </a>
            </li>
            <li class="sidebar-list-item">
              <a href="inbox.php">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-inbox"><polyline points="22 12 16 12 14 15 10 15 8 12 2 12"/><path d="M5.45 5.11L2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z"/></svg>
                <span>Inbox</span>
              </a>
            </li>
            <li class="sidebar-list-item">
              <a href="policy.php">
              <svg fill="#ffffff" viewBox="0 0 32 32" id="icon" width="20" height="20" xmlns="http://www.w3.org/2000/svg" ><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><defs><style>.cls-1{fill:none;}</style></defs><title>policy</title><path d="M30,18A6,6,0,1,0,20,22.46v7.54l4-1.8926,4,1.8926V22.46A5.98,5.98,0,0,0,30,18Zm-4,8.84-2-.9467L22,26.84V23.65a5.8877,5.8877,0,0,0,4,0ZM24,22a4,4,0,1,1,4-4A4.0045,4.0045,0,0,1,24,22Z"></path><rect x="9" y="14" width="7" height="2"></rect><rect x="9" y="8" width="10" height="2"></rect><path d="M6,30a2.0021,2.0021,0,0,1-2-2V4A2.0021,2.0021,0,0,1,6,2H22a2.0021,2.0021,0,0,1,2,2V8H22V4H6V28H16v2Z"></path><rect id="_Transparent_Rectangle_" data-name="<Transparent Rectangle>" class="cls-1" width="32" height="32"></rect></g></svg>
                <span>Policy</span>
              </a>
            </li>
            
           
          </ul>
          
          <div class="account-info">
            <div class="account-info-picture">
            <?php echo "<img src='$image_path' class='profile' height='25px' width='25px'>";?>
            </div>
            <div class="account-info-name"><?php echo $name;?></div>
            <button class="account-info-more" style="cursor:pointer;">
              <!-- <svg onclick="window.location.href ='admininfo.php'" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"/><circle cx="19" cy="12" r="1"/><circle cx="5" cy="12" r="1"/></svg> -->
            </button>
          </div>
          
          <button class=" app-content-headerButton" onclick=""><a href="logout.php" class=" app-content-headerButton" style="Text-decoration:none" onclick="return confirm('Are you sure you want to Logout?');">Logout</a></button>
            
          
        </div>
        <div class="app-content">
          <div class="app-content-header">
            <h1 class="app-content-headerText">Products</h1>
            <button class="app-content-headerButton" onclick="window.location.href ='addproduct.php'">Add Product</button>
           
              
          </div>
          <div class="app-content-actions"><form action="searchresult.php" method="get">
            <input class="search-bar" placeholder="Search..." type="text" name="search_data">
            <input type="submit" value="search"  style="display:none;" name="search_data_product">  </form>
            
            <div class="app-content-actions-wrapper">
               <button class="app-content-headerButton" onclick="window.open('product_report.php', '_blank')">Product Report</button>

              <div class="filter-button-wrapper" style="display:none;">
                <button class="action-button filter jsFilter" style="margin-right:40px"><span>Filter</span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-filter"><polygon points="22 3 2 3 10 12.46 10 19 14 21 14 12.46 22 3"/></svg></button>
                <div class="filter-menu" style="margin-right:60px">
                  <label>Brands</label>
                  <select>
                  <option>All Brands</option>
                  <?php
                    $connection = mysqli_connect('localhost','root','','twa');
                    $select_brand="SELECT * FROM brands";
                    $result_brand=mysqli_query($connection,$select_brand);
                      while($row_data=mysqli_fetch_assoc($result_brand)){
                        $brand_title=$row_data['brand_title'];
                        $brand_id=$row_data['brand_id'];
                        echo "<option value='$brand_id'>$brand_title</option>";
                      }
                  ?>
                  </select>
                  <label>Status</label>
                  <select>
                    <option>All Status</option>
                    <option>Active</option>
                    <option>Disabled</option>
                  </select>
                  
                  <div class="filter-menu-buttons">
                    <button class="filter-button reset">
                      Reset
                    </button>
                    <button class="filter-button apply">
                      Apply
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          <div class="products-area-wrapper tableView">

            <div class="products-header">
              <div class="product-cell price">Edit</div>
              <div class="product-cell stock">Product id</div>
              <div class="product-cell image">Items</div>
              <div class="product-cell category">Brand</div>
              <div class="product-cell status-cell">Status</div>
              <div class="product-cell sales">Sales</div>
              <div class="product-cell stock">Stock</div>
              <div class="product-cell price">Price</div>
              <div class="product-cell price">Delete</div>
              
            </div>
            
              <?php 
                getallproducts();
              ?>
            
          </div>
        </div>
      </div>
      <script>
        document.querySelector(".jsFilter").addEventListener("click", function () {
        document.querySelector(".filter-menu").classList.toggle("active");
      });
      </script>
      <script src="script.js"></script>
</body>
</html>