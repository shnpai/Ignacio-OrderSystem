<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $orderAmount = $_POST['order'];
    $quantity = $_POST['quantity'];
    $cashProvided = $_POST['cash'];

    // Calculate total price
    $totalPrice = $orderAmount * $quantity;

    // Calculate change
    $change = $cashProvided - $totalPrice;

    // Set timezone to the Philippines
    date_default_timezone_set("Asia/Manila");

    // Get current date and time
    $dateTime = date("m/d/Y h:i:s A");


    if ($change < 0) {
        // Display error message with red dotted border if balance is not enough
        echo "<div style='border: 2px dotted red; padding: 20px; width: 300px; margin: 50px auto; text-align: center; color: red; font-weight: bold;'>
                Sorry, balance not enough.
              </div>";
    } else {
        echo "<h1>Receipt</h1>";
        echo "Total Price: " . $totalPrice . "<br>";
        echo "You paid: " . $cashProvided . "<br>";
        echo "Change: " . $change . "<br>";
        echo "". $dateTime . "<br>";
    }
} else {
    echo "Invalid request.";
}
?>
