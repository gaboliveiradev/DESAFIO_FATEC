<?php
    namespace DESAFIO_FATEC\DAO;
    use DESAFIO_FATEC\Model\LoginModel;
    use DESAFIO_FATEC\MySQL\MySQL;

    class LoginDAO {
        public $conexao;
        public function __construct()
        {
            include_once 'MySQL.php';
    
            $this->conexao = new MySQL();
        } 

        function selectByUserForLogin(LoginModel $model) {
            $sql = "SELECT * FROM funcionario WHERE senha = ? AND email = ?";

            $stmt = $this->conexao->prepare($sql);
            $stmt->bindValue(1, sha1($model->senha));
            $stmt->bindValue(2, $model->email);
            $stmt->execute();
            
            return $stmt->fetchObject();
        }
    }