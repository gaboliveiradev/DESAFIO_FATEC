<?php
    class QuestionController extends Controller {

        public static function registerQuestionView() {
            parent::render("Question/register_question");
        }
        
        public static function questionView() {
            $model = new QuestionModel();
            $model->getAllRows();

            include "./View/modules/Question/question_view.php";
        }

        public static function saveQuestion() {
            $model = new QuestionModel();
            $model->descricao = $_POST['descricao'];
            $model->saveQuestion();
            header("Location: /question");
        }
    }