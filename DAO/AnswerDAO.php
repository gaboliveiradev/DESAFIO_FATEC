<?php
    class AnswerDAO {
        public $conexao;
        public function __construct()
        {
            include_once 'MySQL.php';
    
            $this->conexao = new MySQL();
        } 

        function joinSelectQuestionAndAnswer() {
            $sql = "SELECT p.descricao as pergunta, r.descricao as resposta, 
            DATE_FORMAT(r.data_envio, '%d/%m/%Y - %Hh%im') as data_envio
            FROM resposta r
            JOIN pergunta p ON (p.id = r.id_pergunta);";

            $stmt = $this->conexao->prepare($sql);
            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_CLASS);
        }
    }