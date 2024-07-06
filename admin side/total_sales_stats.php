<?php
$connection = mysqli_connect('localhost', 'root', '', 'twa');
$query = "SELECT product_sales, product_price FROM product_table";

// Execute the query
$result = mysqli_query($connection, $query);

// Initialize total sales amount variable
$totalSalesAmount = 0;

// Calculate total sales amount
while ($row = mysqli_fetch_assoc($result)) {
    $sales = $row['product_sales'];
    $price = $row['product_price'];
    $totalSalesAmount += ($sales * $price);
}

// Display the result

// Display the result
$stock_sales = "SELECT product_stock, product_price FROM product_table";

// Execute the query
$result = mysqli_query($connection, $stock_sales);

// Initialize total stock amount variable
$totalStockAmount = 0;

// Calculate total stock amount
while ($row = mysqli_fetch_assoc($result)) {
    $stock = $row['product_stock'];
    $price = $row['product_price'];
    $totalStockAmount += ($stock * $price);
}

// Display the result


if ($totalSalesAmount == 0 || $totalStockAmount == 0) {
    $sales_percentage = 0;
} else {
    $count1 = $totalSalesAmount / $totalStockAmount;
    $count2 = $count1 * 100;
    $sales_percentage = number_format($count2, 0);
}

?>
