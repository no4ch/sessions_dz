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
<h2>Введите ваш город и возраст</h2>

<form action="" method="post">
  <!--Сделайте две страницы: index.php и form.php. При заходе на index.php спросите с помощью формы город и возраст пользователя. На form.php сделайте форму с полями 'Имя', 'Возраст', 'Город'. При заходе на form.php сделайте так, чтобы поля 'Возраст' и 'Город' уже были заполнены.-->

  <input type="text" name="city" placeholder="Сюда вводить город">
  <br>
  <input type="number" name="age" placeholder="Сюда вводить возраст">
  <br>
  <button type="submit">Отправить</button>
  <br>
</form>
<?php
  var_dump($_REQUEST);
  if (!empty($_REQUEST)){
    echo "работает";
    foreach ($_REQUEST as $key=>$value){
      $session->addValue($key, $value);
    }
  }
  echo "<br>";
  var_dump($_SESSION);
  //$session->destroy();
?>
<br>
<a href="form.php">Перейти к заполнению формы для задания 5</a>
</body>
</html>