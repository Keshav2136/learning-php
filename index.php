<?php

$city=array("Delhi","Mumbai","Kolkata","Hyderabad");
$state=array("Haryana", "Punjab","Assam","Tripura");

$k=rand(0,count($city));
$m=rand(0,count($state));
echo $city[$k]." ". $state[$m];

?>