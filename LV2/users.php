<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Document</title>
</head>
<body>
<table>
        <thead>
            <th>Username</th>
            <th>Password</th>
        </thead>
        <tbody>
  <?php
  include 'functions.php';
  $colour ="";
  session_start();
  $oUsers = LoadUsers();
  foreach($oUsers as $oUser){
    if($_SESSION['username']==$oUser['username'] && $_SESSION['password']==$oUser['password']){
      $colour="green";
    }
    else{
      $colour ="";
    }
    echo '<tr class="'.$colour.'">';
    echo '<td>'.$oUser['username'].'</td>';
    echo '<td>'.$oUser['password'].'</td>';
    echo '</tr>';
  }
  ?>
   </tbody>
</table>
  
</body>
</html>