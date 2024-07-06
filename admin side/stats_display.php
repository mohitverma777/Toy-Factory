<?php
     $connection = mysqli_connect('localhost','root','','twa');
     
     $select_category="SELECT * FROM product_table";
             $result_category=mysqli_query($connection,$select_category);
             
                 $total_stock=0;
                 $total_sales=0;
                 $total_price=0;
                 $total_salesprfit=0;
             while($row_data=mysqli_fetch_array($result_category))
             {
                
                 $product_stock=$row_data['product_stock'];
                 $product_sales=$row_data['product_sales'];
                $product_price=$row_data['product_price'];

                
                

                $product_pri=array($row_data['product_price']);
                $price=array_sum($product_pri);
                $total_price+=$price;

                 $product_stoc=array($row_data['product_stock']);
            
                 $product_stock=array_sum($product_stoc);
                 $total_stock += $product_stock;

                 $product_sal=array($row_data['product_sales']);
                 $product_sales=array_sum($product_sal);
                 $total_sales += $product_sales;
                 
             }
           
         
             $count1 = $total_sales / $total_stock;
                $count2 = $count1 * 100;
            $count = number_format($count2, 0);

           
            
           

// Create a new PDO instance

            // SQL query
           
            
            
         

       
?>
<!-- table {
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
 -->