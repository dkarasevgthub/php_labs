<?php
session_start();
if (isset($_SERVER['PHP_AUTH_USER'])) {
    $username = $_SERVER['PHP_AUTH_USER'];
    $password = $_SERVER['PHP_AUTH_PW'];
    if ($username != "admin" || $password != "admin123") {
        header('WWW-Authenticate: Basic realm="My Realm"');
        header('HTTP/1.0 401 Unauthorized');
        exit();
    }
} else {
    echo "Доступ к ресурсу заблокирован";
    header('WWW-Authenticate: Basic realm="My Realm"');
    header('HTTP/1.0 401 Unauthorized');
    exit();
}
echo "Вам доступна секретная информация! Тссс...";

unset($_SERVER['PHP_AUTH_USER']);
unset($_SERVER['PHP_AUTH_PW']);
header('HTTP/1.0 401 Unauthorized');
?>
