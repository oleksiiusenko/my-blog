<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>сторінка реєстрації</title>
    <link rel="stylesheet" type="text/css" href="/css/regstyle.css"/>
</head>
<body>
<?php
$connect = mysqli_connect("localhost","u576544338_mysql","160819993","u576544338_mysql") or die (mysqli_error());
include ("connect.php");
?>
<?php

    if (isset($_POST['login'])) { $login = $_POST['login']; if ($login == '') { unset($login);} } //заносим введенный пользователем логин в переменную $login, если он пустой, то уничтожаем переменную
    if (isset($_POST['password'])) { $password=$_POST['password']; if ($password =='') { unset($password);} }
    if (isset($_POST['username'])) { $username=$_POST['username']; if ($username =='') { unset($username);} }
    //заносим введенный пользователем пароль в переменную $password, если он пустой, то уничтожаем переменную
 if (empty($login) or empty($password) or empty($username)) //если пользователь не ввел логин или пароль, то выдаем ошибку и останавливаем скрипт
 {
     exit ("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
 }
    //если логин и пароль введены, то обрабатываем их, чтобы теги и скрипты не работали, мало ли что люди могут ввести
    $login = stripslashes($login);
    $login = htmlspecialchars($login);
    $password = stripslashes($password);
    $password = htmlspecialchars($password);
    $username = stripslashes($username);
    $username = htmlspecialchars($username);
 //удаляем лишние пробелы
    $login = trim($login);
    $password = trim($password);
    $username = trim($username);
 // подключаемся к базе
    include ("connect.php");// файл bd.php должен быть в той же папке, что и все остальные, если это не так, то просто измените путь
 // проверка на существование пользователя с таким же логином
    $result = mysqli_query($connect,"SELECT id FROM users WHERE login='$login'");
    $myrow = mysqli_fetch_array($result);
    if (!empty($myrow['id'])) {
        exit ("Извините, введённый вами логин уже зарегистрирован. Введите другой логин.");
    }
 // если такого нет, то сохраняем данные
    $result2 = mysqli_query ($connect,"INSERT INTO users (login,password,username) VALUES('$login','$password','$username')");
    // Проверяем, есть ли ошибки
    if ($result2=='TRUE')
    {
        echo "Вы успешно зарегистрированы! Теперь вы можете зайти на сайт. <a href='index.php'>Главная страница</a>";
    }
    else {
        echo "Ошибка! Вы не зарегистрированы.";
    }
    ?>
</body>
</html>