<?php

#Declaring Variables
$a=12; $b=14;

#Datatype- Arrays
$k=array("h1","h1","h1");

#Getting datatype (using predefined functions of PHP)
echo gettype($k);

#Increment / Decrement Operators
$g=$a++;
echo $g++;
echo $g;

#Conditional statements
## Using if-else
if ($a=12 && $b=14){
    echo "true";
}else{
    echo "fa";
}

$city=array("Delhi","Mumbai","Kolkata","Hyderabad");
$state=array("Haryana", "Punjab","Assam","Tripura");

#Using rand func for generating random strings out of the given range
$k=rand(0,count($city));
$m=rand(0,count($state));
echo $city[$k]." ". $state[$m];

?>