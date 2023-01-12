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

// Create the users table if it doesn't exist
$create_users_table = "CREATE TABLE IF NOT EXISTS customers_login (
    id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    username VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    name VARCHAR(255) NOT NULL,
    gender VARCHAR(255) NOT NULL,
    place VARCHAR(255) NOT NULL
)";

if (!mysqli_query($conn, $create_users_table)) {
    die("Error creating table: " . mysqli_error($conn));
}

// Get user information from a form or other source
if (isset($_POST['username']) && isset($_POST['email']) && isset($_POST['name']) && isset($_POST['gender']) && isset($_POST['place'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $gender = mysqli_real_escape_string($conn, $_POST['gender']);
    $place = mysqli_real_escape_string($conn, $_POST['place']);

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Handle the error of invalid email format
    } else {
        // Check if the user already exists
        $check_sql = "SELECT * FROM customers_login WHERE username = ? OR email = ?";

        // Prepare the statement
        $check_stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($check_stmt, $check_sql)) {
            die("Error: " . mysqli_stmt_error($check_stmt));
        }

        // Bind the parameters
        mysqli_stmt_bind_param($check_stmt, "ss", $username, $email);

        // Execute the statement
        mysqli_stmt_execute($check_stmt);

        // Get the result
        $result = mysqli_stmt_get_result($check_stmt);

        if (mysqli_num_rows($result) > 0) {
            // User already exists
            echo "Error: User already exists with that username or email.";
        } else {
            // Insert user information into the database
            $sql = "INSERT INTO customers_login (username, email, name, gender, place)
            VALUES (?, ?, ?, ?, ?)";

            // Prepare the statement
            $stmt = mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $sql)) {
                die("Error: " . mysqli_stmt_error($stmt));
            }

            // Bind the parameters
            mysqli_stmt_bind_param($stmt, "sssss", $username, $email, $name, $gender, $place);

            // Execute the statement
            if (mysqli_stmt_execute($stmt)) {
                echo "New record created successfully";
            } else {
                die("Error: " . mysqli_stmt_error($stmt));
            }
            // Close the statement and connection
            mysqli_stmt_close($stmt);
            mysqli_close($conn);
        }
    }
}
?>