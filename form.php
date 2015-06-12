<!--<!DOCTYPE html>-->
<!--<html>-->
<!--<head>-->
<!--    <meta charset="utf-8">-->
<!--    <title>Форма</title>-->
<!--</head>-->
<!--<body>-->
<!--<form id="auth" action="handler.php" method="post"></form>-->
<!--<p>...</p>-->
<!--<p><input name="login" form="auth">-->
<!--    <input type="password" name="pass" form="auth"></p>-->
<!--<p><input type="submit" form="auth"></p>-->
<!--</body>-->
<!--</html>-->
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Форма</title>
    <style>
        input:valid + span:after {
            content: url(images/ok.png);
            padding-left: 5px;
        }
        input:invalid + span:after {
            content: url(images/nook.png);
            padding-left: 5px;
        }
        input[type="number"] {
            margin-right: -3px;
        }
    </style>
</head>
<body>
<form action="handler.php">
    <p>Пожалуйста, заполните обязательные поля.</p>
    <p>Имя: <input type="text" required><span></span></p>
    <p>Возраст: <input type="number" size="3"><span></span></p>
    <p>E-mail: <input type="email" required><span></span></p>
    <p>Сайт: <input type="url"><span></span></p>
    <p><input type="submit" value="Отправить"></p>
</form>
</body>
</html>