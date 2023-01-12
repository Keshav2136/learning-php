<?php require 'connect_to_db.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="find_info.php" method="post">
    Type First Name to find: <input type="text" name="first_name"><br>
    Type Last Name to find: <input type="text" name="last_name">
    <input type="submit">
    </form>
    <br>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') { 
    $firstname=$_POST['first_name'];
    $lastname=$_POST['last_name'];
    $sql = "SELECT * from users where first_name='$firstname' OR last_name='$lastname'";
    $result = mysqli_query($conn, $sql);
while($row = $result->fetch_assoc()) {
    echo "<b>lastname:</b> " . $row["last_name"] . "<br> <b>email:</b> " . $row["email_id"] . "<br>";
}
}
?>

</body>
</html>