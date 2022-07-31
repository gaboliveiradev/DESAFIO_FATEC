<?php
    class LoginController extends Controller {

        public static function loginView() {
            parent::render("Login/login_form");
        }
    }