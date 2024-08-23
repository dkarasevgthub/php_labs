<?php
$file1 = file("lab3_2_1_226.txt");
$file2 = file("lab3_2_2_226.txt");
$file3 = file("lab3_2_3_226.txt");

for ($i = 0; $i < count($file1); $i++) {
    echo $file1[$i] . "<br>";
    echo $file2[$i] . "<br>";
    echo $file3[$i] . "<br>";
}
?>