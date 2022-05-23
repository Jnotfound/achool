<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h3>sesja 1</h3>
    <?php
      session_start();
      echo session_id();

      $_SESSION['name'] = 'Janusz';
      echo '<br>'.$_SESSION['name'].'<br>';
      
    ?>
    <a href="./session2.php">Druga strona</a>
  </body>
</html>
