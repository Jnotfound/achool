<?php
  echo "<h4>Pobrane dane z formularza</h4>";
  // print_r($_POST);
  $error=0;

  if(!isset($_POST['gender'],$_POST['terms'])){
    $error=1;
  }
  foreach ($_POST as $key => $value) {
    // echo "$key: $value<br>";
    if (empty($value)){
      $error=1;
    }
  }
  if($error != 0){
    echo "<script>history.back();</script>";
    exit();
  }

  switch($_POST['gender']){
    case 'man':
      $gender = "Mężczyzna";
      break;
    case 'woman':
      $gender = "Kobieta";
      break;
    default:
      $gender = "";
      break;
  }
  echo <<< DATA
  Imię i nazwisko: $_POST[name] $_POST[surname]<br>
  miasto: $_POST[city]<br>
  plec: $gender<br>
DATA;
?>
