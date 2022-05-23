<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h3>sesja 3</h3>
    <?php
      session_start();
      echo session_id();

      // $_SESSION['name'] = 'Janusz';
      echo '<br>'.$_SESSION['name'].'<br>';
      session_regenerate_id();
      session_destroy();

    ?>
    <a href="./session.php">Pierwsza strona</a>
  </body>
</html>
