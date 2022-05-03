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

    $n = 10;
    static $x = 1;
    static $polje = array();
    while($x<=$n+1){
        for($i = 0; $i<count($polje);$i++){
            echo($polje[$i] . " ");
        }
        array_push($polje, $x);
        echo("<br>");
        $x++;
    }
    ?>
</body>
</html>