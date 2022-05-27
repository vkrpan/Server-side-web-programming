<?php
include 'connection.php';
include 'json.php';
if(isset($_POST['action_id'])){

    switch($_POST['action_id']){

        case "AddEmployee":

            if(isset($_POST['ime'],$_POST['prezime'], $_POST['datRod'], $_POST['datWork'], $_POST['spol'])){
                $empIdQuery = "SELECT * FROM employees ORDER BY emp_no DESC LIMIT 1";
                $EmpStatement = $oConnection->query($empIdQuery)->fetch();
                $result = $EmpStatement['emp_no'];

                $sQuery = "INSERT INTO employees (emp_no, birth_date,first_name, last_name, gender, hire_date) VALUES (:EmpNo, :birthDate, :FirstName, :LastName, :Gender, :HireDate)";
                $oStatement = $oConnection->prepare($sQuery);
                $oEmployee = new Employee(intval($result+1), $_POST['datRod'],$_POST['ime'], $_POST['prezime'],$_POST['spol'],$_POST['datWork']);
                $fwd = (array)$oEmployee;
                if($oStatement->execute($fwd)){
                    echo "<br>Zaposlenik".$_POST['ime']. " je upješno unesen!";
                }
                else{
                    echo "Došlo je do greške";
                }
            }
        break;
        case "EditEmployee":
            $query = "SELECT * FROM  employees WHERE emp_no=".$_POST['employee_id'];
            $oResult = $oConnection->query($query);
            $rows = array();
            while($oRow = $oResult->fetch(PDO::FETCH_BOTH)){
                $rows[] = $oRow;
            }

            echo json_encode($rows);
            break;

    }
}

?>