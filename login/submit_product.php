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

// Create the products table if it doesn't exist
$create_products_table = "CREATE TABLE IF NOT EXISTS products (
    id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    vendor_id INT(11) NOT NULL,
    product_name VARCHAR(255) NOT NULL,
    product_picture VARCHAR(255) NOT NULL,
    product_category VARCHAR(255) NOT NULL
)";

if (!mysqli_query($conn, $create_products_table)) {
    die("Error creating table: " . mysqli_error($conn));
}

// Function to list products
function list_products() {
    global $conn;

    $sql = "SELECT id, vendor_id, product_name, product_picture, product_category FROM products";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            echo "Product ID: " . $row["id"] . " - Vendor ID: " . $row["vendor_id"] . " - Product Name: " . $row["product_name"] . " - Product Picture: " . $row["product_picture"] . " - Product Category: " . $row["product_category"] . "<br>";
        }
    } else {
        echo "No products found.";
    }
}

// Function to add a new product
function add_product($vendor_id, $product_name, $product_picture, $product_category)
{
    global $conn;

    $sql = "INSERT INTO products (vendor_id, product_name, product_picture, product_category)
    VALUES (?, ?, ?, ?)";

    // Prepare the statement
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        die("Error: " . mysqli_stmt_error($stmt));
    }

    // Bind the parameters
    mysqli_stmt_bind_param($stmt, "isss", $vendor_id, $product_name, $product_picture, $product_category);

    // Execute the statement
    if (mysqli_stmt_execute($stmt)) {
        echo "Product added successfully";
    } else {
        die("Error: " . mysqli_stmt_error($stmt));
    }
    // Close the statement
    mysqli_stmt_close($stmt);
}     
?>