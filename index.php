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