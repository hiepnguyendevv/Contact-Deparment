<?php

require_once ROOT . '/app/services/UserService.php';
require_once ROOT . '/app/services/EmployeeService.php';
class UserController
{

  public function profile()
  {
            session_start();

    
            $id = $_GET['id'];
            // $_SESSION['employeeId'] = $id;
            $employees = new EmployeeService();
            $employee = $employees ->getEmployeeById($id);
       

       
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            if(isset($_POST['update'])){
                $name = $_POST['name'];
                $address = $_POST['address'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];
                $position = $_POST['position'];
                $avatar = $_POST['avatar'];
                $departmentId = $_POST['departmentId'];

                // $id = $_SESSION['employeeId'];
                $id1 = $id;
                
                $employees = new EmployeeService();
                
                $result = $employees->updateEmployee($id1,$name,$address,$email,$phone,$position,$avatar,$departmentId);

                if($result){
                    header('Location:'. PATH. '/public/index.php?controller=user&action=profile&msg=Sửa thành công&id='.$id);
                }else{
                    header('Location:'. PATH. '/public/index.php?controller=user&action=profile&error=Sửa thất bại&id='.$id);
                }

                
            }
        }
    
    


    include ROOT . '/app/views/users/index.php';
  }


  public function login()
  {
    session_start();
    if (isset($_POST['login'])) {

      $username = $_POST['user'];
      $password = $_POST['pass'];
      $service = new UserService();
      $users = $service->getAllUser();
      $user = null;
      foreach ($users as $u) {
        if ($u->getUsername() == $username) {
          $user = $u;
          break;
        }
      }
      // echo print_r($user);

      // $pass = password_verify($password, $user->getPassword());

      
      

      if ($user && password_verify($password, $user->getPassword())) {
        
        $_SESSION['id'] = $user->getEmployeeId();
        $_SESSION['user'] = $user;
        $_SESSION['username'] = $user->getUsername();
        $_SESSION['role'] = $user->getRole();
        $role = $user->getRole();
        
        


        if ($role == 'user') {
          header('Location:' . PATH . '/public/index.php?controller=department&action=index&msg=Thành công');
        } else if ($role == 'admin') {
          header('Location:' . PATH . '/public/index.php?controller=department&action=index&msg=Thành công');
        }
      } else {
        header('Location:' . PATH . '/public/index.php?controller=user&action=login&error=error');
      }

    }
    include ROOT . '/app/views/login/index.php';

  }

  public function logout()
  {

    session_start();
    session_destroy();
    header('Location:' . PATH . '/public/index.php?controller=department&action=index');
  }
}