<?php
    namespace DESAFIO_FATEC\Controller;

    abstract class Controller {

        protected static function isAuthenticated() {
            if(!isset($_SESSION['user']))
                header("Location: /login");
        }

        protected static function render($view, $model = null) {
            $arquivo = "./View/modules/$view.php";

            if(file_exists($arquivo))
                include  $arquivo;
            else 
                echo "arquivo não encontrado. Caminho: " . $arquivo;   
        }
    }