<?php
class Configuration{
    public $host = "127.0.0.1";
    public $dbName ="employees";
    public $username = "root";
    public $password ="";

    // public function __construct($Host, $DBName, $Username, $PW)
    // {
    //     $this->host=$Host;
    //     $this->dbName = $DBName;
    //     $this->username=$Username;
    //     $this->password=$PW;
    // }
}

class Employee{
    public $EmpNo;
    public $birthDate;
    public $FirstName;
    public $LastName;
    public $Gender;
    public $HireDate;

    public function __construct($empNo, $bDate, $Name, $Surname, $gender, $hiredate)
    {
        $this->EmpNo = $empNo;
        $this->birthDate = $bDate;
        $this->FirstName = $Name;
        $this->LastName = $Surname;
        $this->Gender = $gender;
        $this->HireDate = $hiredate;
        
    }
}

class Department{
    public $departNo;
    public $DepartName;

    public function __construct($DEPTNO, $DEPT_NAME)
    {
        $this->departNo = $DEPTNO;
        $this->DepartName = $DEPT_NAME;
    }
}


?>