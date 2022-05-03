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


    function DisplayMatrix($rows, $colums, $arr){
        $output_matrix = array(array(0,0,0), array(0,0,0), array(0,0,0));
        for($i = 0; $i < $rows;$i++)
        {
            for($j = 0; $j < $colums; $j++){
                foreach($arr as $pos){
                    for($k = 0; $k < count($pos); $k++){
                        $output_matrix[$pos[0]][$pos[1]] = $pos[2];
                    }
                }
            }
        }
        for($i = 0; $i < $rows; $i++){
            for($j = 0; $j < $colums; $j++){
                echo $output_matrix[$i][$j]." ";
            }
            echo "<br>";
        }
    }
    $x = [[0,0,1], [1,1,2], [1,2,3], [2,2,5]];
    DisplayMatrix(3, 3, $x);
    ?>
</body>
</html>