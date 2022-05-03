<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    include 'classes.php';

    // $oZap1 = new Zaposlenik("Matija", "Lukic", "01478523698");
    // $oZap2 = new Zaposlenik("Antun", "Filipovic", "01487459876");
    // $oZap3 = new Zaposlenik("Lucija", "Majetic", "0174102589631");
    // $ozapPrazan = new Zaposlenik();
    // var_dump($oZap1);
    // var_dump($oZap2);
    // var_dump($oZap3);
    // var_dump($ozapPrazan);

    // echo "Hello ". $oZap1->getIme(). " ". $oZap1->getPrezime() . "(".$oZap1->getOIB().")";
   // $oZap1->Pozdrav();


//    $oPredavac = new Predavac("Luka", "Ivanic", "78770287265");
//    echo $oPredavac->Radi();

   $oAsistent = new Astistent("Ana", "Lozancic", "58979799102");
   $oAsistent->IspisProvjeraOIB("88896955664");

    ?>
</body>
</html>