<?php

echo "Hello"."<br><br>";
for ($i = 0; $i < 10;$i++){
    echo "<br>";
    for ($k = 0; ($k < $i+1);$k++){
        echo "*";
    }
}

?>