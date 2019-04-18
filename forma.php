<html>
<head>
    <?php
    $link = mysqli_connect('127.0.0.1', 'root', '', 'babyshev'); //подключение к базе данных

    $uid="1"; //логин
    $key='qwerty'; //пароль
    ?>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="">
</head>
<body>
<form  method="POST" name="application">
<input name="email" id="email" maxlength="100" placeholder="Email адрес" required />
<input name="surname" type="text" maxlength="100" placeholder="Фамилия" required />
<input name="name" type="text" maxlength="100" placeholder="Имя" required/>
<input name="telephone" type="Tel" maxlength="100" placeholder="Телефон" required />
<input name="password" type="password" maxlength="100" placeholder="Пароль" required/>
<input name="repeat_password" type="repeat_password" maxlength="100" placeholder="Подтверждение пароля" required/>
<button class="applicationButton" type="submit" form="application">Продолжить</button>
</form>
</body>
</html>