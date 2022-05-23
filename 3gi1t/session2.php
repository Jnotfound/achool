<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h3>sesja 2</h3>
    <?php
      session_start();
      echo session_id();

      // $_SESSION['name'] = 'Janusz';

      echo '<br>'.$_SESSION['name'].'<br>';
      // unset($_SESSION['name']);
    ?>
    <a href="./session3.php">Trzecia strona</a>
  </body>
</html>
