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


    $A = array(
    array(6, 2, 3),
    array(1, 7, 3),
    array(3, 2, 4),
   );
   $B = array(
    array(-3, 1, 2),
    array(2, 8, 3),
    array(5, 2, 1),
   );
   $rez = array(
    array(0, 0, 0),
    array(0, 0, 0),
    array(0, 0, 0),
   );
   
   echo "Prva matrica: <br>";
   for($i=0; $i<3; $i++)
   {
    for($j=0; $j<3; $j++){
        echo $A[$i][$j] . " ";
        
    }
    echo "<br>";
   }
   echo "<br>Druga matrica: <br>";
    for($i=0; $i<3; $i++)
    {
        for($j=0; $j<3; $j++)
        {
            echo $B[$i][$j] . " ";
        }
        echo "<br>";
    }

    for($i=0; $i<3; $i++)
    {
        for($j=0; $j<3; $j++)
        {
            for($k=0; $k<3; $k++){
                $rez[$i][$j] = $rez[$i][$j] + $A[$i][$k] * $B[$k][$j];
            }
        }
    }

    echo "<br>Rezultat: <br>";
    for($i=0; $i<3; $i++)
    {
        for($j=0; $j<3; $j++){
            echo $rez[$i][$j] . " ";
        }
        echo "<br>";
    }
    ?>
    
</body>
</html>