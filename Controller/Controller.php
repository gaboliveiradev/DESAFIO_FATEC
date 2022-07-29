<?php
    abstract class Controller {

        protected static function render($view, $model = null) {
            $arquivo = "./View/modules/$view.php";

            if(file_exists($arquivo))
                include  $arquivo;
            else 
                echo "arquivo não encontrado. Caminho: " . $arquivo;   
        }
    }