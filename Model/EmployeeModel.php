<?php
    class EmployeeModel {
        
        public $id, $name, $email, $pass, $adm = null;

        public function saveEmployee() {
            $dao = new EmployeeDAO();
            $dao->insertEmployee($this);
        }

        public function getAllRows() {
            $dao = new EmployeeDAO();
            return $dao->getAllRows();
        }

        public function deleteEmployee(int $id) {
            $dao = new EmployeeDAO();
            $dao->deleteEmployee( (int) $id);
        }

        public function getById(int $id) {
            $dao = new EmployeeDAO();
            $obj = $dao->getById( (int) $id);
            return ($obj) ? $obj : new EmployeeModel    ();
        }
    }