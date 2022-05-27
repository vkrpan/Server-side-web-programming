<?php
ini_set('memory_limit', '512M');
include 'classes.php';
$b = new Student("f", "", "", "", "", "", "", "", "", "");
$aa = new Soba("","","","","");
$allStud = json_decode($b->dohvatiStudente(), true);
$allSobe = json_decode($aa->dohvatiSobe(), true);
$aStudenti = array();
$aSobe = array();
foreach($allStud as $val){
  $soba = new Soba($val['Id'], $val['Naziv'], $val['Opis'], $val['Kat'], null);
  $student = new Student($val['Ime'], $val['Prezime'], $val['JMBAG'], $val['Adresa'],$val['PostanskiBroj'], $val['Grad'], $val['GodinaStudija'], $val['OstvareniECTSBodovi'], $val['ProsjekOcjena'], $soba);
  array_push($aStudenti, $student);
}


foreach($allSobe as $soba){

  $oSoba = new Soba($soba['Id'], $soba['Naziv'], $soba['Opis'], $soba['Kat'], array());
  array_push($aSobe, $oSoba);

}
$newA = array_unique($aSobe, SORT_REGULAR);


foreach($newA as $soba){
  foreach($allStud as $student){
    if($soba->id == $student['Id']){
      array_push($soba->poljeStudenata, $student);
    }
  }
}

// var_dump($newA);



// for($i=1;$i<count($allSobe);$i++){
//   if($i=1){
//     $oSoba = new Soba($allSobe[$i]['Id'], $allSobe[$i]['Naziv'], $allSobe[$i]['Opis'], $allSobe[$i]['Kat'], null);
//       array_push($aSobe, $oSoba);
//   }
  // foreach($aSobe as $sobaB){
  //   if($allSobe[$i]['Id']!=$sobaB->id){
  //     $oSoba = new Soba($sobaA['Id'], $sobaA['Naziv'], $sobaA['Opis'], $sobaA['Kat'], null);
  //     array_push($aSobe, $oSoba);
  //   }
  // }


// var_dump($allSobe);




?>