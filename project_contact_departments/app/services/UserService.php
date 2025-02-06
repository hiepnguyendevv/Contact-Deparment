<?php 
require_once ROOT.'/app/models/User.php';
class UserService {
  public function getAllUser(){
    $dbconnect = new DBconnection();
    $conn = $dbconnect->getConn();
    // $conn = new PDO("mysql:host=localhost;dbname=project","root","hiep2003");
    if($conn!=null){
      $sql = "SELECT * FROM users";
      $stsm = $conn->query($sql);
      $users = [];
      while($row = $stsm->fetch()){
        // $hash_pwd = password_hash($row['password'],PASSWORD_DEFAULT);
        $user = new User($row['Username'], $row['Password'] ,$row['role'],$row['EmployeeId'] );
        // $department = $row['DepartmentName'];
        $users[] = $user;
      }
      return $users;
    }
    
  }

  public function getUserById($id){
    $dbconnect = new DBconnection();
    $conn = $dbconnect->getConn();
    // $conn = new PDO("mysql:host=localhost;dbname=project","root","hiep2003");
    if($conn!=null){
      $sql = "SELECT * FROM users where EmployeeId = $id";
      $stsm = $conn->query($sql);
      $row = $stsm->fetch();
        // $hash_pwd = password_hash($row['password'],PASSWORD_DEFAULT);
      $user = new User($row['Username'], $row['Password'] ,$row['role'],['EmployeeId'] );
        // $department = $row['DepartmentName'];
       
      
      return $user;
    }
  }

  public function login($username){
    $dbconnect = new DBconnection();
    $conn = $dbconnect->getConn();

    if($conn!=null){

        $sql = "SELECT * FROM users WHERE Username = '$username' ";
        $stsm = $conn->query($sql);
        // $password=password_verify($password,PASSWORD_DEFAULT);
        $row = $stsm->fetch();
        if($row>0){
          $user = new User($row['Username'], $row['Password'],$row['role'],$row['EmployeeId'] );
          
          return $user;
        }else{
          return false;
        }
      // } catch (PDOException $e) {
      //   return false;
      // }
  
  }
}



}