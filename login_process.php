<?php
session_start();

// Assuming you have already validated the username and password


session_start();
// Assuming you have already validated the username and password



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

// Prepare and execute query
$sql = "SELECT password_hash FROM admin_users WHERE username = ?";
$stmt = $conn->prepare($sql);
if ($stmt === false) {
    die("Prepare failed: " . $conn->error);
}

$stmt->bind_param("s", $input_username);
$stmt->execute();
$stmt->store_result();

if ($stmt->num_rows > 0) {
    $stmt->bind_result($hashed_password);
    $stmt->fetch();
    
    // Verify the hashed password
    if (password_verify($input_password, $hashed_password)) {
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $input_username;
        header("Location: admin.php");
        exit();
    } else {
        echo "Invalid username or password.";
    }
} else {
    echo "No user found with that username.";
}
$_SESSION['username'] = $input_username; // Store the username in session
header('Location: admin.php'); // Redirect to the admin dashboard

$stmt->close();
$conn->close();
?>
