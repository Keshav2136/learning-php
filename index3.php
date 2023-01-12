<?php

//connect to mysql database
$db = mysqli_connect('localhost','root','','test');

//check connection
if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}

//define seller's page
function seller_page() {
    $db = mysqli_connect('localhost','root','','test');
    //retrieve seller's information from database
    $query = "SELECT * FROM sellers";
    $result = mysqli_query($db, $query);
    while($row = mysqli_fetch_array($result)) {
        //display seller's information and products
        echo "<h2>" . $row['seller_name'] . "</h2>";
        echo "<p>" . $row['seller_description'] . "</p>";
        echo "<h3>Products:</h3>";
        echo "<ul>";
        //retrieve products from database
        $query2 = "SELECT * FROM products WHERE seller_id = " . $row['seller_id'];
        $result2 = mysqli_query($db, $query2);
        while($row2 = mysqli_fetch_array($result2)) {
            echo "<li>" . $row2['product_name'] . " - " . $row2['product_price'] . "</li>";
        }
        echo "</ul>";
    }
}

//define admin panel
function admin_panel() {
    $db = mysqli_connect('localhost','root','','test');
    //retrieve all sellers and products from database
    $query = "SELECT * FROM sellers";
    $result = mysqli_query($db, $query);
    while($row = mysqli_fetch_array($result)) {
        //display seller's information and products
        echo "<h2>" . $row['seller_name'] . "</h2>";
        echo "<p>" . $row['seller_description'] . "</p>";
        echo "<h3>Products:</h3>";
        echo "<ul>";
        //retrieve products from database
        $query2 = "SELECT * FROM products WHERE seller_id = " . $row['seller_id'];
        $result2 = mysqli_query($db, $query2);
        while($row2 = mysqli_fetch_array($result2)) {
            echo "<li>" . $row2['product_name'] . " - " . $row2['product_price'] . "</li>";
        }
        echo "</ul>";
    }
}

//define customer's checkout page
function checkout_page()
{
    $db = mysqli_connect('localhost','root','','test');
    //retrieve customer's information from database
    $query = "SELECT * FROM customers WHERE customer_id = " . $_SESSION['customer_id'];
    $result = mysqli_query($db, $query);
    $row = mysqli_fetch_array($result);
    //display customer's information and shopping cart
    echo "<h2>Checkout</h2>";
    echo "<p>Customer Name: " . $row['customer_name'] . "</p>";
    echo "<p>Customer Email: " . $row['customer_email'] . "</p>";
    echo "<h3>Shopping Cart:</h3>";
    echo "";
}
    ?>