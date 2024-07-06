<div class = "main-wrapper">
      <nav class = "navbar">
        <div class = "brand-and-icon">
          <a href = "user_index.php" class = "navbar-brand"><img src="ToyFactorylogo.png" alt=""></a>
          <ul class="search yes">
          <form action="searchresult.php" method="get" id="search-nav" class="yes">
           <li> <input type="text" placeholder="search....." name="search_data" class="yes"/></li>
            <li><input type="submit" value="search"  id="srh-btn" name="search_data_product" class="yes"></li>  </form>
          </ul>
          <button type = "button" class = "navbar-toggler">
            <i class = "fas fa-bars"></i>
          </button>
           
        </div>
       
        <div class = "navbar-collapse">
          <ul class = "navbar-nav">

            <li>
              <a href = "#" class = "menu-link">
                Category
                <span class = "drop-icon">
                  <i class = "fas fa-chevron-down"></i>
                </span>
              </a>
              <div class = "sub-menu">
                <!-- item -->
                <div class = "sub-menu-item">
                  <h4>Categories</h4>
                  <ul>
                  <?php
                      getcategory();
                  ?>
                  </ul>
                </div>
                <!-- end of item -->
                <!-- item -->
                <div class = "sub-menu-item">
                  <h4>Brands</h4>
                  <ul>
                  <?php
                      getbrands()?>
                  </ul>
                </div>
                <!-- end of item -->
                <!-- item -->
                <div class = "sub-menu-item">
                  <h4>Characters</h4>
                  <ul>
                  <?php
                    getcharacters()?>    
                  </ul>
                </div>
                <!-- end of item -->
                
                <!-- end of item -->
              </div>
            </li>
            <li>
              <a href = "shop.php">Shop</a>
            </li>
            
            <li class="search no"><form action="searchresult.php" method="get" id="search-nav" class="no">
              <input type="text" placeholder="search....." name="search_data" class="no"/><li>
              <input type="submit" value="search"  id="srh-btn" name="search_data_product" class="no"></li>  </form>
            </li>
            <li class="dropdown" style="margin-left:170px;">
            <div class="dropdown">
              <div style="display:flex;">
            <a href="myaccount.php"><?php echo "<img src='$image_path' class='profile' height='30px' width='30px' style='border-radius:15px;margin-right:4px;'>";?></a>
            <a href="myaccount.php" class="na"><?php echo $name;?></a>
           
            </div>
              <div class="dropdown-content">
                      <a href="orders.php">Your Orders</a>
                      <a href="yourinfo.php">Login & Security</a>
                      <a href="youraddress.php">Your Address</a>
                      
                      <a href="logout.php" onclick="return confirm('Are you sure you want to Logout?');">Logout</a>

              </div>
            </div>
              
            </li>
            <li><a href="mycart.php">My cart (<?php cartitem();?>) items</a></li>
          </ul>
        </div>
      </nav>
    </div>
