<?php
include("path.php");
include("application/controllers/users.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style2.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">
    <title>Code of Future Third Module</title>
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <?php
    include("application/include/header.php");
    ?>

    <!-- registration form -->
    <div class="container">
    <form method="post" action="registration.php" class="reg">
        <h3>Регистрация</h3>
        <div class="mb-3">
        <?php include("application/controllers/errorinfo.php");?>
            <label for="exampleInputEmail1" class="form-label">Войти</label>
            <input name="login" type="text" class="form-control" id="formGroupExampleInput" placeholder="Введите логин">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Адрес электронной почты</label>
            <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">Мы никогда никому не передадим ваши данные.</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Возраст</label>
            <input name="age" type="text" class="form-control" id="formGroupExampleInput" placeholder="Например: 20">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Пароль</label>
            <input name="pass-first" type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword2" class="form-label">Подтвердите пароль</label>
            <input name="pass-second" type="password" class="form-control" id="exampleInputPassword2">
        </div>
        <button name="button-reg" type="submit" class="btn btn-primary">Отправить</button>
        <a href="auth.php">Войти</a>
        <div class="form-text1">Если вы еще не зарегистрированы</div>
        </form>
    </div>
    <!-- end of registration form -->