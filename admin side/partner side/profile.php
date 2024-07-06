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
              <li ><a href="logout.php" >Logout</a></li>
            </ul>
           </div>
          </nav>
          
	<main class="app-body">
    <section class='shipping'>
   <center>    
 <h1>Your Profile</h1>
 
 </center>
 
   <div class='form'>
   <form autocomplete='off' method='post' action='update_profile.php'>
   <div class="fields fields--2">
    <label class="field">
      <span class="field__label" for="firstname">Name</span>
      <input class="field__input" type="text" id="firstname" name='name' value="<?php echo $name;?>" />
    </label>
    <label class="field">
      <span class="field__label" for="lastname">Email</span>
      <input class="field__input" type="text" id="lastname" name='email' value="<?php echo $email;?>" />
    </label>
  </div>
  <br>
 <div class='fields fields--3'>
   <label class='field'>
     <span class='field__label' for='zipcode'>Zip code</span>
     <input class='field__input' type='text' id='pincode' name='pincode' oninput='get_details()' required='required' value='<?php echo $zipcode;?>'/>
   </label>
   <label class='field'>
     <span class='field__label' for='city'>City</span>
     <input class='field__input' type='text' id='city' name='city'  required='required' value='<?php echo $city;?>' oninput="this.value = '';"/>
   </label>
   <label class='field'>
     <span class='field__label' for='state'>State</span>
     <input  class='field__input' id='state' name='state' required='required' value='<?php echo $state;?>' oninput="this.value = '';"/>
   </label>
 </div>
 <hr>
 <button type='submit' class='button' name='change'>Change</button>
</form>
</div>
   </section>
	</main>
	<footer class="app-footer">
		<nav class="menu-bar">
			<a href="home.php" class="menu-bar-item menu-bar-item">
				<svg xmlns="http://www.w3.org/2000/svg" width="192" height="192" fill="currentColor" viewBox="0 0 256 256">
					<rect width="256" height="256" fill="none"></rect>
					<path d="M213.3815,109.61945,133.376,36.88436a8,8,0,0,0-10.76339.00036l-79.9945,72.73477A8,8,0,0,0,40,115.53855V208a8,8,0,0,0,8,8H208a8,8,0,0,0,8-8V115.53887A8,8,0,0,0,213.3815,109.61945Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></path>
				</svg>
				<span class="menu-bar-item-text">Home</span>
			</a>
			<a href="profile.php" class="menu-bar-item menu-bar-item--active">
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
