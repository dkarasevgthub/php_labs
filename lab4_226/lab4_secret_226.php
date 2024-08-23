<?php 
session_start();
    // создаем новую сессию или
    // восстанавливаем текущую
print_r($_SESSION);
if (!($_SESSION['login']=="pit" &&
    $_SESSION['passwd']==123))
    Header("Location: authorize.php");
?> 
<html> 
<head>
<title>Secret info</title>
</head> 
<br>Здесь располагается секретная информация :)
</html>
