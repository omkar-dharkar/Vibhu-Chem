<?php
// Connect to the database
$servername = "localhost";
$username = "root";  // replace with your MySQL username
$password = "";  // replace with your MySQL password
$dbname = "customer_info";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the product name and customer mobile number from POST data
    $product_name = $_POST['product_name'];
    $customer_mobile = $_POST['customer_mobile'];

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO card_enquiry (product_name, customer_mobile) VALUES (?, ?)");
    $stmt->bind_param("ss", $product_name, $customer_mobile);

    // Execute the statement
    if ($stmt->execute()) {
        echo "Enquiry submitted successfully!";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement
    $stmt->close();
}

// Close the connection
$conn->close();
?>
