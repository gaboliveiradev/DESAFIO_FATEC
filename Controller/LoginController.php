<?php
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
    }