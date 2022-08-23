<?php
    namespace DESAFIO_FATEC\Controller;
    use DESAFIO_FATEC\Model\LoginModel;

    class LoginController extends Controller {

        public static function loginView() {
            parent::render("Login/login_form");
        }

        public static function loginAuthenticate() {
            $model = new LoginModel();
            
            $model->email = $_POST['email'];
            $model->senha = $_POST['senha'];
            $model->loginAuthenticate();
        }

        public static function logout() {
            if(isset($_GET['exit'])) {
                unset($_SESSION['user']);
                header("Location: /login");
            }
        }
    }