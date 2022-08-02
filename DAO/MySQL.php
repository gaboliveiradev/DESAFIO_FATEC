<?php
    class MySQL extends PDO {
        private $dsn = 'mysql:host=localhost:3307;dbname=agatecnologia_db';
        private $user = "root";
        private $pass = "bibi2835201819";

        public function __construct()
        {
            try {
                return parent::__construct(
                    $this->dsn, 
                    $this->user, 
                    $this->pass, 
                    [PDO::MYSQL_ATTR_INIT_COMMAND =>  "SET NAMES 'UTF8'"]
                );
            } catch (PDOException $e) {
                echo "[X] - Ocorreu um erro inesperado ao tentar se conectar ao MySQL.";
            }
        }
    }