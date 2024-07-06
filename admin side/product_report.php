<?php
require('../user side/vendor/autoload.php');

// Create database connection
$con = mysqli_connect('localhost', 'root', '', 'twa');

// Select data from product_table
$res = mysqli_query($con, "SELECT * FROM product_table");

if (mysqli_num_rows($res) > 0) {
  // Generate Product Report HTML code
  $report_html = '
    <!DOCTYPE html>
    <html>
      <head>
        <title>Product Report</title>
        <style>
        table {
            border-collapse: collapse;
            width: 100%;
            font-family: Arial, sans-serif;
            font-size: 14px;
            margin-top: 20px;
        }
        
        th, td {
            text-align: left;
            padding: 12px 15px;
            border-bottom: 1px solid #ddd;
        }
        
        th {
            background-color: #f2f2f2;
        }
        
        tr:hover {
            background-color: #f5f5f5;
        }
        
        /* Add alternating background color to table rows */
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        
        /* Center the text in the first column (Order ID) */
        td:first-child {
            text-align: center;
        }
        
        /* Style the amount due column to display currency symbol and right-align the text */
        td:nth-child(3) {
            text-align: right;
        }
        td:nth-child(3):before {
            content: "\20B9"; /* Add Rupee symbol before the amount due */
        }
        
        
        /* Style the order status column to display colored badges */
        td:nth-child(7) {
            text-align: center;
        }
        td:nth-child(7):before {
            content: attr(data-status); /* Use the data-status attribute value as the text content */
            display: inline-block;
            padding: 4px 8px;
            color: #fff;
            font-weight: bold;
            border-radius: 20px;
        }
        td[data-status="Pending"]:before {
            background-color: #ffc107; /* Yellow */
        }
        td[data-status="Processing"]:before {
            background-color: #17a2b8; /* Teal */
        }
        td[data-status="Completed"]:before {
            background-color: #28a745; /* Green */
        }
        td[data-status="Cancelled"]:before {
            background-color: #dc3545; /* Red */
        }
        </style>
      </head>
      <body>
        <h1>Product Report</h1>
        <p>ToyFactory<p>
        <table>
          <thead>
            <tr>
              <th>Product ID</th>
              <th>Product Title</th>
              <th>Product Stock</th>
              <th>Product Sales</th>
              
              <th>Brand ID</th>
              
              <th>Product Price</th>
              <th>Date</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody>
            ';

  while($row = mysqli_fetch_array($res)) {
    $report_html .= '
      <tr>
        <td>' . $row["product_id"] . '</td>
        <td>' . $row["product_title"] . '</td>
        <td>' . $row["product_stock"] . '</td>
        <td>' . $row["product_sales"] . '</td>
        
        <td>' . $row["brand_id"] . '</td>
        
        <td>' . $row["product_price"] . '</td>
        <td>' . $row["date"] . '</td>
        <td>' . $row["status"] . '</td>
      </tr>
    ';
  }

  $report_html .= '
          </tbody>
        </table>
      </body>
    </html>
  ';

  // Initialize mPDF object
  $mpdf = new \Mpdf\Mpdf();

  // Write HTML code to PDF
  $mpdf->WriteHTML($report_html);

  // Save PDF file
  $file = 'path/to/product_report.pdf';
  $mpdf->output($file, 'I');
} else {
  $html = "Data not found";
}
?>
