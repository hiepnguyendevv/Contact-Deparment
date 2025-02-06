<?php


class Department
{
  private $departmentId;
  private $departmentName;
  private $address;
  private $email;
  private $phone;
  private $logo;
  private $website;
  private $parentDepartmentId;

  public function __construct($departmentId, $departmentName, $address, $email, $phone,$logo,$website,$parentDepartmentId)
  {
    $this->departmentId = $departmentId;
    $this->departmentName = $departmentName;
    $this->address = $address;
    $this->email = $email;
    $this->phone = $phone;
    $this->logo = $logo;
    $this->website = $website;
    $this->parentDepartmentId = $parentDepartmentId;
    
  }

  public function getDepartmentId(){
    return $this->departmentId;
  }

  public function getDepartmentName(){
    return $this->departmentName;
  }

  public function getAddress(){
    return $this->address;
  
  }

  public function getEmail(){
    return $this->email;
  }

  public function getPhone(){
    return $this->phone;
  }
  public function getLogo(){
    return $this->logo;
  }

  public function getWebsite(){
    return $this->website;
  }

  public function getParentDepartmentId(){
    return $this->parentDepartmentId;
  }

  public function setDepartmentId($departmentId){
    $this->departmentId = $departmentId;
  }

  public function setDepartmentName($departmentName){
    $this->departmentName = $departmentName;
  }

  public function setAddress($address){
    $this->address = $address;
  }

  public function setEmail($email){
    $this->email = $email;
  }

  public function setPhone($phone) {
    $this->phone = $phone;
  }

  public function setLogo($logo) {
    $this->logo = $logo;
  }
  public function setWebsite($website) {
    $this->website = $website;
  }

  public function setParentDepartmentId($parentDepartmentId) {
      $this->parentDepartmentId = $parentDepartmentId;
    }

  
}