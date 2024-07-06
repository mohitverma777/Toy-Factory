<?php
// Database connection
$conn = mysqli_connect('localhost', 'root', '', 'twa');

// Count the number of rows where order_status is Delivered
$sql_delivered = "SELECT COUNT(*) AS count FROM `user_orders` WHERE `order_status` = 'Deliverd'";
$result_delivered = $conn->query($sql_delivered);
if ($result_delivered->num_rows > 0) {
    while ($row_delivered = $result_delivered->fetch_assoc()) {
        $delivered_count = $row_delivered["count"];
    }
} else {
    $delivered_count = 0;
}

// Count the number of rows where order_status is Pending
$sql_pending = "SELECT COUNT(*) AS count FROM `user_orders` WHERE `order_status` = 'Pending'";
$result_pending = $conn->query($sql_pending);
if ($result_pending->num_rows > 0) {
    while ($row_pending = $result_pending->fetch_assoc()) {
        $pending_count = $row_pending["count"];
    }
} else {
    $pending_count = 0;
}

// Count the number of rows where order_status is OutForDelivery
$sql_out_for_delivery = "SELECT COUNT(*) AS count FROM `user_orders` WHERE `order_status` = 'OutForDelivery'";
$result_out_for_delivery = $conn->query($sql_out_for_delivery);
if ($result_out_for_delivery->num_rows > 0) {
    while ($row_out_for_delivery = $result_out_for_delivery->fetch_assoc()) {
        $out_for_delivery_count = $row_out_for_delivery["count"];
    }
} else {
    $out_for_delivery_count = 0;
}

// Count the number of rows where order_status is Shipped
$sql_shipped = "SELECT COUNT(*) AS count FROM `user_orders` WHERE `order_status` = 'Shipped'";
$result_shipped = $conn->query($sql_shipped);
if ($result_shipped->num_rows > 0) {
    while ($row_shipped = $result_shipped->fetch_assoc()) {
        $shipped_count = $row_shipped["count"];
    }
} else {
    $shipped_count = 0;
}

// Count the total number of rows in the table
$sql_total = "SELECT COUNT(*) AS total FROM `user_orders`";
$result_total = $conn->query($sql_total);
if ($result_total->num_rows > 0) {
    while ($row_total = $result_total->fetch_assoc()) {
        $total_count = $row_total["total"];
    }
} else {
    $total_count = 0;
}
if ($total_count > 0) {
    $delivered_percentag = ($delivered_count / $total_count) * 100;
    $pending_percentag = ($pending_count / $total_count) * 100;
    $out_for_delivery_percentag = ($out_for_delivery_count / $total_count) * 100;
    $shipped_percentag = ($shipped_count / $total_count) * 100;

    $delivered_percentage = number_format($delivered_percentag, 0);
    $pending_percentage = number_format($pending_percentag, 0);
    $out_for_delivery_percentage = number_format($out_for_delivery_percentag, 0);
    $shipped_percentage = number_format($shipped_percentag, 0);
} else {
    $delivered_percentage = 0;
    $pending_percentage = 0;
    $out_for_delivery_percentage = 0;
    $shipped_percentage = 0;
}
// Calculate the percentage for each condition


// Output the percentages

// Close the database connection
$conn->close();
?>
