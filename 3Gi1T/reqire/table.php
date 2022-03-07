<?php
  // echo "<table style='border-collapse:collapse;border:5px solid pink'>";
  // echo "<tr><th>Imię</th><th>Nazwiso</th></tr>";
  // echo "<tr><td>Janusz</td><td>Nowak</td></tr>";
  // echo "<tr><td>Anna</td><td>Nowak</td></tr>";
  // echo "</table>";

  echo <<<ETYKIETA
  <table>
    <tr>
      <th>Imię</th>
      <th>Nazwisko</th>
      <th>Miasto</th>
    </tr>
ETYKIETA;
  for($i=1;$i<5;$i++){
    echo <<< ROW
    <tr>
      <td>Imie$i</td>
      <td>Nazwisko$i</td>
      <td>Miasto$i</td>
    </tr>
ROW;
  }

  echo "</table>";

?>
