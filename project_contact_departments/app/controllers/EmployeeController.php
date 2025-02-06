<?php
require_once ROOT . '/app/services/EmployeeService.php';
require_once ROOT . '/app/services/DepartmentService.php';

class EmployeeController
{
    public function index()
    {
        $employeeService = new EmployeeService();
        $employees = $employeeService->getAllEmployee();

        $itemsPerPage = 6;
        $currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
        $currentPageItems = array_slice($employees, ($currentPage - 1) * $itemsPerPage, $itemsPerPage);
        $totalPages = ceil(count($employees) / $itemsPerPage);

        include ROOT . '/app/views/admin/index.php';
    }

    public function getbyid()
    {
        session_start();
        $id = $_GET['id'];
        $employeeService = new EmployeeService();
        $employees = $employeeService->getEmployeeByIdDp($id);
        $itemsPerPage = 6;
        $currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
        $currentPageItems = array_slice($employees, ($currentPage - 1) * $itemsPerPage, $itemsPerPage);
        $totalPages = ceil(count($employees) / $itemsPerPage);

        include ROOT . '/app/views/employees/index.php';
    }

    public function detail()
    {
        $id = $_GET['id'];
        $employees = new EmployeeService();
        $employee = $employees ->getEmployeeById($id);        // echo '<pre>';
        // echo print_r($employees);
        // echo '</pre>';
        include ROOT . '/app/views/employees/detail.php';
    }
    
    public function adminSearch(){
        session_start();
        if(isset($_POST['search'])){
            $name = $_POST['name'];
            header('Location:'.PATH. '/public/index.php?controller=employee&action=adminSearch&name='.$name);

        }

        $name = $_GET['name'];
        $employeeService = new EmployeeService();
        $employees = $employeeService->search($name);
        $itemsPerPage = 6;
        $currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
        $currentPageItems = array_slice($employees, ($currentPage - 1) * $itemsPerPage, $itemsPerPage);
        $totalPages = ceil(count($employees) / $itemsPerPage);
        include ROOT. '/app/views/admin/search.php';

        
    }

    public function create(){

        $departmentService = new DepartmentService();
        $departments = $departmentService->getAllDepartment();
        
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            if(isset($_POST['create'])){
                $name = $_POST['name'];
                $address = $_POST['address'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];
                $position = $_POST['position'];
                $avatar = $_POST['avatar'];
                $departmentId = $_POST['departmentId'];

    

                $employees = new EmployeeService();

                $result = $employees->addEmployee($name,$address,$email,$phone,$position,$avatar,$departmentId);
                if($result){
                    header('Location:'. PATH. '/public/index.php?controller=employee&action=index&msg=Thêm thành công');
                }else{
                    header('Location:'. PATH. '/public/index.php?controller=employee&action=create&error=Thêm thất bại');
                }

                
            }
        }

        include ROOT. '/app/views/admin/create.php';



    }

    public function search(){
        session_start();
        if(isset($_POST['search'])){
            $name = $_POST['name'];
            header('Location:'.PATH. '/public/index.php?controller=employee&action=search&name='.$name);

            
            
        }

        $name = $_GET['name'];
        $employeeService = new EmployeeService();
        $employees = $employeeService->search($name);
        $itemsPerPage = 6;
        $currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
        $currentPageItems = array_slice($employees, ($currentPage - 1) * $itemsPerPage, $itemsPerPage);
        $totalPages = ceil(count($employees) / $itemsPerPage);
        include ROOT. '/app/views/employees/search.php';

        
    }

    public function update(){
        $departmentService = new DepartmentService();
        $departments = $departmentService->getAllDepartment();
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
                $departmentId = $_POST['department'];

                // $id = $_SESSION['employeeId'];
                $id1 = $id;
                
                $employees = new EmployeeService();
                
                $result = $employees->updateEmployee($id1,$name,$address,$email,$phone,$position,$avatar,$departmentId);

                if($result){
                    header('Location:'. PATH. '/public/index.php?controller=employee&action=index&msg=Sửa thành công');
                }else{
                    header('Location:'. PATH. '/public/index.php?controller=employee&action=update&error=Sửa thất bại&id='.$id);
                }

                
            }
        }
            

        include ROOT. '/app/views/admin/update.php';
      
    }

    public function delete(){

        $employee = new EmployeeService();
        $id = $_GET['id'];
        $result = $employee->deleteEmployee($id);
        if($result ){
            header('Location:'. PATH. '/public/index.php?controller=employee&action=index&msg=Xóa thành công');
        }else{
            header('Location:'. PATH. '/public/index.php?controller=employee&action=index&error=Xóa thất bại&id='.$id);
        }
    }

    
}