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


function circulary_identical($arr1, $arr2){
    $arr3 = array_merge($arr1, $arr2);
    for($i = 0; $i < count($arr1); $i++){
        $rep = 0;
        for($j = $i; $j < ($i + count($arr1));$j++){
            if($arr2[$rep] == $arr3[$j]){
                $rep +=1;
            }else{
                break;
            }
        }
        if($rep == count($arr1)){
            return true;
        }
    }
    return false;
}
$arr1 = [1, 2, 3, 4, 5];
$arr2 = [3, 4, 5, 1, 2];
$check = false;
$check = circulary_identical($arr1, $arr2);
if($check){
    echo "True";
}else{
    echo "False";
}
     ?>
</body>
</html>