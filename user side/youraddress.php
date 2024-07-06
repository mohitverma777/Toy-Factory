<?php 
    include('../include/information.php');
    include('../functions/common_function.php'); 
    $connection = mysqli_connect('localhost','root','','twa');
    $email=$_SESSION['user_email'];
    $select_address="SELECT * FROM `user_address` WHERE `user_email`='$email'";  
    $result_address = mysqli_query($connection, $select_address);
    $row_add = mysqli_fetch_assoc($result_address);
    $user_address=$row_add['address_details'];
    $user_city=$row_add['city'];
    $user_state=$row_add['state'];
    $user_pincode=$row_add['pincode'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toy Factory-Home</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/navbar2.css">
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/body.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <style>
    @import url(http://fonts.googleapis.com/css?family=Open+Sans:400,700);
      .pro a:hover{
        text-decoration: underline;
      }
      .search{
    margin-left: 200px;
}
     
.search input{
    padding-left: 10px;
    border-radius: 10px;
    font-size: medium;
    width: 310px;
    height: 35px;
}
a{
    text-decoration: none;
}

.dropdown {
 
		}
		
		.dropdown-content {
      background: #fff;
			display: none;
			position: absolute;
			z-index: 1;
		}
		
		.dropdown:hover .dropdown-content {
			display: block;
		}
		
		.dropdown-content a {
			color: black;
			padding: 12px 16px;
			text-decoration: none;
			display: block;
      text-transform: capitalize;
    
    font-size: 0.95rem;
		}
		
		.dropdown-content a:hover {
			background-color: #f1f1f1;
		}

    .na{
      font-size: 13.0px;
      font-family: 'Roboto', sans-serif;
      text-transform: capitalize;
      font-weight: 600;
      padding-top: 6px;
    }

/*  */



    h1 {
  margin-bottom: 1rem;
}

p {
  color: var(--color-gray);
}

hr {
  height: 1px;
  width: 100%;
  background-color: var(--color-light-gray);
  border: 0;
  margin: 2rem 0;
}

.container {
  max-width: 40rem;
  padding: 10vw 2rem 0;
  margin: 0 auto;
  height: 100vh;
}

.form {
  display: grid;
  grid-gap: 1rem;
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
    </style>
</head>
<body>
<?php
      include("navbar2.php");
    ?>
<div class="container">
    <center>    
  <h1>Shipping</h1>
  <p>Please enter your shipping details.</p>
  </center>
  <hr />
  <div class="form">
    <?php if(isset($_GET['pay'])){
      $pay =$_GET['pay'];
    echo "<form autocomplete='off' method='post' action='address_form.php?pay=$pay'>";
  }
    else {
      echo "<form autocomplete='off' method='post' action='address_form.php'>";
    }?>
  <label class="field" style="margin-bottom:5px;">
    <span class="field__label" for="address">Address</span>
    <textarea class="field__input" type="text" id="address" name="address_details" rows="4" required="required"><?php echo $user_address;?></textarea>
  </label>
  <div class="fields fields--3">
    <label class="field">
      <span class="field__label" for="zipcode">Zip code</span>
      <input class="field__input" type="text" id="pincode" name="pincode" oninput="get_details()" required="required" value="<?php echo $user_pincode; ?>" required/>
    </label>
    <label class="field">
      <span class="field__label" for="city">City</span>
      <input class="field__input" type="text" id="city" name="city"  required="required" value="<?php echo $user_city;?>" oninput="this.value = '';">
    </label>
    <label class="field">
      <span class="field__label" for="state">State</span>
      <input  class="field__input" id="state" name="state" required="required" value="<?php echo $user_state;?>" oninput="this.value = '';"/>
    </label>
  </div>
  <hr>
  <button type="submit" class="button" id="adsub" name="save_address">Save</button>
</form>
</div>
<?php
        include("footer.php");
?>
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
<?php
  $connection = mysqli_connect('localhost','root','','twa');
  $email=$_SESSION['user_email'];
  if(isset($_POST['save_address'])){
      $address=$_POST['address_details'];
      $city=$_POST['city'];
      $state=$_POST['state'];
      $pincode=$_POST['pincode'];
      $city="UPDATE `user_address` SET `address_details`='$address',`city`='$city',`state`='$state',`pincode`='$pincode' WHERE `user_email`='$email'";
      mysqli_query($connection,$update_name);
      if(isset($_GET['back'])){
        $pay=$_GET['back'];
      echo "<script>alert('address saved');window.location.href ='payment.php?pay=$pay'</script>";
      }else{
        echo "<script>alert('address saved');window.location.href ='youraddress.php'</script>";
      }
  }else{
      echo"<script>alert(your address)</script>";
  }
?>