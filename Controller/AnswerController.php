<?php
    Class AnswerController extends Controller {
        
        public static function answerManage() {
            parent::isAuthenticated();
            $model = new AnswerModel();
            $arr_answer_question = $model->getAllRows();

            include "./View/modules/Answer/answer-manage.php";
        }
    }