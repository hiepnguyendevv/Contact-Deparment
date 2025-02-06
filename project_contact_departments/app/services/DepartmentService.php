<?php


require_once ROOT.'/app/libs/DBconnection.php';
require_once ROOT.'/app/models/Department.php';
class DepartmentService {
  public function getAllDepartment(){
    $dbconnect = new DBconnection();
    $conn = $dbconnect->getConn();
    // $conn = new PDO("mysql:host=localhost;dbname=project","root","hiep2003");
    if($conn!=null){
      // $sql = "SELECT * FROM departments WHERE departments.ParentDepartmentId IS null";
      $sql = "SELECT * FROM departments ";
      $stsm = $conn->query($sql);
      $departments = [];
      while($row = $stsm->fetch()){
        $department = new Department($row['DepartmentID'], $row['DepartmentName'], 
            $row['Address'], $row['Email'], $row['Phone'], $row['Logo'],$row['Website'], $row['ParentDepartmentId']);
        // $department = $row['DepartmentName'];
        $departments[] = $department;
      }
      return $departments;
    }
    
  }

  public function getDepartmentById($id){
    $dbconnect = new DBconnection();
    $conn = $dbconnect->getConn();
    // $conn = new PDO("mysql:host=localhost;dbname=project","root","hiep2003");
    if($conn!=null){
      $sql = "SELECT * FROM departments WHERE DepartmentID = {$id}";
      $stsm = $conn->query($sql);
      $departments = [];
      while($row = $stsm->fetch()){
        $department = new Department($row['DepartmentID'], $row['DepartmentName'], 
            $row['Address'], $row['Email'], $row['Phone'], $row['Logo'],$row['Website'], $row['ParentDepartmentId']);
        // $department = $row['DepartmentName'];
        $departments[] = $department;
      }
      return $departments;
    }

  }

  public function addDepartment($name,$address,$email,$phone,$logo,$website,$parentDepartmentId){
    $dbconnect = new DBconnection();
    $conn = $dbconnect->getConn();

    if($conn!=null){
      try {
        $sql = "INSERT INTO departments (DepartmentName,Address,Email,Phone,Logo,Website,ParentDepartmentId) VALUES 
        ('$name', '$address', '$email', '$phone', '$logo', '$website', '$parentDepartmentId')";
        $conn->exec($sql);
        return true;
      } catch (PDOException $e) {
        return false;
      }

    }

  }

  public function updateDepartment($id,$name,$address,$email,$phone,$logo,$website,$parentDepartmentId){
    $dbconnect = new DBconnection();
    $conn = $dbconnect->getConn();

    if($conn!=null){
      try {
        $sql = "UPDATE departments set DepartmentName = $name ,Address = $address,Email = $email, Phone = $phone,
         Logo = $logo, Website=$website,ParentDepartmentId=$parentDepartmentId where DepartmentID = $id";
        $conn->exec($sql);
        return true;
      } catch (PDOException $e) {
        return false;
      }

    }

  }

  public function deleteDepartment($id){
    $dbconnect = new DBconnection();
    $conn = $dbconnect->getConn();

    if($conn!=null){
      try {
        $sql = "DELTE FROM Departments WHERE DepartmentID = $id";
        $conn->exec($sql);
        return true;
      } catch (PDOException $e) {
        return false;
      }

    }

  }








}

