<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $mobileNumber = htmlspecialchars($_POST['mobileNumber']);
    $name = htmlspecialchars($_POST['name']);
    $message = htmlspecialchars($_POST['message']);

    // Database connection details
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "customer_info";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO contact_form (mobile_number, name, message) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $mobileNumber, $name, $message);

    // Execute the statement
    if ($stmt->execute()) {
        echo "Message sent and saved successfully!";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
}
?>
