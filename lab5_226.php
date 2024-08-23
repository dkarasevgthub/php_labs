<?php
$DBHost = "localhost";
$DBUser = "pma";
$DBPassword = "passwd";
$DBName = "lab5226";
$Link = mysqli_connect($DBHost, $DBUser, $DBPassword, $DBName);

if (isset($_GET["find"])) {
    $tel = $_GET['tel'];
    $isFound = false;
    $Result = mysqli_query($Link, "SELECT * FROM users WHERE phone = $tel");
    while ($Rows = mysqli_fetch_array($Result)) {
        $isFound = true;
        $last_name = $Rows[1];
        $first_name = $Rows[2];
        $middle_name = $Rows[3];
        $tel = $Rows[4];
        $address = $Rows[5];
        echo "<b>Пользователь по вашему запросу:</b><br>Фамилия: $last_name<br>Имя: $first_name<br>Отчество: $middle_name<br>Телефон: $tel<br>Адрес: $address";
    }
    if (!$isFound) {
        echo "<h2>Пользователь по вашему запросу не найден</h2>";
    }
    mysqli_close($Link);
} else if (isset($_GET["add"])) {
    $last_name = $_GET["last_name"];
    $first_name = $_GET["first_name"];
    $middle_name = $_GET["middle_name"];
    $tel = $_GET["tel"];
    $address = $_GET["address"];
    mysqli_query($Link, "INSERT INTO users (last_name, first_name, middle_name, phone, address) VALUES ('$last_name', '$first_name', '$middle_name', '$tel', '$address')");
    echo "<h2>Запись добавлена успешно</h2>";
    mysqli_close($Link);
} else {
    echo "
<h1>Работа с базой данных</h1>
<br>
<h2>Поиск по номеру телефона:</h2>
<form>Телефон: <input type='tel' name='tel'> 
    <input type=submit value='Найти' name='find'> 
</form>
<br>
<h2>Добавление в базу данных:</h2>
<form>
    Фамилия: 
    <input type='text' name='last_name'><br><br>
    Имя: <input type='text' name='first_name'>
    <br><br>
    Отчество: <input type='text' name='middle_name'>
    <br><br>
    Телефон: <input type='text' name='tel'>
    <br><br>
    Адрес: <input type='text' name='address'>
    <br><br>
    <input type='submit' value='Добавить' name='add'>
</form>";
}
?>