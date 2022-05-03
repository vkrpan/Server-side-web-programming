<?php
include 'connection.php';
//include 'classes.php';

ini_set('memory_limit', '2048M');

$sQuery = "SELECT * FROM employees LIMIT 100";
$oRecord = $oConnection->query($sQuery);
$i=1;
echo '<table><tr><th>R.br.</th><th>Id</th><th>Birth Date</th><th>First Name</th><th>Lasr Name</th><th>Gender</th><th>Hire Date</th></tr>';
while($oRow = $oRecord->fetch(PDO::FETCH_BOTH)){
    echo '<tr><td>'.$i.'</td><td>'.$oRow['emp_no'].'</td><td>'.$oRow['birth_date'].'</td><td>'.$oRow['first_name'].'</td><td>'.$oRow['last_name'].'</td><td>'.$oRow['gender'].'</td><td>'.$oRow['hire_date'].'</td></tr>';
    $i++;
}
echo '</table>';
?>