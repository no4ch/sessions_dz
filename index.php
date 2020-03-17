<?php
  require __DIR__ . "/vendor/autoload.php";
  require_once __DIR__ . "/src/sessions/sessionClass.php";

  $session = new sessionClass;

?>

<!doctype html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Sessions</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<form action="" method="post" class="pt-4">
  <label for="username">Введите ваше имя</label>
  <input name="username" type="text">
  <br>
  <input name="email" type="email"  placeholder="Введите email">

  <br>
  <input type="submit">
  <br>
  <?php
    if (!empty($_REQUEST)) {
      //var_dump($_REQUEST);
      $session->addValue('username', $_REQUEST['username']);
    }
    if (empty($_SESSION['time'])) $session->addValue('time', time());

    if (!empty($_SESSION['time'])) {
      $currentTime = time() - $_SESSION['time'];
      echo "<br>Прошлый раз вы заходили " . $currentTime . " секунд назад";
      $_SESSION['time'] = time();
    }

    if (!empty($_REQUEST['email'])) {
      //echo $_REQUEST['email'];
      $session->addValue('email', $_REQUEST['email']);
    }

  ?>
  <br>
  <a href="./test.php">Узнать имя</a>
  <hr>
  <!--  <form action="" method="post" class="pt-4">-->
  <!--    <input type="email" placeholder="Введите email">-->
  <!--    <input type="submit">-->
  <!--  </form>-->
  <?php
    var_dump($_SESSION);
  ?>
</form>
<hr>
<a href="index2.php">5е задание</a>
</body>
</html>