<?php
    namespace DESAFIO_FATEC\DAO;
    use \PDO;

    class AnswerDAO extends DAO {
        public $conexao;
        public function __construct()
        {
            parent::__construct(); 
        } 

        function joinSelectQuestionAndAnswer() {
            $sql = "SELECT p.id as id, p.descricao as pergunta, r.descricao as resposta, 
            DATE_FORMAT(r.data_envio, '%d/%m/%Y - %Hh%im') as data_envio
            FROM resposta r
            JOIN pergunta p ON (p.id = r.id_pergunta);";

            $stmt = $this->conexao->prepare($sql);
            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_CLASS);
        }

        function getAllRowsFilter() {
            $sql = "SELECT * FROM pergunta";

            $stmt = $this->conexao->prepare($sql);
            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_CLASS);
        }

        function getAllRowsQuestionFilter(int $id) {
            $sql = "SELECT p.id as id, p.descricao as pergunta, r.descricao as resposta, 
            DATE_FORMAT(r.data_envio, '%d/%m/%Y - %Hh%im') as data_envio
            FROM resposta r
            JOIN pergunta p ON (p.id = r.id_pergunta) WHERE p.id = ?;";

            $stmt = $this->conexao->prepare($sql);
            $stmt->bindValue(1, $id);
            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_CLASS);
        }
    }