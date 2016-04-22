<?php
include ("connect.php");
$connect = mysqli_connect("localhost","u576544338_mysql","160819993","u576544338_mysql") or die (mysqli_error());
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>сторінка реєстрації</title>
    <link rel="stylesheet" type="text/css" href="/css/style.css"/>
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.css"/>
    <link rel="stylesheet" type="text/css" href="/css/bootstrap-theme.css"/>
    <link rel="stylesheet" type="text/css" href="/css/bootstrap-theme.min.css"/>
    <link rel="stylesheet" type="text/css" href="/css/bootstrap-theme.min.css"/>
</head>
<body>
<form action="reg.php" method="post">
<div class="wrapper">

    <div class="header">
        <a href="/index.php"> <img id="logo" src="/img/header.jpg" /></a>
    </div>

    <div class="content">
        <div class="left">
            <div class="registration">
                <label>Введите ваше имя:<br></label>
                <input type="text" name="username"/><br>
                <label>Введите ваш логин:<br></label>
                <input type="text" name="login"/><br>
                <label>Введите ваш пароль:<br></label>
                <input type="text" name="password"/><br>
                <!--input type="text" name="r_password"/><br-->
                <input type="submit" name="submit" value="Зареєструватись"/>

            </div>





        </div>

        <div class="right">
            <div class="right_menu">
                <a href="/index.php" type="button" class="btn btn-info">Головна</a>
                <a href="/registration.php" type="button" class="btn btn-info">Реєстрація</a>
                <a href="/test.php" type="button" class="btn btn-info">Статті</a>
                <a href="#" type="button" class="btn btn-info">Назад</a>
                <a href="#" type="button" class="btn btn-info">Фото</a>
                <a href="#" type="button" class="btn btn-info">Відео</a>
            </div>
        </div>


        <div style="clear:both;"></div>
    </div>

    <div class="footer">
        Myblog (c) Usenko 2015
    </div>

</div>
</body>
</html>