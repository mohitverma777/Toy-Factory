<?php
  include('admin_display.php')
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
    <style>
         button {
            border-radius: 6px;
            border: 1px solid var(--action-color);
            background-color: var(--action-color);
            color: #FFFFFF;
            font-size: 15px;
            padding: 10px 45px;
            transition: transform 80ms ease-in;
        }

        button:active {
            transform: scale(0.95);
        }

        button:focus {
            outline: none;
        }

        button.ghost {
            background-color: transparent;
            border-color: #FFFFFF;
        }
        span{
            
        }
        form {
            margin-left: 5%;
            margin-top: 30px;
            display: flexbox;
            justify-content: baseline;
            flex-direction: inherit;
            padding: 0 50px;
           
        }

        input ,select{
            background-color: #eee;
            border: none;
            padding: 8px 15px;
            margin: 8px 0;
            width: 30%;
        }
        .book-form{
   padding:2rem;
   background: var(--light-bg);
}

.book-form .flex{
   display: flex;
   flex-wrap: wrap;
   gap:2rem;
}

.book-form .flex .inputBox{
   flex:1 1 41rem;
}

 .book-form .flex .inputBox input,textarea{
   width: 50%;
   
   
   color:var(--light-black);
   text-transform: none;
   margin-top: 1.5rem;
   border:var(--border);
}



 .book-form .flex .inputBox input:focus::placeholder{
   color:var(--light-white);
}

 .book-form .flex .inputBox span{
   
   color: white;
}


    </style>
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
            <li class="sidebar-list-item">
              <a href="customer.php">
              <i class="fa fa-users icons"></i> &nbsp;&nbsp;
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
            <li class="sidebar-list-item">
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
          </ul>
          <div class="account-info">
            <div class="account-info-picture">
            <?php echo "<img src='$image_path' class='profile' height='25px' width='25px'>";?>
            </div>
            <div class="account-info-name" ><?php echo $name;?></div>
            <button class="account-info-more">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"/><circle cx="19" cy="12" r="1"/><circle cx="5" cy="12" r="1"/></svg>
            </button>
          </div>
          <button class=" app-content-headerButton" onclick=""><a href="logout.php" class=" app-content-headerButton" style="Text-decoration:none" onclick="return confirm('Are you sure?');">Logout</a></button>
        </div>
        <div class="products-area-wrapper tableView">
            <div class="app-content-header">
              <h1 class="app-content-headerText">Products</h1>
            </div>
            <div class="acc" id="insertcategories" style="margin-top:5px;">
              <div class="contai"><h3 class="acc-header">Insert Products</h3></div>
              <form action="addpdform.php" method="post"  enctype="multipart/form-data" class="book-form">

              <div class="flex">
                    <span style=" color: #FFFFFF;font-size: 12px;font-weight: lighter;">Product Title:</span>
                    <input type="text" placeholder="Enter title" name="title" maxlength="100" oninput="" required="required"/>

                    <span style=" color: #FFFFFF; font-size: 12px;font-weight: lighter;">Product Keyword:</span>
                    <input type="text" placeholder="Enter Keyword" name="keyword" required="required" style="margin-right:200px"/>

                    <span style=" color: #FFFFFF;font-size: 12px; font-weight: lighter;">Product Description:</span>
                    <textarea type="textarea" multiline  rows="5" cols="38" placeholder="Enter Descrition" maxlength="2000" name="description" required="required" style="margin-right:400px"></textarea>

                    <span style=" color: #FFFFFF;font-size: 12px; font-weight: lighter;">Product stock:</span>
                    <input type="number" placeholder="Enter stock" name="stock" maxlength="5" required="required" />

                    <span style=" color: #FFFFFF;font-size: 12px;font-weight: lighter;">Product Price:</span>
                    <input type="text" placeholder="Enter price" name="price" required="required" maxlength="10" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" style="margin-right:200px"/>
                    
                    <span style=" color: #FFFFFF;font-size: 12px;font-weight: lighter;">Select a category:</span>
                    <select name="category" id="category" placeholder="select a category" required >
                                <?php
                                    $connection = mysqli_connect('localhost','root','','twa');
                                    $select_category="SELECT * FROM categories";
                                    $result_category=mysqli_query($connection,$select_category);
                                    while($row_data=mysqli_fetch_assoc($result_category)){
                                        $category_title=$row_data['category_title'];
                                        $category_id=$row_data['category_id'];
                                        echo "<option value='$category_id'>$category_title</option>";
                                    }
                                ?>
                                <option value='none'>none</option>
                    </select>

                    <span style=" color: #FFFFFF;font-size: 12px;font-weight: lighter;">Select a brand:</span>
                    <select name="brand" id="brand" placeholder="select a brand" required style="margin-right:200px">
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
                                <option value='none'>none</option>
                    </select>

                    <span style=" color: #FFFFFF;font-size: 12px;font-weight: lighter;">Select a character:</span>
                    <select name="character" id="character" placeholder="select a character" required >
                                <?php
                                    $connection = mysqli_connect('localhost','root','','twa');
                                    $select_char="SELECT * FROM `characters`";
                                    $result_char=mysqli_query($connection,$select_char);
                                    while($row_data=mysqli_fetch_assoc($result_char)){
                                        $character_title=$row_data['charachter_title'];
                                        $character_id=$row_data['character_id'];
                                        echo "<option value='$character_id'>$character_title</option>";
                                    }
                                ?>
                                <option value='none'>none</option>
                    </select>

                    <span style=" color: #FFFFFF;font-size: 12px;font-weight: lighter;">Product image 1:</span>
                    <input type="file" placeholder="Choose-image" name="image-1" required="required" style="margin-right:200px"/>

                    <span style=" color: #FFFFFF;font-size: 12px;font-weight: lighter;">Product image 2:</span>
                    <input type="file" placeholder="Choose-image" name="image-2" required="required" />

                    <span style=" color: #FFFFFF;font-size: 12px;font-weight: lighter;">Product image 3:</span>
                    <input type="file" placeholder="Choose-image" name="image-3" style="margin-right:200px" />

                     <span style=" color: #FFFFFF;font-size: 12px;font-weight: lighter;">Product image 4:</span>
                    <input type="file" placeholder="Choose-image" name="image-4" />

                    <span style=" color: #FFFFFF;font-size: 12px;font-weight: lighter;">Product image 5:</span>
                    <input type="file" placeholder="Choose-image" name="image-5" />

       
      </div>
             <button input="submit" name="insert" id="reg">Insert</button>
                </form>
            </div>
        </div>
        <script src="script.js"></script>
</body>
</html>