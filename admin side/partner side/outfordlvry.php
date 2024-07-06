<?php
    
	if(isset($_POST['cnf'])) {
		// Generate OTP
		$otp = rand(100000, 999999);
		$connection = mysqli_connect('localhost','root','','twa');
        session_start(); // Start the session
		$order_id=$_POST['order_id'];

		$select_orders="SELECT * FROM `user_orders` WHERE `order_id`='$order_id'";
		$result_order=mysqli_query($connection,$select_orders);
		$row=mysqli_fetch_assoc($result_order);
		  $total_prd=$row['total_products'];
		  $amount=$row['amount_due'];
		  $invoice=$row['invoice_number'];
		  $date=$row['order_date'];
		  $status=$row['order_status'];
		  $user_id=$row['user_id'];
		  $order_id=$row['order_id'];
		  $productid=$row['product_id'];
		  
		  
		  
		$select_user = "SELECT * FROM `usertb` WHERE id='$user_id'";
		$result_bra=mysqli_query($connection,$select_user);
		$row_bra=mysqli_fetch_array($result_bra);
		$user_email=$row_bra['email'];
	   $user_name=$row_bra['name'];

 
   $select_orders="UPDATE `user_orders` SET `order_status`='outfordelivery' ,`partner_otp`='$otp' WHERE `order_id`='$order_id'";
  $result_order=mysqli_query($connection,$select_orders);

  echo"<script>window.location.href ='home.php'</script>";        
			include('smtp/PHPMailerAutoload.php');

			// Create a new PHPMailer instance
			$mail = new PHPMailer;
			//$mail->SMTPDebug  = 3;
			// SMTP settings
			$mail->isSMTP();

			$mail->Host = 'smtp.gmail.com';
			$mail->Port = 587;
			$mail->SMTPSecure = 'tls';
			$mail->SMTPAuth = true;
			$mail->Username = 'myfactoryinfo7@gmail.com';
			$mail->Password = 'anvegswsghtktbir';

			// Sender and recipient
			$mail->setFrom('myfactoryinfo7@gmail.com', 'ToyFactory');
			$mail->addAddress($user_email);

			// Email subject and body
			$mail->Subject = 'Show this to our delivery boy One-Time Password (OTP) for Verification';
			$mail->Body = 'For Invoice number:' .$invoice.'
			Your OTP is: ' . $otp;

			// Send email
			if (!$mail->send()) {
				echo 'Error sending email: ' . $mail->ErrorInfo;
			} else{
				$none='none';
				$block='block';
			}
}


		if(isset($_POST['verify'])){
			
			$connection = mysqli_connect('localhost','root','','twa');
			$order_id=$_POST['order_id'];
			$user_otp=$_POST['user_otp'];
			
		$select_orders="SELECT * FROM `user_orders` WHERE `order_id`='$order_id'";
		$result_order=mysqli_query($connection,$select_orders);
		$row=mysqli_fetch_assoc($result_order);
		  $total_prd=$row['total_products'];
		  $amount=$row['amount_due'];
		  $invoice=$row['invoice_number'];
		  $date=$row['order_date'];
		  $status=$row['order_status'];
		  $user_id=$row['user_id'];
		  $order_id=$row['order_id'];
		  $productid=$row['product_id'];
		  $partner_otp=$row['partner_otp'];
		  $partner_id=$row['partner_id'];
		  if($partner_otp==$user_otp){
			$select_orders="UPDATE `user_orders` SET `order_status`='Deliverd' WHERE `order_id`='$order_id'";
			$result_order=mysqli_query($connection,$select_orders);

			$insert_history="INSERT INTO `order_history`(`order_id`, `user_id`, `amount_due`, `invoice_number`, `total_products`, `order_date`, `order_status`, `product_id`, `partner_id`, `partner_otp`) 
			VALUES ('$order_id',' $user_id','$amount','$invoice','$total_prd','$date','Deliverd','$productid','$partner_id','$partner_otp')";
			$result_order=mysqli_query($connection,$select_orders);
					  echo "<script>window.location.href ='home.php'</script>";
		  }else{
			echo"<script>alert('wrong otp');window.location.href ='home.php';</script>";
		  }
		

 
  
		}
	?>

