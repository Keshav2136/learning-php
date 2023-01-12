<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
Welcome <?php echo $_POST["firstname"]; ?><br>
Your email address is: <?php echo $_POST["email"]; ?>

<?php
require 'connect_to_db.php';

//W3School example
$sql = "INSERT INTO users (first_name, last_name, email_id, password, state)
VALUES ('$_POST[firstname]', '$_POST[lastname]', '$_POST[email]', '$_POST[password]', '$_POST[state]')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

</body>
</html>