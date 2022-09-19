<?php

#Declaring Variables
$a=12; $b=14;

#Data Types- string, integer, boolen, array, double

#Datatype- Arrays
$k=array("h1","h1","h1");
$j=true;

#Getting datatype (using predefined functions of PHP)
echo gettype($k).gettype($j);

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

 #Nested loop
if($a==12 && $b==14){
    echo "Good";
}elseif ($a==122) {
    echo "";
}elseif($b==122){
    echo "";
}
else{
    echo "";
}

# Nested 'for' loop
for ($i=0; $i < 10; $i++) { 
    for ($j=10; $j >= $i+1; $j--) { 
        echo "*";
    }
    echo "<br>";
}

echo "<br>";

# Printing patterns with 'for' statements using if-else
for ($d=0; $d <= 10; $d++) {
    for ($g=3; $g >= ($d%2); $g--) {
        if ($g%2 == 0) {
            echo "*";
        }
    }
    echo "<br>";
}

$city=array("Delhi","Mumbai","Kolkata","Hyderabad");
$state=array("Haryana", "Punjab","Assam","Tripura");

#Using rand func for generating random strings out of the given range
$k=rand(0,count($city));
$m=rand(0,count($state));
echo $city[$k]." ". $state[$m];



#Classes

class Hello{
    public $hello;
    public function hello(){
        echo "This is a method in class";
    }
}

?>