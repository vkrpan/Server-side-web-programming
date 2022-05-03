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
    $polje = array("WPSP", "SPJ", "OS", "STAT");
    list($a, $b, $c, $d) = $polje;
    for($i = 0; $i<count($polje);$i++){
        echo($polje[$i] . " - ". strlen($polje[$i]). " <br>");
    }
    ?>
</body>
</html>