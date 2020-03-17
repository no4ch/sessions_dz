<?php
  session_start();
  session_destroy();
?>

<!doctype html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Вы завершили сессию !</title>
</head>
<body>
<h2>Сессия завершена</h2>
<a href="form.php">Назад</a>
</body>
</html>
