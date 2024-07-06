 <!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
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
                  <a class="navbar-brand" href="index.php">Toy Factory</a>
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
                    <a href="login.php"  role="button" aria-expanded="false">Login</a>
                    
                  </li>
                  <li><a href="Login.php">My cart (0) items</a></li>
                </ul>
              </div><!-- /.nav-collapse -->
            </nav>
          </div>
        </div>
    </div>

     <!-- <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script> -->
    