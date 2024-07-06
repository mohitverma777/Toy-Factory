<div class = "main-wrapper">
      <nav class = "navbar">
        <div class = "brand-and-icon">
          <a href = "index.php" class = "navbar-brand">ToyFactory</a>
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
            <li class="dropdown" style="margin-left:200px;">
              <a href="login.php"  role="button" aria-expanded="false">Login</a>
              
            </li>
            <li><a href="Login.php">My cart (0) items</a></li>
          </ul>
        </div>
      </nav>
    </div>
