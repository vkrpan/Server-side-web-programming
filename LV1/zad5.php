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
    $string = "ana";  
    $length = strlen($string);  
    $var = "";
    for ($i=($length-1) ; $i >= 0 ; $i--)   
    {  
      echo $string[$i];  
      $var .= $string[$i];

    }  

    if($var==$string){
      echo("true");
    }
    else{
      echo("false");
    }

    ?>
</body>
</html>