<?php


class User
{
  private $username;
  private $password;
  private $role;
  private $EmployeeId;

  public function __construct($username, $password, $role, $EmployeeId){
    $this->username = $username;
    $this->password = $password;
    $this->role = $role;
    $this->EmployeeId = $EmployeeId;
  }
  
  public function getUsername(){
    return $this->username;
  }
  
  public function setUsername($username){
    $this->username = $username;
  }

  public function getPassword(){
    return $this->password;
  
  }

  public function setPassword($password){
    $this->password = $password;
  }

  public function getRole(){
    return $this->role;
  }

  public function setRole($role){
    $this->role = $role;
  }

  public function getEmployeeId(){
    return $this->EmployeeId;
  }
  
  public function setEmployeeId($EmployeeId){
    $this->EmployeeId = $EmployeeId;
  }
}
