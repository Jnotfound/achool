<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Form 1</title>
  </head>
  <body>
    <h4>Dane użytkownika</h4>
    <form method="get">
      <input type="text" name="surname" placeholder="Podaj nazwisko"><br>
      <input type="password" name="password" placeholder="Podaj hasło"><br><br>
      <input type="submit" value="zatwierdź">
    </form>
    <?php
      // echo $_GET['surname'];
      if(!empty($_GET['surname'])&&!empty($_GET['password'])) {
        echo "Nazwisko: $_GET[surname],"."<br>";
        echo " hasło: $_GET[password]"."<br>";
      }


    ?>
  </body>
</html>
