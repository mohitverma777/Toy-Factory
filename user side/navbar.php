
<!--  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script> -->
<div id="navbody">
        <div class="container1">
            <nav class="navbar navbar-inverse">
              <div class="navbar-header">
                  <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".js-navbar-collapse">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="user_index.php">My Store</a>
              </div>
              
              <div class="collapse navbar-collapse js-navbar-collapse">
                  <ul class="nav navbar-nav">
                      <li class="dropdown mega-dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Category <span class="caret"></span></a>				
                          <ul class="dropdown-menu mega-dropdown-menu">
                              <li class="col-sm-3">
                                  <ul>
                                      <li class="dropdown-header">Categories</li>
                                      <?php
                                      getcategory();
                                      ?>
                                  </ul>
                              </li>
                              <li class="col-sm-3">
                                  <ul>
                                      <li class="dropdown-header">Brands</li>
                                      <?php
                                        getbrands()?>
                                                                  
                                  </ul>
                              </li>
                              <li class="col-sm-3">
                                  <ul>
                                      <li class="dropdown-header">Characters</li>
                                      <?php
                                        getcharacters()?>           
                                  </ul>
                              </li>
                          </ul>				
                      </li>
                      <li><a href="shop.php">Shop</a></li>
                  </ul>
                  <ul class="nav navbar-nav navbar-right">
                
                    <li class="search"><form action="searchresult.php" method="get" id="search-nav">
                    <input type="text" placeholder="search" name="search_data"/></li>
                    <li class="searchbtn"><input type="submit" value="search"  id="srh-btn" name="search_data_product">  </form></li>
               
                  <li class="dropdown">
                    <a href="myaccount.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><?php echo "<img src='$image_path' class='profile' height='30px' width='30px' style='border-radius:15px;margin-right:4px;'>";?><?php echo $name;?> <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="myaccount.php">Your Account</a></li>
                      <li><a href="#">Your Orders</a></li>
                      <li><a href="yourinfo.php">Login & Security</a></li>
                      <li><a href="#">Your Wishlist</a></li>
                      <li><a href="youraddress.php">Your Address</a></li>
                      <li class="divider"></li>
                      <li><a href="logout.php" onclick="return confirm('Are you sure you want to Logout?');">Logout</a></li>
                    </ul>
                  </li>
                  <li><a href="mycart.php">My cart (<?php cartitem();?>) items</a></li>
                </ul>
              </div><!-- /.nav-collapse -->
            </nav>
          </div>
        </div>
    </div>
    