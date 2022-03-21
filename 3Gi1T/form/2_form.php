<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Form 2</title>
  </head>
  <body>
    <h4>Dane użytkownika</h4>
    <form  action="./script/data.php" method="post">
      <input type="text" name="name" placeholder="Podaj imie"><br><br>
      <input type="text" name="surname" placeholder="Podaj nazwisko"><br><br>
      <select name="city">
        <option value="poznan">Poznań</option>
        <option value="gniezno">Gniezno</option>
      </select><br><br>
      <input type="radio" name="gender" value="man">Mężczyzna
      <input type="radio" name="gender" value="woman">Kobieta<br><br>
      <input type="submit" value="zatwierdź">

    </form>
  </body>
</html>
