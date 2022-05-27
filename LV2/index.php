<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="index.php" method="POST">
    <label for="username">Username</label><br>
    <input type="text" name="username"><br><br><br>
    <label for="password">Password</label><br><br><br>
    <input type="password" name="password">
    <button type="submit">Login</button>
  </form>
  <?php
  include 'functions.php';
  if(isset($_POST['username']) && isset($_POST['password'])){
    $oUser = CheckUser($_POST['username'], $_POST['password']);
    if($oUser['username']!=null && $oUser['password']!=null){
      SetSessions($oUser);
      header("Location: users.php");
    }

  }

  ?>

  
</body>
</html>