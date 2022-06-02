<?php
  $connect = new mysqli("localhost", "root","","zsl1");
  $connect->query("SET NAMES 'utf8'");
  $sql = "SELECT * FROM `user`";
  $result = $connect->query($sql);
  // $user = $result->fetch_assoc();
  //
  // print_r($user);
  while ($user = $result->fetch_assoc()) {
    echo<<< user
      Imie i nazwisko: $user[name] $user[surname]<br>
      Data urodzenia: $user[birthday]
      <hr>
user;
    // code...
  }


?>
