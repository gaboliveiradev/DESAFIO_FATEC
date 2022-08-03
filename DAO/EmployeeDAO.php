<?php
    class EmployeeDAO {
        public $conexao;
        public function __construct()
        {
            include_once "MySQL.php";

            $this->conexao = new MySQL();
        }

        function insertEmployee(EmployeeModel $model) {
            if($model->adm == null) {
                $sql = "INSERT INTO funcionario (nome, email, senha) VALUES (?, ?, ?)";
            } else {
                $sql = "INSERT INTO funcionario (nome, email, senha, adm) VALUES (?, ?, ?, ?)";
            }

            $stmt = $this->conexao->prepare($sql);
            $stmt->bindValue(1, $model->name);
            $stmt->bindValue(2, $model->email);
            $stmt->bindValue(3, sha1($model->pass) );
            if($model->adm != null) $stmt->bindValue(4, $model->adm);
            $stmt->execute();
        }

        function deleteEmployee(int $id) {
            $sql = "DELETE FROM funcionario WHERE id = ?";

            $stmt = $this->conexao->prepare($sql);
            $stmt->bindValue(1, $id);
            $stmt->execute();
        }

        function getById(int $id) {
            $sql = "SELECT * FROM funcionario WHERE id = ?";

            $stmt = $this->conexao->prepare($sql);
            $stmt->bindValue(1, $id);
            $stmt->execute();
            
            return $stmt->fetchObject("EmployeeModel");
        }

        function getAllRows() {
            $sql = "SELECT * FROM funcionario";

            $stmt = $this->conexao->prepare($sql);
            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_CLASS);
        }
    } 