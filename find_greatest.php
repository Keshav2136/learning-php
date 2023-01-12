<?php
$no1=$_POST['no1'];
$no2=$_POST['no2'];
$no3=$_POST['no3'];
$no4=$_POST['no4'];
function find_greatest($no1,$no2,$no3,$no4){
    $x=array($no1,$no2,$no3,$no4,12,16,14,21,56,70,80,21);
    $l=$x[0];    
    for($i=0;$i<count($x);$i++){
        if($x[$i]>$l){
            $l=$x[$i];
        }
    }
    echo $l;
}
find_greatest($no1,$no2,$no3,$no4);

?>


<?php

$no1=@$_POST['no1'];
$no2=@$_POST['no2'];
$no3=@$_POST['no3'];
$no4=@$_POST['no4'];

if($no1&&$no2&&$no3&&$no4==0){
    echo "Enter num greater than 0";
}
else{
    echo '
    <form action="index.php" method="POST">
    <input type="number" name="no1"/>
    <input type="number" name="no2"/>
    <input type="number" name="no3"/>
    <input type="number" name="no4"/>
    <input type="submit" value="Sumbit"/>
</form>';}
function find_greatest2($no1,$no2,$no3,$no4){
    $x=array($no1,$no2,$no3,$no4);
    $l=$x[0];
    for($i=0;$i<count($x);$i++){
        if($x[$i]>$l){
            $l=$x[$i];
        }
    }
    echo $l;
}
if ($_SERVER['REQUEST_METHOD']== 'POST') {
    find_greatest2($no1,$no2,$no3,$no4);
}

?>    
