<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
    <h1>Prikaz svih soba</h1>
    <table>
        <thead>
            <th>Redni broj</th>
            <th>Naziv sobe</th>
            <th>Opis sobe</th>
            <th>Kat</th>
            <th>Studenti</th>
        </thead>
        <tbody>
            <?php
            
                include 'jsons.php';
                $cntr = 1;
                foreach($newA as $soba){
                  //var_dump($soba->poljeStudenata);
                    echo "
                        <tr>
                            <td>".$cntr."</td>
                            <td>".$soba->naziv."</td>
                            <td>".$soba->opis."</td>
                            <td>".$soba->kat."</td><td>";
                    foreach($soba->poljeStudenata as $key => $value){
                      echo $value['Ime'].", ";
                      // foreach($value as $nesta){
                      //   var_dump($nesta);
                      // }
                    }
                    echo "</td></tr>";
                    $cntr++;
                }
            ?>
        </tbody>
    </table>
</body>
</html>
