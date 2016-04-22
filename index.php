<?php
 include ("connect.php");
$connect = mysqli_connect("localhost","u576544338_mysql","160819993","u576544338_mysql") or die (mysqli_error());
?>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <title>
        мой блог
    </title>
    <meta http-equi="Content-Type" content="text/html"; charset="utf-8">
    <link rel="stylesheet" type="text/css" href="/css/style.css"/>
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.css"/>
    <link rel="stylesheet" type="text/css" href="/css/bootstrap-theme.css"/>
    <link rel="stylesheet" type="text/css" href="/css/bootstrap-theme.min.css"/>
    <link rel="stylesheet" type="text/css" href="/css/bootstrap-theme.min.css"/>
</head>
<body>

<div class="wrapper">

    <div class="header">
        <div class="right">
            <div class="right_menu">
              <a href="#" type="button" class="btn btn-info">Головна</a>
                <a href="/registration.php" type="button" class="btn btn-info">Реєстрація</a>
                <a href="/test.php" type="button" class="btn btn-info">Статті</a>
                <a href="#" type="button" class="btn btn-info">Назад</a>
                <a href="#" type="button" class="btn btn-info">Фото</a>
                <a href="#" type="button" class="btn btn-info">Відео</a>
            </div>
        </div>
       <a href="index.php">
           <div class="header_1"> </div>
           <!-- <img id="logo" src="/img/header.jpg" /></a> -->
    </div>

    <div class="content">
        <div class="left">
            <?php
                $result = mysqli_query($connect,"Select * from data") or die(mysql_error());
                $data = mysqli_fetch_array($result);
          //  print_r ($data);//
                do (
                    printf('
                                <div class="article">
                                <img class="foto" src=%s alt="%s">
                                <a class="title" target="_blank" href="%s" /><h3>%s</h3></a>
                                <p>%s</p>
                                <p>%s</p>
                                <p>%s</p>
                                <p>%s</p>
                                <div style="clear:both;"></div>
                                </div>
                            '
                    ,$data["foto"],$data["title"],$data["url"],$data["title"],$data["m_desc"],$data["desc"],$data["autor"],$data["date"])
                );
                while (
                    $data = mysqli_fetch_array($result)
                );

            ?>
            <h1></h1>




        </div>




        <div style="clear:both;"></div>
    </div>

    <div class="footer">
        Myblog (c) Usenko 2015
    </div>

</div>
</body>
</html>
