<?php

// Connect to the database
$host = "localhost";
$username = "root";
$password = "";
$dbname = "fpvlife_database";

$conn = mysqli_connect($host, $username, $password, $dbname);

// Check for connection errors
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Create the vendors table if it doesn't exist
$create_vendors_table = "CREATE TABLE IF NOT EXISTS vendors_login (
    id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    username VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL
)";

if (!mysqli_query($conn, $create_vendors_table)) {
    die("Error creating table: " . mysqli_error($conn));
}

// Function to handle vendor sign up
function signup_vendor($username, $password) {
    global $conn;

    $check_sql = "SELECT * FROM vendors WHERE username = ?";

    // Prepare the statement
    $check_stmt = mysqli_stmt_init($conn);
}
?>