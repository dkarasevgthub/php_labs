<?php

function authenticate($username, $password, $filename)
{
    $file = file($filename, FILE_IGNORE_NEW_LINES);
    foreach ($file as $line) {
        list($user, $pass, $keyword) = explode(':', $line);
        if ($user == $username && $pass == $password) {
            return true;
        }
    }
    return false;
}

function checkUsername($username, $filename)
{
    $file = file($filename, FILE_IGNORE_NEW_LINES);
    foreach ($file as $line) {
        list($user, $pass, $keyword) = explode(':', $line);
        if ($user == $username) {
            return true;
        }
    }
    return false;
}

function displayPassword($username, $keyword, $filename)
{
    $file = file($filename, FILE_IGNORE_NEW_LINES);
    foreach ($file as $line) {
        list($user, $pass, $key) = explode(':', $line);
        if ($user == $username && $key == $keyword) {
            echo "Пароль для пользователя <b>$username</b>: $pass\n";
            return;
        }
    }
    echo "Неверное ключевое слово\n";
}


function setNewPassword($username, $newPassword, $filename)
{
    $file = file_get_contents($filename);
    $lines = explode("\n", $file);
    $newLines = [];
    foreach ($lines as $line) {
        list($user, $pass, $keyword) = explode(':', $line);
        if ($user == $username) {
            $newLines[] = "$username:$newPassword:$keyword";
        } else {
            $newLines[] = $line;
        }
    }
    file_put_contents($filename, implode("\n", $newLines));
    echo "Пароль для пользователя <b>$username</b> изменен успешно";
}

session_start();
$file = "lab4_3_226.txt";
$filename = realpath($file);
if (isset($_GET['go1'])) {
    $username = $_GET['login'];
    $password = $_GET['passwd'];
    $_SESSION['login'] = $username;
    if (authenticate($username, $password, $filename)) {
        echo "Успешная авторизация<br>";
        echo "<form>Вы можете сменить пароль! Новый пароль: <input type=text name=newpassw> <input type=submit name=go2 value=Сменить></form>";
    } else {
        echo "Неверный логин или пароль<br>";
        if (checkUsername($username, $filename)) {
            echo "<form>Введите ключевое слово чтобы узнать пароль! Ключевое слово: <input type=text name=keyw> <input type=submit name=go3 value=Применить></form>";
        }
    }
} else if (isset($_GET['go2'])) {
    $username = $_SESSION['login'];
    $newPassword = $_GET['newpassw'];
    setNewPassword($username, $newPassword, $filename);
} else if (isset($_GET['go3'])) {
    $keyword = $_GET['keyw'];
    $username = $_SESSION['login'];
    displayPassword($username, $keyword, $filename);
} else {
    echo "
    <h1>Форма авторизации со сменой пароля</h1>
    <form>
    Логин: <input type=text name=login><br><br>
    Пароль: <input type=password name=passwd><br><br>
    <input type=submit name=go1 value=Войти>
  </form>";
}
?>

