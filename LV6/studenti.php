<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<h1>Lista svih studenata</h1>
    <table>
        <thead>
            <th>Redni broj</th>
            <th>Ime</th>
            <th>Prezime</th>
            <th>JMBAG</th>
            <th>Adresa</th>
            <th>Postanski broj</th>
            <th>Grad</th>
            <th>Godina studija</th>
            <th>Ostvareni ECTS bodovi</th>
            <th>Prosjek Ocjena</th>
            <th>Naziv sobe</th>
        </thead>
        <tbody>
            <?php
              include 'jsons.php';
              $cntr = 1;
              foreach($aStudenti as $student){
                echo "<tr><th>$cntr</th><td>" . $student->ime . "</td><td>" . $student->prezime . "</td><td>" . $student->jmbag . "</td><td>" . $student->adresa . "</td><td>" . $student->postanskiBroj . "</td><td>" . $student->grad. "</td><td>" . $student->godinaStudija. "</td><td>" . $student->ostvareniECTSbodovi ."</td><td>". $student->prosjekOcjena . '</td><td>' . $student->soba->naziv."</td></tr>";
                $cntr++;
                
              }
            ?>
        </tbody>
    </table>
  
</body>
</html>