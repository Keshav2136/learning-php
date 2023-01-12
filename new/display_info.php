<?php

require 'connect_to_db.php';

$sql = "SELECT * FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo $row["id"]. " Name: " . $row["first_name"]. " " . $row["last_name"]. " ". $row["email_id"]. " " . $row["password"]. " " . $row["state"] . "<br><br>";
  }
} else {
  echo "0 results";
}
$conn->close();

?>