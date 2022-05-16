<?php
  // print_r($_POST);

  $error = 0;

  foreach($_POST as $key => $value){
    if(empty($value)){
      $error = 1;
    }
  }

  if($error != 0){
     echo "<script>history.back();</script>";
     exit();
  }

  // //Imię
  $sprawdz = '/^[A-ZŁŚ]{1}+[a-ząęółśżźćń]$/';
  if(!preg_match($sprawdz,$_POST['imie'])){
      $error = 1;
  }

  // //nazwisko
  //
  // //data urodzenia
  //
  // //email
  // $sprawdz3 = '/(*UTF8)^[A-ZŁŚ]{1}+[a-ząęółśżźćń]+$/';
  // if(!preg_match($sprawdz3,$_POST['email'])){
  //     $error = 1;
  // }


  echo <<< DATA
  Imię i nazwisko: $_POST[imie] $_POST[nazwisko]<br>
  data urodzenia: $_POST[data]<br>
  email: $_POST[email]<br>
  kod pocztowy: $_POST[pocztowy]<br>
DATA;

?>
