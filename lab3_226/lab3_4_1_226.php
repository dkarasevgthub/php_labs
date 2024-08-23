<?php
echo "<h1>Записи гостевой книги</h1>";
$i = 1;
$file = fopen("lab3_4_226.txt", "r");
if ($file) {
    while (($line = fgets($file)) !== false) {
        echo "$i: $line";
        $i = $i + 1;
    }
    fclose($file);
}
if ($i == 1) {
    echo "<b>Гостевая книга пуста</b>";
}
?>