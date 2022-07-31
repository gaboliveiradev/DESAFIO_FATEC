<?php
    class QuestionDAO {
        public $conexao;
        public function __construct()
        {
            include_once 'MySQL.php';
    
            $this->conexao = new MySQL();
        }  

        function insertQuestion(QuestionModel $model) {
            $sql = "INSERT INTO pergunta (descricao) VALUES (?)";

            $stmt = $this->conexao->prepare($sql);
            $stmt->bindValue(1, $model->descricao);
            $stmt->execute();
        }

        function updateQuestion(QuestionModel $model) {
            $sql = "UPDATE pergunta SET descricao = ? WHERE id = ?";
            
            $stmt = $this->conexao->prepare($sql);
            $stmt->bindValue(1, $model->descricao);
            $stmt->bindValue(2, $model->id);
            $stmt->execute();
        }

        function getAllRows() {
            $sql = "SELECT * FROM pergunta WHERE ativo = \"S\"";

            $stmt = $this->conexao->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_CLASS);
        }

        function delete(int $id) {
            $sql = "UPDATE pergunta SET ativo = \"N\" WHERE id = ?";

            $stmt = $this->conexao->prepare($sql);
            $stmt->bindValue(1, $id);
            $stmt->execute();
        }

        function getById(int $id) {
            $sql = "SELECT * FROM pergunta WHERE id = ?";

            $stmt = $this->conexao->prepare($sql);
            $stmt->bindValue(1, $id);
            $stmt->execute();

            return $stmt->fetchObject("QuestionModel");
        }

        function queryQuestion($data_query) {
            $data = "%". $data_query . "%";
            $sql = "SELECT * FROM pergunta WHERE descricao LIKE ?";

            $stmt = $this->conexao->prepare($sql);
            $stmt->bindValue(1, $data);
            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_CLASS);
        }

        function insertAnswer(QuestionModel $model, $arr_answer, $arr_ids) {
            for($i = 1; $i < $model->questions + 1; $i++) {
                $sql = "INSERT INTO resposta (id_pergunta, descricao) VALUES (?, ?)";

                $stmt = $this->conexao->prepare($sql);
                $stmt->bindValue(1, $arr_ids[$i]);
                $stmt->bindValue(2, $arr_answer[$i]);
                $stmt->execute();
            }
        }
    }