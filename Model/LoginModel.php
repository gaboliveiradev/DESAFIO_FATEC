<?php
    class LoginModel {

        public $id, $email, $senha;

        public function loginAuthenticate() {
            $dao = new LoginDAO();
            $data_user = $dao->selectByUserForLogin($this);

            if($data_user) {
                $_SESSION['user'] = $data_user;
                header("Location: /question-manage");
            } else {
                header("Location: /login");
            }
        }
    }