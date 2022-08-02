<?php
    class EmployeeModel {
        
        public $id, $name, $email, $pass, $adm = null;

        public function saveEmployee() {
            $dao = new EmployeeDAO();
            $dao->insertEmployee($this);
        }
    }