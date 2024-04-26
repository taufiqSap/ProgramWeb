<?php
$myArray = array ();
if(empty($myArray)){
    echo "Array tidak teridentifikasi atau kosong.";
} else {
    echo "Array teridentifikasi dan tidak kosong.";
}

echo "<br>";

$nonExistentVar = array();
if(empty($nonExistentVar)){
    echo "Variabel tidak teridentifikasi atau kosong.";
} else {
    echo "Variabel teridentifikasi dan tidak kosong.";
}

?>