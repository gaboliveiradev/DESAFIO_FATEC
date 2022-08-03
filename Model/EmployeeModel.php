<?php
    class EmployeeModel {
        
        public $id, $nome, $email, $pass, $adm = null;

        public function saveEmployee() {
            $dao = new EmployeeDAO();
            return($this->id == null) ? $dao->insertEmployee($this) : $dao->updateEmployee($this);
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
            return ($obj) ? $obj : new EmployeeModel();
        }
    }