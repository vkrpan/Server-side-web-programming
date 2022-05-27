<?php
header('Content-type: text/json');
header('Content-type: application/json; charset=utf-8');
include 'connection.php';
if(isset($_GET['json_id'])){
    switch($_GET['json_id']){
        case "get_all_employees":
            $query = "SELECT * FROM employees LIMIT 100";
            $oResult = $oConnection->query($query);
            $rows = array();
            while($oRow = $oResult->fetch(PDO::FETCH_BOTH)){
                $rows[] = $oRow;
            }
            echo json_encode($rows);
        break;

        case "get_all_departments":
            $query = "SELECT * FROM  departments";
            $oResult = $oConnection->query($query);
            $rows = array();
            while($oRow = $oResult->fetch(PDO::FETCH_BOTH)){
                $rows[] = $oRow;
            }
            echo json_encode($rows);
        break;
        case "get_employee_by_id":
            $query = "SELECT * FROM  employees WHERE emp_no=".$_GET['employee_id'];
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