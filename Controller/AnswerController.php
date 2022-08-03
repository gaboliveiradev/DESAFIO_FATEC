<?php
    Class AnswerController extends Controller {
        
        public static function answerManage() {
            parent::isAuthenticated();
            $model = new AnswerModel();
            if(isset($_GET['filter'])) {
                $arr_answer_question = $model->getAllRowsQuestionFilter( (int) $_GET['filter']);
            } else {
                $arr_answer_question = $model->getAllRows();
            }
            $arr_answer_question_filter = $model->getAllRowsFilter();

            include "./View/modules/Answer/answer-manage.php";
        }

        public static function clearFilter() {
            unset($_GET['filter']);
            header("Location: /answer-manage");
        }
    }