<?php
// Database configuration
$servername = "localhost"; // Change this to your MySQL server hostname
$username = "username"; // Change this to your MySQL username
$password = "password"; // Change this to your MySQL password
$database = "pet_pal"; // Change this to your MySQL database name

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to store user registration data
function registerUser($name, $email, $phone, $message) {
    global $conn;
    $sql = "INSERT INTO users (name, email, phone, message) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $name, $email, $phone, $message);
    $stmt->execute();
    $stmt->close();
}

// Check if form data is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $message = $_POST["message"];

    // Store user registration data in the database
    registerUser($name, $email, $phone, $message);

    // Redirect to success page or perform other actions
    header("Location: success.php");
    exit();
}

// Close connection
$conn->close();
?>
