<?php
    class EmployeeController extends Controller {
        
        public static function employeeForm() {
            include "./View/modules/Employee/employee_form.php";
        }

        public static function saveEmployee() {
            $model = new EmployeeModel();


            $model->name = $_POST['name_employee'];
            $model->email = $_POST['email_employee'];
            $model->pass = $_POST['password_employee'];
            if(isset($_POST['adm_employee'])) $model->adm = $_POST['adm_employee'];

            $model->saveEmployee();
            header("Location: /employee/form");
        }
    }