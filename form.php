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
  <title>form.php</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
<?php
  echo "данные сессии: ";
  var_dump($_SESSION);

  $arr = [];

  foreach ($_SESSION as $key=>$value){
    $arr[$key]= $value;
  }

?>
<br>
<br>
<form action="" method="post">
  <input type="text" name="name" value="" placeholder="Введите имя">
  <br>
  <input type="text" name="city" value="<?php echo $arr['city']?: $arr['city'];?>">
  <br>
  <input type="number" name="age" value="<?php echo $arr['age']?: $arr['age'];?>">
  <br>
  <button disabled>Не отправить))</button>
</form>
<a href="index2.php">Назад</a>
<br>
<a href="logout.php">Завершить сессию</a>
</body>
</html>

