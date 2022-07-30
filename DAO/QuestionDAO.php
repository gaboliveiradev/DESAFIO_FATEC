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

        }

        function getAllRows() {
            $sql = "SELECT * FROM pergunta";

            $stmt = $this->conexao->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_CLASS);
        }

        function delete(int $id) {
            $sql = "DELETE FROM pergunta WHERE id = ?";

            $stmt = $this->conexao->prepare($sql);
            $stmt->bindValue(1, $id);
            $stmt->execute();
        }
    }