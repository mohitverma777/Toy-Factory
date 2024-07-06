<?php
require('vendor/autoload.php');

// Create database connection
$con = mysqli_connect('localhost', 'root', '', 'twa');
$id=$_GET['orderid'];
// Select data from usertb table
$res = mysqli_query($con, "SELECT * FROM `invoice_order` WHERE `order_id`='$id'");
$row=mysqli_fetch_assoc($res);
$invoice=$row['invoice'];
$address=$row['order_receiver_address'];
$name=$row['order_receiver_name'];
$quantity=$row['quantity'];
$product=$row['product'];
$date=$row['order_date'];
$price=$row['order_total_before_tax'];
$subtotal=$row['order_total_amount_due'];



if (mysqli_num_rows($res) > 0) {


  // Generate invoice bill HTML code
  $invoice_html = "
  <!DOCTYPE html>
  <html>
    <head>
      <title>Invoice Bill</title>
      <link rel='stylesheet' href='style.css'>
    </head>
    <body>
      <div class='container'>
        <div class='header'>
          <h1>ToyFactory</h1>
          <p>Invoive Bill</p>
        </div>
        <div class='invoice'>
          <div class='row'>
            <div class='col'>
              <h2>Bill To:</h2>
              <p>$name</p>
              <p>$address</p>
              
            </div>
            <div class='col'>
              <h2>Invoice #$invoice</h2>
              <p>Date: $date</p>
              
            </div>
          </div>
          <table>
            <tr>
              <th>Description</th>
              <th>Quantity</th>
              <th>Price</th>
              <th>Total</th>
            </tr>
            <tr>
              <td>$product</td>
              <td>$quantity</td>
              <td>₹$price</td>
              <td>₹$subtotal</td>
            </tr>
            <tr>
              <td colspan='3' class='text-right'>Subtotal:</td>
              <td>₹$subtotal</td>
            </tr>
            <tr>
              <td colspan='3' class='text-right'>Tax:</td>
              <td>₹0</td>
            </tr>
            <tr>
              <td colspan='3' class='text-right'>Total:</td>
              <td>$subtotal</td>
            </tr>
          </table>
          <div class='footer'>
            <p>Thank you for your Shopping!</p>
          </div>
        </div>
      </div>
    </body>
  </html>
  ";

  // Initialize mPDF object
  $mpdf = new \Mpdf\Mpdf();

  // Write HTML code to PDF
  $mpdf->WriteHTML($invoice_html);

  // Save PDF file
  $file = 'path/to/invoice.pdf';
  $mpdf->output($file, 'I');
} else {
  $html = "Data not found";
}
?>
