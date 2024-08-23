<?php
	$last_name = $_POST['last_name'];
	$first_name = $_POST['first_name'];
	$middle_name = $_POST['middle_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    if (!preg_match("/[А-Я][а-я]/", $last_name)) {
        echo "Фамилия имеет неверный формат";
    } else if (!preg_match("/[А-Я][а-я]/", $first_name)) {
        echo "Имя имеет неверный формат";
    } else if (!preg_match("/[А-Я][а-я]/", $middle_name)) {
        echo "Отчество имеет неверный формат";
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "E-Mail имеет неверный формат";
    } else if (!preg_match("/\+7[0-9]{10}|8[0-9]{10}/", $phone) || !preg_match("/\+7[0-9]{10}|8[0-9]{10}/", $phone)) {
        echo "Телефон имеет неверный формат";
    } else {
        echo "Фамилия: $last_name<br>";
        echo "Имя: $first_name<br>";
		echo "Отчество: $middle_name<br>";
		echo "E=Mail: $email<br>";
        echo "Телефон: $phone<br>";
    }
?>