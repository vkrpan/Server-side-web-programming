<?php
include_once 'classes.php';

$oConnParam = new Configuration("127.0.0.1", "studentskidom", "root", "");

try{
  $oConnection = new PDO("mysql:host=$oConnParam->host;dbname=$oConnParam->dbName", $oConnParam->username, $oConnParam->password);
  // echo 'Uspješno spajanje na bazu!';
}
catch(PDOException $e){
  die("Greška u spajanju na server! ". $e->getMessage());

}


?>