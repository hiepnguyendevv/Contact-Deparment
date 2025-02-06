<?php

require_once ROOT . '/app/services/DepartmentService.php';
class DepartmentController
{
  public function index()
  {
    session_start();

    $departmentService = new DepartmentService();
    $departments = $departmentService->getAllDepartment();

    include ROOT.'/app/views/home/index.php';

  }

  public function get()
  {

  }

}