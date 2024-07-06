<?php
   include("partner_display.php");
   include('../commonfunction.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home-Partner</title>
    <link rel="stylesheet" href="style.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <style>
      .form {
  display: grid;
  grid-gap: 1rem;
  padding-left:.4rem;
  padding-right:.4rem;
  padding-top:3rem;
}

.field {
  width: 100%;
  display: flex;
  flex-direction: column;
  border: 1px solid black;
  padding: .5rem;
  border-radius: .25rem;
}

.field__label {
  color: var(--color-gray);
  font-size: 0.8rem;
  font-weight: 300;
  text-transform: uppercase;
  margin-bottom: 0.25rem
}

.field__input {
    width:200pxl
  padding: 0;
  margin: 0;
  border: 0;
  outline: 0;
  font-weight: bold;
  font-size: 1rem;
  width: 100%;
  -webkit-appearance: none;
  appearance: none;
  background-color: transparent;
}
.field:focus-within {
  border-color: #000;
}

.fields {
  display: grid;
  grid-gap: 1rem;
}
.fields--2 {
  grid-template-columns: 1fr 1fr;
}
.fields--3 {
  grid-template-columns: 1fr 1fr 1fr;
  margin-bottom:2rem;
}

.button {
  background-color: #000;
  text-transform: uppercase;
  font-size: 0.8rem;
  font-weight: 600;
  display: block;
  color: #fff;
  width: 100%;
  padding: 1rem;
  border-radius: 0.25rem;
  border: 0;
  cursor: pointer;
  outline: 0;
}
.button:focus-visible {
  background-color: #333;
}
.shipping{
  margin-top:5.0rem;
}
@import url('https://fonts.googleapis.com/css?family=Open+Sans&display=swap');
:root {
    --app-bg: #101827;
    --sidebar: rgba(21, 30, 47,1);
    --sidebar-main-color: #fff;
    --table-border: #1a2131;
    --table-header: #1a2131;
    --app-content-main-color: #fff;
    --sidebar-link: #fff;
    --sidebar-active-link: #1d283c;
    --sidebar-hover-link: #1a2539;
    --action-color: #2869ff;
    --action-color-hover: #6291fd;
    --app-content-secondary-color: #1d283c;
    --filter-reset: #2c394f;
    --filter-shadow: rgba(16, 24, 39, 0.8) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;
  }
  
  .light:root {
    --app-bg: #fff;
    --sidebar: #f3f6fd;
    --app-content-secondary-color: #f3f6fd;
    --app-content-main-color: #1f1c2e;
    --sidebar-link: #1f1c2e;
    --sidebar-hover-link: rgba(195, 207, 244, 0.5);
    --sidebar-active-link: rgba(195, 207, 244, 1);
    --sidebar-main-color: #1f1c2e;
    --filter-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
  }

  .section-p1 {
    padding: 30px 80px 0 80px; 
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
    </style>
</head>
<body>
<div class="app">
<nav role="navigation">
            <div id="menuToggle"> 
              <input type="checkbox"/>
                <span></span>
                <span></span>
                <span></span>
               <h2 style="position:absolute;color:white;margin-left:42%; padding-bottom:10px;">ToyFactory</h2>
            <ul id="menu">
              <li><a href="home.php">Home</a></li>
              <li><a href="profile.php">Profile</a></li>
              <li ><a href="logout.php">Logout</a></li>
            </ul>
           </div>
          </nav>
          
	<main class="app-body">
    <?php partner_home() ?>
		<section class='section'>
      <center><h2 class="section-title">Orders to  deliver</h2></center>
      <hr>
      <section id="cart" class="section-p1">
        
        <table width="100%" style="padding-left:12px;">
            <thead>
                <tr>
                    <td>Order id</td>
                    <td>customer name</td>
                    <td>Address</td>
                    <td>Amount</td>
                    <td>Invoice</td>
                    <td>Out for delivery</td>
                    
                </tr>
            </thead>
            <tbody>
              <?php 
                 partner_order_data();

              ?>
                    
          </tbody>
        </table>
    </section>

    </section>
	</main>
	<footer class="app-footer">
		<nav class="menu-bar">
			<a href="home.php" class="menu-bar-item menu-bar-item--active">
				<svg xmlns="http://www.w3.org/2000/svg" width="192" height="192" fill="currentColor" viewBox="0 0 256 256">
					<rect width="256" height="256" fill="none"></rect>
					<path d="M213.3815,109.61945,133.376,36.88436a8,8,0,0,0-10.76339.00036l-79.9945,72.73477A8,8,0,0,0,40,115.53855V208a8,8,0,0,0,8,8H208a8,8,0,0,0,8-8V115.53887A8,8,0,0,0,213.3815,109.61945Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></path>
				</svg>
				<span class="menu-bar-item-text">Home</span>
			</a>
			<a href="profile.php" class="menu-bar-item">
				<svg xmlns="http://www.w3.org/2000/svg" width="192" height="192" fill="currentColor" viewBox="0 0 256 256">
					<rect width="256" height="256" fill="none"></rect>
					<circle cx="128" cy="96" r="64" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="16"></circle>
					<path d="M30.989,215.99064a112.03731,112.03731,0,0,1,194.02311.002" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></path>
				</svg>
				<span class="menu-bar-item-text">Profile</span>
			</a>
		</nav>
	</footer>
</div>
<script>
  function get_details() {
    var pincode = jQuery('#pincode').val();
    if (pincode == '') {
        jQuery('#city').val('');
        jQuery('#state').val('');
    } else {
        jQuery.ajax({
            url: 'get.php',
            type: 'post',
            data: 'pincode=' + pincode,
            success: function(data) {
                if (data == 'no') {
                    jQuery('#city').val('');
                    jQuery('#state').val('');
                } else {
                    var getData = $.parseJSON(data);
                    jQuery('#city').val(getData.city);
                    jQuery('#state').val(getData.state);
                }
            }
        });
    }
}
</script>
</body>
</html>
