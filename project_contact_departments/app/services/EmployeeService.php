<?php
require_once ROOT . '/app/models/Department.php';
require_once ROOT . '/app/models/Employee.php';
require_once ROOT . '/app/libs/DBconnection.php';
class EmployeeService
{
    public function getAllEmployee()
    {
        $dbconnect = new DBconnection();
        $conn = $dbconnect->getConn();
        if ($conn != null) {
            $sql = "SELECT *  FROM employees ";
            $stmt = $conn->query($sql);
            $employees = [];
            while ($row = $stmt->fetch()) {
                $employee = new Employee($row['EmployeeId'], $row['FullName'], $row['Address'], $row['Email'], $row['MobilePhone'], $row['Position'], $row['Avatar'], $row['DepartmentId']);
                $employees[] = $employee;
            }
            return $employees;
        }

    }

    public function getEmployeeById($id){
        $dbconnect = new DBconnection();
        $conn = $dbconnect->getConn();
        // $conn = new PDO("mysql:host=localhost;dbname=project","root","hiep2003");
        if($conn!=null){
          $sql = "SELECT * FROM employees where EmployeeId = $id";
          $stsm = $conn->query($sql);
          $row = $stsm->fetch();
            // $hash_pwd = password_hash($row['password'],PASSWORD_DEFAULT);
            $employee = new Employee($row['EmployeeId'], $row['FullName'], $row['Address'], $row['Email'], $row['MobilePhone'], $row['Position'], $row['Avatar'], $row['DepartmentId']);
            // $department = $row['DepartmentName'];
           
          
          return $employee;
        }
      }

      public function search($name){
        $dbconnect = new DBconnection();
        $conn = $dbconnect->getConn();
        if ($conn != null) {
            $sql = "SELECT * FROM employees
            WHERE FullName LIKE '%$name%' ";
            $stmt = $conn->query($sql);
            $employees = [];
            while ($row = $stmt->fetch()) {
                $employee = new Employee($row['EmployeeId'], $row['FullName'], $row['Address'], $row['Email'], $row['MobilePhone'], $row['Position'], $row['Avatar'], $row['DepartmentId']);
                $employees[] = $employee;
            }
            return $employees;
        }
      }
      public function getEmployeeByIdDp($id){
        $dbconnect = new DBconnection();
        $conn = $dbconnect->getConn();
        // $conn = new PDO("mysql:host=localhost;dbname=project","root","hiep2003");
        if($conn!=null){
          $sql = "SELECT * FROM employees where DepartmentID = $id";
          $stsm = $conn->query($sql);
            // $hash_pwd = password_hash($row['password'],PASSWORD_DEFAULT);
            $employees = [];
            while ($row = $stsm->fetch()) {
                $employee = new Employee($row['EmployeeId'], $row['FullName'], $row['Address'], $row['Email'], $row['MobilePhone'], $row['Position'], $row['Avatar'], $row['DepartmentId']);
                $employees[] = $employee;
            }
            return $employees;
        }
      }  

    public function addEmployee($name,$address,$email,$mobilephone,$position,$avatar,$departmentid){

        $dbconnect = new DBconnection();
        $conn = $dbconnect->getConn();

        if($conn!=null){
            try {
                $sql = "INSERT INTO employees (FullName,Address,Email,MobilePhone,Position,Avatar,DepartmentId) VALUES 
                ('$name', '$address', '$email', '$mobilephone', '$position', '$avatar', '$departmentid')";
                $conn->exec($sql);
                return true;
            } catch (PDOException $e) {
                return false;
            }
        }


    }

    public function updateEmployee($id,$name,$address,$email,$mobilephone,$position,$avatar,$departmentid){

        $dbconnect = new DBconnection();
        $conn = $dbconnect->getConn();

        if($conn!=null){
            try {
                $sql = "UPDATE employees SET Fullname = '$name', Address = '$address',Email = '$email',
                Mobilephone = '$mobilephone',Position = '$position',Avatar = '$avatar',DepartmentId = '$departmentid' where EmployeeId = $id";
                $conn->exec($sql);
                return true;
            } catch (PDOException $e) {
                echo "Error: ".$e->getMessage();
                return false;
            }
        }


    }

    public function deleteEmployee($id){

        $dbconnect = new DBconnection();
        $conn = $dbconnect->getConn();

        if($conn!=null){
            try {
                $sql = "DELETE FROM employees where EmployeeId = $id";
                $conn->exec($sql);
                return true;
            } catch (PDOException $e) {
                echo "Error: ".$e->getMessage();
                return false;
            }
        }


    }
}