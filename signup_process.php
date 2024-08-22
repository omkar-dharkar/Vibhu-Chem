<?php
session_start();

// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "admin_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get user input
$input_username = $_POST['username'];
$input_password = $_POST['password'];

// Check if username already exists
$sql = "SELECT id FROM admin_users WHERE username = ?";
$stmt = $conn->prepare($sql);
if ($stmt === false) {
    die("Prepare failed: " . $conn->error);
}

$stmt->bind_param("s", $input_username);
$stmt->execute();
$stmt->store_result();

if ($stmt->num_rows > 0) {
    echo "Username already taken. Please choose another.";
} else {
    // Hash the password
    $hashed_password = password_hash($input_password, PASSWORD_DEFAULT);

    // Insert new user
    $sql = "INSERT INTO admin_users (username, password_hash) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    if ($stmt === false) {
        die("Prepare failed: " . $conn->error);
    }

    $stmt->bind_param("ss", $input_username, $hashed_password);
    if ($stmt->execute()) {
        echo "Signup successful. You can now log in.";
    } else {
        echo "Error: " . $stmt->error;
    }
}

$stmt->close();
$conn->close();
?>
