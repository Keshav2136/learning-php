<?php

require "mysql_connect.php";

$insert_statement="insert into testing_table('First name', 'last name', 'Password') values('Hello','world','good')";

$r=mysqli_query($mysql_connect, $insert_statement);

if ($r) {
    echo "Successful";
}else{
    echo "no";
}
?>