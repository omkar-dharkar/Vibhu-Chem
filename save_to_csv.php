<?php

// Database connection
$servername = "localhost";
$username = "root"; // Your database username
$password = ""; // Your database password
$dbname = "customer_info";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle Contact Form Submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile_number = $_POST['mobile_number'];
    $message = $_POST['message'];
    $sql = "INSERT INTO contact_form (name, email, mobile_number,message) VALUES ('$name', '$email', '$mobile_number','$message')";

    if ($conn->query($sql) === TRUE) {
        echo "Contact information saved successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $mobile_number = htmlspecialchars($_POST['mobile_number']);
    $message = htmlspecialchars($_POST['message']);

    // Define the file path and name
    $file = 'contacts/contacts.csv';

    // Check if the file exists; if not, create it and add the headers
    if (!file_exists($file)) {
        $headers = array('Name', 'Email', 'Mobile Number','message');
        $handle = fopen($file, 'w');
        fputcsv($handle, $headers);
    } else {
        $handle = fopen($file, 'a');
    }

    // Write the form data to the CSV file
    fputcsv($handle, array($name, $email, $mobile_number));

    // Close the file handle
    fclose($handle);

    // Provide feedback to the user
    echo "Your details have been saved.";
}

$conn->close();


?>
