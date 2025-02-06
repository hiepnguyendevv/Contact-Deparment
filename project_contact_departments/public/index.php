<?php


require_once '../app/config/config.php';

require_once ROOT . '/app/controllers/EmployeeController.php';
require_once ROOT . '/app/controllers/DepartmentController.php';
require_once ROOT . '/app/controllers/UserController.php';


// require_once ROOT.'/app/services/DepartmentService.php';

// $adminController = new EmployeeController();
// $adminController->index();

// $userController = new UserController();

// $userController->login();

// $url = $_SERVER['REQUEST_URI'];
// $method = $_SERVER['REQUEST_METHOD'];
// $i = 1;

$controller = isset($_GET['controller']) ? $_GET['controller'] : 'department';

if (isset($_GET['action'])) {
  $action = $_GET['action'];
} else {
  $action = 'index';
}



switch ($controller) {
  case 'department':
    $controller = ucfirst($controller);
    $controller = $controller . 'Controller';
    $path = ROOT . '/app/controllers/' . $controller . '.php';
    if (!file_exists($path)) {
      die('tep tin khong ton tai');
      exit(1);
    }


    $myController = new $controller();
    switch ($action) {
      case 'index':
        if (!method_exists($controller, $action)) {
          die('phuong thuc ko ton tai');
          exit(1);
        }
        $myController->$action();
        break;
    }
    break;



  case 'user':
    $controller = ucfirst($controller);
    $controller = $controller . 'Controller';
    $path = ROOT . '/app/controllers/' . $controller . '.php';
    if (!file_exists($path)) {
      die('tep tin khong ton tai');
      exit(1);
    }

    $myController = new $controller();
    switch ($action) {
      case 'login':
        if (!method_exists($controller, $action)) {
          die('phuong thuc ko ton tai');
          exit(1);
        }
        $myController->$action();
        break;
      case 'logout':
        if (!method_exists($controller, $action)) {
          die('phuong thuc ko ton tai');
          exit(1);
        }
        $myController->$action();
        break;
      case 'profile':
        if (!method_exists($controller, $action)) {
          die('phuong thuc ko ton tai');
          exit(1);
        }
        $myController->$action();
        break;

    }
    break;

  case 'employee':
    $controller = ucfirst($controller);
    $controller = $controller . 'Controller';
    $path = ROOT . '/app/controllers/' . $controller . '.php';
    if (!file_exists($path)) {
      die('tep tin khong ton tai');
      exit(1);
    }

    $myController = new $controller();
    switch ($action) {
      case 'index':
        if (!method_exists($controller, $action)) {
          die('phuong thuc ko ton tai');
          exit(1);
        }
        $myController->$action();
        break;
      case 'adminSearch':
        if (!method_exists($controller, $action)) {
          die('phuong thuc ko ton tai');
          exit(1);
        }
        $myController->$action();
        break;  
      case 'detail':
        if (!method_exists($controller, $action)) {
          die('phuong thuc ko ton tai');
          exit(1);
        }
        $myController->$action();
        break; 
      case 'search':
        if (!method_exists($controller, $action)) {
          die('phuong thuc ko ton tai');
          exit(1);
        }
        $myController->$action();
        break;    

      case 'getbyid':
        if (!method_exists($controller, $action)) {
          die('phuong thuc ko ton tai');
          exit(1);
        }
        $myController->$action();
        break;  

      case 'create':
        if (!method_exists($controller, $action)) {
          die('phuong thuc ko ton tai');
          exit(1);
        }
        $myController->$action();
        break;
      case 'update':
        if (!method_exists($controller, $action)) {
          die('phuong thuc ko ton tai');
          exit(1);
        }
        $myController->$action();
        break; 
        case 'delete':
          if (!method_exists($controller, $action)) {
            die('phuong thuc ko ton tai');
            exit(1);
          }
          $myController->$action();
          break;           
    }
    break;


}

?>