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

// Handle Quotation Form Submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $company_name = $_POST['company'];
    $quantity = $_POST['quantity'];
    $rate = $_POST['rate'];
    $mobile = $_POST['mobile'];
    $material_name = $_POST['material'];
    $location = $_POST['location'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $sql = "INSERT INTO quotation_form (name, company, quantity, rate, mobile, material, location, email, message) 
            VALUES ('$name', '$company_name', '$quantity', '$rate', '$mobile', '$material_name', '$location', '$email', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "Quotation information saved successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();


// // Set the directory where the CSV file will be stored
// $directory = "quotations/";

// // Create the directory if it doesn't exist
// if (!is_dir($directory)) {
//     mkdir($directory, 0755, true);
// }

// // Define the CSV file name
// $file_name = $directory . "quotations.csv";

// // Check if the CSV file exists
// $file_exists = file_exists($file_name);

// // Open the CSV file for writing (append mode)
// $file = fopen($file_name, "a");

// // Get form data and sanitize it
// $name = htmlspecialchars($_POST['name']);
// $company = htmlspecialchars($_POST['company']);
// $quantity = htmlspecialchars($_POST['quantity']);
// $rate = htmlspecialchars($_POST['rate']);
// $mobile = htmlspecialchars($_POST['mobile']);
// $material = htmlspecialchars($_POST['material']);
// $location = htmlspecialchars($_POST['location']);
// $email = htmlspecialchars($_POST['email']);
// $message = htmlspecialchars($_POST['message']);

// // Prepare the data as an array
// $data = array($name, $company, $quantity, $rate, $mobile, $material, $location, $email, $message);

// // If the file doesn't exist, add the header row
// if (!$file_exists) {
//     fputcsv($file, array("Name", "Company Name", "Quantity (in Ltrs.)", "Rate", "Mobile", "Material Name", "Location", "Email", "Message"));
// }

// // Add the data to the CSV file
// fputcsv($file, $data);

// // Close the file
// fclose($file);

// // Respond with success
// http_response_code(200);
// echo "Form saved successfully!";
?>
