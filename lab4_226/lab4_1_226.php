<?php 
session_start();
if (!isset($_GET['go'])){
  echo "
    <h1>Форма авторизации к секретой странице</h1>
    <form>
    Логин: <input type=text name=login>
    Пароль: <input type=password name=passwd>
    <input type=submit name=go value=Go>
  </form>";
}else {
   $_SESSION['login']=$_GET['login'];
   $_SESSION['passwd']=$_GET['passwd'];
    if ($_GET['login']=="pit" &&
        $_GET['passwd']=="123") {
        Header("Location: lab4_secret_226.php");
    }else echo "Неверный ввод,
                попробуйте еще раз<br>";
}
print_r($_SESSION);
?>
