<?php
include 'classes.php';

$oConfiguration = new Configuration();
try{
    $oConnection = new PDO("mysql:host=$oConfiguration->host;dbname=$oConfiguration->dbName", $oConfiguration->username, $oConfiguration->password);
    //echo "Uspješno spojeno na bazu!\n";
}
catch(PDOException $ex){
    die("Dogodila se pogreška pri spajanju na bazu ".$ex->getMessage());
}


?>