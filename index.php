<?php

echo 0;

$s=array("hi"=>"yo","hnh");
print_r($s);
print_r(array_count_values($s));
echo $s;

function run(){
    print_r("Nice");
}
run();

$city=array("Delhi","Mumbai","Kolkata","Hyderabad");
$state=array("Haryana", "Punjab","Assam","Tripura");

for($i=0;$i<=4;$i++){
    echo (rand($city[0],$city[3]))."";
}
print_r (rand($city[0],$city[3]));
print_r (rand($state[0],$state[3]));

?>