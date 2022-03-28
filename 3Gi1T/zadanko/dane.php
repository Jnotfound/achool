<?php
  echo "<h4>Pobrane dane z formularza</h4>";
  $error=0;

  $potrzebne = ['company','first_name','last_name','email','title', 'phone', 'data', 'job'];

  foreach ($potrzebne as $key) {
    if (isset($_POST[$key])){
      $error=0;
    }
  }
//,$_POST['requirements']
  if(!isset($_POST['expectations'])){
    $requirements = "brak";
    $expectations = "brak";
  }

  if(isset($_POST['cancel'])){
    $error=1;
  }

  if($error != 0){
    echo "<script>history.back();</script>";
    exit();
  }


  switch($_POST['job']){
    case 'management':
      $work = "Campaign management";
      break;
    case 'crm':
      $work = "CRM Administration";
      break;
    case 'deployment':
      $work = "Email Deployment";
      break;
    case 'partner':
      $work = "Partner";
      break;
    case 'employee':
      $work = "Employee";
      break;
    default:
      $work = "";
      break;
  }

  echo <<< DATA
  Company: <b>$_POST[company]</b><br>
  First name: <b>$_POST[first_name]</b><br>
  Last name: <b>$_POST[last_name]</b><br>
  E-mail address: <b>$_POST[email]</b><br>
  Title: <b>$_POST[title]</b><br>
  Phone: <b>$_POST[phone]</b><br>
  252 Training Sesion 2010: <b> $_POST[data]</b><br>
  Job function: $work<br>
  Dietary requirements: $requirements<br>
  Expectations: $expectations<br>


DATA;
?>
