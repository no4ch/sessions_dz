<?php
  require __DIR__ . "/vendor/autoload.php";
  require __DIR__ . "/src/sessions/sessionClass.php";

  $session = new sessionClass();
?>

<!doctype html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Test.php</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<?php
  if (!empty($_SESSION['username'])) echo 'Ваше имя: ' . $_SESSION['username']; else {
    echo "Вы не указали имя!";
    echo "<br>";
    var_dump($_SESSION);
  }

  echo "<br>";
  echo "<br>";
  $email = "";
  if (!empty($_SESSION['email'])) {
    $email = $_SESSION['email'];
  }
?>

<form action="" method="post" class="pt-4">
  <input type="text" placeholder="Введите имя">
  <br>
  <input type="text" placeholder="Введите фамилию">
  <br>
  <input type="password" placeholder="Введите пароль">
  <br>
  <input type="email" placeholder="Введите email" value="<?php echo $email; ?>">

</form>

<hr>

<?php
  //$counter = 0;
  if (isset($_SESSION['counter'])) {
    $session->editValue('counter', ++$_SESSION['counter']);
    echo "<br>Текущий счетчик: ".$_SESSION['counter'];
  } else {
    echo '<br>Вы еще не обновляли страницу';
    $session->addValue('counter', 0);
  }
?>

</body>
</html>
