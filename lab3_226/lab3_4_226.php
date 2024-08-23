<?php
$username = $_POST["username"];
$text = $_POST["text"];
date_default_timezone_set("UTC");
$time = date("d M Y H:i:s");
$file = fopen("lab3_4_226.txt", "a");
fwrite($file, "<b>Имя пользователя:</b> $username <b>Запись:</b> $text <b>Время добавления:</b> $time <br><br>");
fclose($file);
echo "<br>Запись добавлена успешно!";
?>
