<?php
    namespace DESAFIO_FATEC\DAO;
    use DESAFIO_FATEC\Model\LoginModel;

    class LoginDAO extends DAO {
        public $conexao;
        public function __construct()
        {
            parent::__construct();  
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