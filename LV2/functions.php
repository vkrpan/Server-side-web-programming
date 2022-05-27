<?php
function LoadUsers(){

    $string = file_get_contents("./users.json");
    $oUsers = json_decode($string, true);
    return $oUsers;
}

function CheckUser($sUsername, $sPassword){
  $allUsers = LoadUsers();
  $exists = false;
  $oUserArray = array("username"=> null, "password"=>null);
  foreach($allUsers as $user){
    if($user['username'] == $sUsername && $user['password']==$sPassword){
      $oUserArray['username'] = $user['username'];
      $oUserArray['password'] = $user['password'];
    }
  }
  return $oUserArray;
}

function SetSessions($oUser){
  session_start();
  $_SESSION['username'] = $oUser['username'];
  $_SESSION['password'] = $oUser['password'];
}
?>