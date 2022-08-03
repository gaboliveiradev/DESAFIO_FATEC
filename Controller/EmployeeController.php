<?php
    class EmployeeController extends Controller {
        
        public static function employeeForm() {
            parent::isAuthenticated();
            $model = new EmployeeModel();
            if(isset($_GET['id'])) $model = $model->getById( (int) $_GET['id']);

            parent::render("Employee/employee_form", $model);
        }

        public static function saveEmployee() {
            $model = new EmployeeModel();

            $model->id = $_POST['id'];
            $model->name = $_POST['name_employee'];
            $model->email = $_POST['email_employee'];
            $model->pass = $_POST['password_employee'];
            if(isset($_POST['adm_employee'])) $model->adm = $_POST['adm_employee'];

            $model->saveEmployee();
            header("Location: /employee-manage");
        }

        public static function employeeManage() {
            $model = new EmployeeModel();
            $arr_employee = $model->getAllRows();
            
            include "./View/modules/Employee/employee_manage.php";
        }

        public static function employeeDelete() {
            $model = new EmployeeModel();
            $model->deleteEmployee( (int) $_GET['id']);
            header("Location: /employee-manage");
        }
    }