<?php
    namespace DESAFIO_FATEC\MySQL;
    use \PDO;
    use \PDOException;

    abstract class MySQL extends PDO {
        public function __construct()
        {
            try {
                $dsn = "mysql:host=" . $_ENV['db']['host'] . ";dbname=" . $_ENV['db']['database'];

                return parent::__construct(
                    $this->dsn, 
                    $_ENV['db']['user'], 
                    $_ENV['db']['pass'], 
                    [PDO::MYSQL_ATTR_INIT_COMMAND =>  "SET NAMES 'UTF8'"]
                );
            } catch (PDOException $e) {
                echo "[X] - Ocorreu um erro inesperado ao tentar se conectar ao MySQL.";
            }
        }
    }