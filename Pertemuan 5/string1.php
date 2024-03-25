<?php

$LoremIpsum = "Lorem ipsum dolor sit amet consectetur adipisicing elit. 
Velit iste, dicta quos molestiae corrupti, 
quam cum doloribus quibusdam fugiat eligendi porro aspernatur obcaecati nam error illum,
minima maxime voluptatibus. Totam.";

echo "<p>{$loremIpsum}</p>";
echo "Panjang karakter: ". strlen($loremIpsum). "<br>";
echo "Panjang kata: " . str_word_count($loremIpsum) . "<br>";
echo "<p>" . strtoupper($loremIpsum). "</p>";
echo "<p>" . strtolower($LoremIpsum). "</p>";

?>