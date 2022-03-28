<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Zadanie</title>
  </head>
  <body>
    <h4>Dane użytkownika</h4>
    <form  action="./dane.php" method="post">
      Company: <input type="text" name="company" placeholder="Podaj firmę"><br><br>
      First name: <input type="text" name="first_name" placeholder="Podaj imię"><br><br>
      Last name: <input type="text" name="last_name" placeholder="Podaj nazwisko"><br><br>
      E-mail address: <input type="text" name="email" placeholder="Podaj email"><br><br>
      Title: <input type="text" name="title" placeholder="Podaj tytuł"><br><br>
      Phone: <input type="text" name="phone" placeholder="Podaj numer telefonu"><br><br>
      Cancel registration <input type="checkbox" name="cancel"><br><br>

      252 Training Sesion 2010 <input type="date" name="data"><br><br>
      Job function:<br>
      <input type="radio" name="job" value="management">Campaign management<br>
      <input type="radio" name="job" value="crm">CRM Administration<br>
      <input type="radio" name="job" value="deployment">Email Deployment<br>
      <input type="radio" name="job" value="partner">partner<br>
      <input type="radio" name="job" value="employee">Employee<br><br>
      Dietary requirements: <input type="text" name="requirements" placeholder=""><br><br>
      Expectations: <textarea name="expectations"></textarea><br><br>
      <input type="submit" value="zatwierdź">

    </form>
  </body>
</html>
